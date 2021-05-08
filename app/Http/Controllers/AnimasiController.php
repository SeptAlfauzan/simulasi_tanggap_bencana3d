<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animasi;
use App\Models\User;
use App\Models\Scene;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;


class AnimasiController extends Controller
{
    public function animation(Request $request){
        $scenes = Scene::select('id','nama')->get();
        return view('animasi.form')->with('scenes', $scenes);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'scenes_id'     => 'required',
            'path'          => 'required|file|max:50000',
            'scale'         => 'required',
            'background_color'     => 'required',
            'description'   => 'required',
            'author_id'     => 'required',
        ]);
        // ganti value author_id dari email, ke id
        $validateData['author_id'] = User::where('email', $validateData['author_id'])->first()->id;
        // ganti value author_id dari email, ke id
        $validateData['background_color'] = Str::replaceFirst('#','0x',$validateData['background_color']);
        // return $validateData;
        //get file extension
        $extFile = $validateData['path']->getClientOriginalExtension();//['path'] diganti sesuai name input form
        if ($extFile != 'gltf') {
            throw ValidationException::withMessages(['path' => 'file anda bukan .gltf']);
        }
        //rename file
        $nameFile = 'file-'.time().'.'.$extFile;
        //store file on public/storage/images
        $path = $validateData['path']->storeAs('public/animations', $nameFile);
        $validateData['path'] =  Str::after($path, '/animations');

        Animasi::create($validateData);
        return redirect()->route('tampil_animasi')->with('pesan',"Penambahan data berhasil,\nFile berhasil diupload, File berada di ");
    }

    public function edit(Animasi $animasi)
    {
        $scenes = Scene::select('id','nama')->get();
        return view('animasi.edit')->with('animasi',  $animasi)->with('scenes', $scenes);
    }
    public function update(Request $req, Animasi $animasi)
    {   $validateData = null;
        if ($req->path == null) {
            $validateData = $req->validate([
                'scenes_id'     => 'required',
                'scale'         => 'required',
                'background_color'     => 'required',
                'description'   => 'required',
                'author_id'     => 'required',
            ]);
            $validateData['path'] = $animasi->path;
        }else{
            $validateData = $req->validate([
                'scenes_id'     => 'required',
                'path'          => 'required|file|max:50000',
                'scale'         => 'required',
                'background_color'     => 'required',
                'description'   => 'required',
                'author_id'     => 'required',
            ]);
            $extFile = $validateData['path']->getClientOriginalExtension();//['path'] diganti sesuai name input form
            if ($extFile != 'gltf') {
                throw ValidationException::withMessages(['path' => 'file anda bukan .gltf']);
            }
            // hapus file model lama
            try {
                unlink('storage/animations'.$animasi->path);
            } catch (\Throwable $th) {
                echo $th;
            }

            //rename file
            $nameFile = 'file-'.time().'.'.$extFile;
            //store file on public/storage/images
            $path = $validateData['path']->storeAs('public/animations', $nameFile);
            $validateData['path'] =  Str::after($path, '/animations');

        }
        // ganti value author_id dari email, ke id
        $validateData['author_id'] = User::where('email', $validateData['author_id'])->first()->id;
        // ganti value author_id dari email, ke id
        $validateData['background_color'] = Str::replaceFirst('#','0x',$validateData['background_color']);
        
        
        Animasi::where('id', $animasi->id)->update($validateData);
        return redirect()->route('tampil_animasi')->with('pesan', "Update data dengan id file '.$animasi->id.', berhasil");

        return [$req, $animasi];
    }

    public function delete(Animasi $animasi){
        $getPath = Animasi::find($animasi->id)->path;
        // return $getPath;
        try {
            unlink('storage/animations'.$getPath);
        } catch (\Throwable $th) {
            echo $th;
        }
        $animasi->delete();
        // Animasi::where('id', $id)->delete();
        return redirect()->route('tampil_animasi');
    }

    public function tampil_animasi(){
        $animasiku = Animasi::all();
        return view('animasi.all',['animations' => $animasiku]);
    }
    public function show(Animasi $animasi)
    {
        return view('show',['animasi' => $animasi]);
    }
}

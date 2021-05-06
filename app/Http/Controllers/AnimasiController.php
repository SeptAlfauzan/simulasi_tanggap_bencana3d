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

    public function tampil_animasi(){
        $animasiku = Animasi::all();
        return view('animasi.all',['animations' => $animasiku]);
    }
    public function show(Animasi $animasi)
    {
        return view('show',['animasi' => $animasi]);
    }
}

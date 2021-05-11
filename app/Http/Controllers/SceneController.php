<?php

namespace App\Http\Controllers;

use App\Models\Animasi;
use App\Models\Scene;
use Illuminate\Http\Request;

class SceneController extends Controller
{
    public function scene(){
        return view('scane');
    }
    public function showModels($id)
    {
        return view('scene.draggable')->with('scenes_id', $id);
    }
    // [pindah buat controller baru]
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'          => 'required|min:3|max:50',
        ]);
        $validateData['author_id'] = session('id_user');
        Scene::create($validateData);
        return redirect()->route('scene.show');
    }
    public function index(){
        $scenes = Scene::all();
        $deletedScenes = Scene::onlyTrashed()->get();
        return view('scene.show',['scenes' => $scenes, 'deletedScenes' =>$deletedScenes]);
    }
    public function delete(Scene $scene)
    {
        $namaScene = $scene->nama;
        $scene->delete();
        session()->flash('message', 'Scene '.$namaScene.', berhasil dihapus');
        return redirect()->route('scene.show');
    }
    public function restore($scene)
    {
        $sc = Scene::withTrashed()->where('id', $scene)->get();
        Scene::withTrashed()->where('id', $scene)->restore();
        session()->flash('message', 'Scene '.$sc[0]->nama.', berhasil di-restore');
        return redirect()->route('scene.show');
    }
}

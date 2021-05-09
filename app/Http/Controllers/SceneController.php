<?php

namespace App\Http\Controllers;

use App\Models\Animasi;
use App\Models\Scene;
use Illuminate\Http\Request;

class SceneController extends Controller
{
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
        return view('scene.show',['scenes' => $scenes]);
    }
}

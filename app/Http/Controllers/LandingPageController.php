<?php

namespace App\Http\Controllers;

use App\Models\Animasi;
use App\Models\Scene;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing-page.index');
    }
    public function contact()
    {
        return view('landing-page.contact');
    }
    public function aboutUs()
    {
        return view('landing-page.about');
    }
    public function galleryScene()
    {
        $scenes = Scene::all();
        return view('landing-page.gallery')->with('scenes', $scenes);
    }
    public function showScene(Scene $scene)
    {
        $animations = Animasi::where('scenes_id', $scene->id)->get();
        // return $scene;
        return view('landing-page.show-scene', ['animations' => $animations]);
    }
}

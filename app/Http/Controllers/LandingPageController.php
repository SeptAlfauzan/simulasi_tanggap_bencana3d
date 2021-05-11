<?php

namespace App\Http\Controllers;

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
        return view('landing-page.gallery');
    }
    public function showScene()
    {
        
    }
}

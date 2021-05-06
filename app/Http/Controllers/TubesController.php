<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Scene;
use App\Models\User;


class TubesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function scane(){
        return view('scane');
    }
    public function login(){
        return view('login');
    }
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            $data=$request->input();
            $id_user = User::select('id')->where('email', $data['email'])->get();

            $request->session()->put('id_user',$id_user);
            $request->session()->put('email',$data['email']);
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function registrasi(){
        return view('registrasi');
    }
    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => 'mahasiswa',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('login');

    }
    public function logout(){
        Auth::logout();
        
        return redirect ('/login');
    }

    // [pindah buat controller baru]
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'          => 'required|min:3|max:50',
        ]);

            $scane = new Scene();

            $scane->nama = $request->input('nama');
            // $scane->id_author = $request->input('id_author');
            
            $scane->save();

        return redirect()->route('tampil_scane');
    }
    public function tampil_scane(){
        $scane = Scene::all();
        return view('tampil_scane',['scane' => $scane]);
    }

}

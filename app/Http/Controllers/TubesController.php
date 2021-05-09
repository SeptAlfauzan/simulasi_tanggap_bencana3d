<?php

namespace App\Http\Controllers;

use App\Models\Animasi;
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
            $user = User::where('email', $data['email'])->first();

            $request->session()->put('id_user',$user->id);
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


}

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
        return view('auth.login');
    }
    public function postlogin(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $data=$request->input();
            $user = User::where('email', $data['email'])->first();
            
            // return redirect()->intended('dashboard');
            // return $user;
            $request->session()->put('id_user',$user->id);
            $request->session()->put('email',$data['email']);
            $request->session()->put('level',$user->level);
            return redirect()->route('dashboard');
        }
        return 'gagal';
        return redirect('/login');
    }
    public function registrasi(){
        return view('auth.registrasi');
    }
    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => 'contributor',
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

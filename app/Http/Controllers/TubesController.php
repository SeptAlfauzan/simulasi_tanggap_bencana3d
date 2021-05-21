<?php

namespace App\Http\Controllers;

use App\Models\Animasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Scene;
use App\Models\User;
use Illuminate\Validation\ValidationException;

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
        session()->flash('message', 'Login gagal');
        return redirect('/login');
    }
    public function registrasi(){
        return view('auth.registrasi');
    }
    public function simpanregistrasi(Request $request){
        // dd($request->all());

        $validateData = $request->validate([
            'name'     => 'required',
            'email'         => 'required|email|unique:users',
            'password'   => 'required|min:8',
            'repassword'   => 'required|min:8',
        ]);
        if ($validateData['repassword'] != $validateData['password']) {
            session()->flash('message', 'registrasi gagal');
            throw ValidationException::withMessages(['repassword' => "password doesn't match"]);
            return redirect ('/registrasi');
        }

        unset($validateData['repassword']);
        $validateData['level'] = 'contributor';
        $validateData['remember_token'] = Str::random(60);
        $validateData['password'] =bcrypt($validateData['password']);

        if (User::create($validateData)) {
            session()->flash('message', 'registrasi berhasil');
            session()->flash('type', 'success');
        }else{
            session()->flash('message', 'registrasi gagal');
            session()->flash('type', 'danger');
        }
        return redirect ('/login');

    }
    public function logout(){
        Auth::logout();
        
        return redirect ('/login');
    }


}

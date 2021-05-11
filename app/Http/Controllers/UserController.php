<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'level' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8',
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['remember_token'] = Str::random(60);

        if (User::create($validateData)) {
            session()->flash('message', 'registrasi berhasil');
            session()->flash('type', 'success');
        }else{
            session()->flash('message', 'registrasi gagal');
            session()->flash('type', 'danger');
        }
        return view('auth.login');
    }

    public function showList()
    {
        $users = User::all();
        return view('user.list', ['users' => $users]);
    }

    public function update(User $user)
    {
        // BELUM
    }
    public function delete(User $user)
    {
        $user = User::find($user);
        if ($user) {
            $name = $user->name;
            $user->delete();
            session()->flash('message', 'User '.$name.' telah berhasil dihapus');
            session()->flash('type', 'success');
        }
        return 'data berhasil dihapus';
    }

    public function restore(User $user)
    {
        User::find($user)->restore();
        return 'user berhasil direstore';
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function setData($request)
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
    }
    public function store(Request $request)
    {
        $this->setData($request);
        return view('auth.login');
    }

    public function showList()
    {
        $users = User::all();
        $deleteduser = User::onlyTrashed()->get();
        return view('user.list', ['users' => $users, 'deleteduser' => $deleteduser]);
    }
    
    public function addNew()
    {
        return view('user.add-new');
    }

    public function storeFromAdmin(Request $request)
    {
        $this->setData($request);
        return redirect()->route('user.list');
    }
    public function edit(User $user)
    {
        $user = User::get()->find($user);
        $levels = ['administrator', 'contributor'];
        return view('user.edit', ['user' => $user, 'levels' => $levels]);
    }
    public function update( Request $request, User $user)
    {
        $validateData = $request->validate([
            'name'     => 'required',
            'email'         => 'required|email',
            'password'   => 'required|min:8',
            'repassword'   => 'required|min:8',
            'level' => 'required|in:administrator,contributor'
        ]);
        if ($validateData['repassword'] != $validateData['password']) {
            throw ValidationException::withMessages(['repassword' => "password doesn't match"]);
        }
        unset($validateData['repassword']);
        $validateData['password'] = bcrypt($validateData['password']);
        User::where('id', $user->id)->update($validateData);
        return redirect()->route('user.list')->with('pesan', "Update data berhasil!");
    }
    public function delete(User $user)
    {
        $name = $user->name;
        if (User::find($user)) {
            $user->delete();
            session()->flash('message', 'User '.$name.' telah berhasil dihapus');
            session()->flash('type', 'success');
        }
        return redirect()->route('user.list')->with('pesan', "Data berhasil dihapus!");
    }

    public function restore($user)
    {
        $get_user = User::withTrashed()->find($user);
        User::withTrashed()->where('id', $user)->restore();
        session()->flash('pesan', 'Akun '.$get_user->nam3.', berhasil di-restore');
        return redirect()->route('user.list')->with('pesan', "Akun berhasil direstore");
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UpdateUser extends Component
{
    public $user_id;
    public  $name, $email, $password, $verifyPassword, $level, $user;

    public function mount()
    {
        # code...
        $this->user = User::find($this->user_id);
    }
    
    public function render()
    {   
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
        $this->level = $this->user->level;
        return view('livewire.update-user', ['user', $this->user]);
    }
}

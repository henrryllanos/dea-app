<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UsersAuth extends Component
{
    public function render()
    {   
        $user = User::findOrFail(Auth::id());
        return view('livewire.admin.users-auth',['user'=> $user]);
    }
}

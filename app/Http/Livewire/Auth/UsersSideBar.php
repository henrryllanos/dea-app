<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UsersSideBar extends Component
{
    public function render()
    {   $user = User::findOrFail(Auth::id());
        return view('livewire.auth.users-side-bar',['user'=> $user]);
    }
}

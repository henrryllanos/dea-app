<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class controllerPagos extends Controller
{
    //
    public function show ($id){
        $user = User::find($id);
        return view('Controlpagos',compact('user'));
          
    }
}

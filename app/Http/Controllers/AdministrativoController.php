<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;

class AdministrativoController extends Controller
{
    //

    public function create()
    {   
        $roles = Role::all();
        return view('registroAdministrativo',compact('roles'));
    }
    public function store(Request $request){
        
        $request->validate([
            'name' =>['required','string','min:2'],
            'fecha_nac' =>['required'],
            'tipo' =>['required'],
            'telefono' =>['required'],
            'turno' =>['required'],
            'direccion' =>['required'],
            'email'=>['required','string','max:25','unique:users'],
            'password' =>['required','confirmed', Rules\Password::defaults()],
        ]);
        $usuario = new User();
        $usuario->name = $request['name'];
        $usuario->email = $request['email'];
        $usuario->telefono = $request['telefono'];
        $usuario->direccion = $request['direccion'];
        $usuario->fecha_nac = $request['fecha_nac'];
        $usuario->password = Hash::make($request['password']);
        $usuario->assignRole($request->input('tipo'));
        $usuario->save();
        //$usuario->tipo = $request->input('tipo');
        //$usuario->tipo = $request->input('turno');
        //return $request;
        
        return redirect()->route('my.index')->with('status', 'Account created!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;

class SolicitudController extends Controller
{
    //

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'telefono' => 'required',
            'email' => 'required|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        //crear usuario
        $usuario = new User();
        $usuario->name = $request['name'];
        $usuario->email = $request['email'];
        $usuario->password = Hash::make($request['password']);
        $usuario->telefono = $request['telefono'];
        //imagen de perfil
        /*
        $name = 'Invitado';
        $role = Role::where('name', $name)->first();
  
        if (is_null($role)) {
            $role = Role::create(['name'=> $name]);
            
        }
        $usuario->assignRole($role);
*/
        $usuario->save();
        //crear vehiculo

        return redirect()->route('login')->with('status', '¡Felicitaciones! Tu solicitud ha sido creada exitosamente. Sin embargo, antes de que puedas acceder a nuestros servicios, debemos verificar tus datos para garantizar la seguridad de nuestro sitio web.');
    }
}

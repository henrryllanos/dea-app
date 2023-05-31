<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Usuario Eliminado Exitosamente');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->fecha_nac = $request['fecha_nac'];
        $user->telefono = $request['telefono'];
        $user->direccion = $request['direccion'];
        if(trim($request->file)!=''){
            $imagen = $request->file('foto_perfil')->store('public/imagenes');
            $url = Storage::url($imagen);
            $user->foto_perfil = $url;
        }
        //$data = $request->only('name', 'email', 'telefono', 'fecha_nac', 'direccion');
        if (trim($request->password) != '') {
            $user->password = Hash::make($request['password']);
        }

        $user->update();
        return redirect()->back();
    }

    public function edit(){

        
    }
}

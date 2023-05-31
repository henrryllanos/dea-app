<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Validator;

class RegistroController extends Controller
{
    //

    public function index()
    {
    }
    public function show()
    {
    }
    public function create()
    {
        $mes_actual = date('n');

        if ($mes_actual >= 1 && $mes_actual <= 6) {
            $gestion_actual = 'I';
        } else {
            $gestion_actual = 'II';
        }
        $currentYear = date('Y');
        $usuariosCreadosEsteAnio = Solicitud::whereYear('created_At', '=', $currentYear)->where('gestion', '=', $gestion_actual)->count();
        if ($usuariosCreadosEsteAnio >= 9) {
            echo $usuariosCreadosEsteAnio;
            return redirect()->route('login')->withErrors(['error' => 'Le informamos que actualmente no estamos aceptando más solicitudes en nuestro sistema, ya que hemos alcanzado el límite máximo de solicitudes permitidas para esta gestión. ']);
        }
        return view('registroCliente');
    }
    public function edit(User $user)
    {
        return view('registroCliente',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'telefono' => 'required',
            'direccion' => 'required|string',
            'email' => 'required',
            
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            /*'placa' => 'required',
            'color' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'anchura' => 'required',
            'altura' => 'required|string',
            'longitud' => 'required',*/
            'fecha' => 'required',
            'foto_perfil' => 'required|image|max:2048',

        ]);

         //solicitud
         $mes_actual = date('n');

         if ($mes_actual >= 1 && $mes_actual <= 6) {
             $gestion_actual = 'I';
         } else {
             $gestion_actual = 'II';
         }
         $currentYear = date('Y');
 
 
 
         
 
         //crear usuario
         $user = User::findOrFail($id);
         $user->name = $request['name'];
         $user->email = $request['email'];
         $user->password = Hash::make($request['password']);
         $user->fecha_nac = $request['fecha'];
         $user->telefono = $request['telefono'];
         $user->direccion = $request['direccion'];
         $user->syncRoles('Cliente');
         //imagen de perfil
         
         $imagen = $request->file('foto_perfil')->store('public/imagenes');
         $url = Storage::url($imagen);
         $user->foto_perfil = $url;
 
         $user->update();
         //crear vehiculo
         /*
         $vehiculo = new Vehiculo();
         $vehiculo->marca = $request['marca'];
         $vehiculo->modelo = $request['modelo'];
         $vehiculo->color = $request['color'];
         $vehiculo->placa = $request['placa'];
         $vehiculo->anchura = $request['anchura'];
         $vehiculo->altura = $request['altura'];
         $vehiculo->longitud = $request['longitud'];
         $vehiculo->soat = $request->has('soat');
         $vehiculo->usuario_id = $user->id;
         $vehiculo->save();*/
         //crear solicitud
         $solicitud = new Solicitud();
         $solicitud->estado = 'Habilitado';
         $solicitud->observacion = 'Ninguna';
         $solicitud->gestion = $gestion_actual;
         $solicitud->year = $currentYear;
         $solicitud->tipo_plaza = 'Estandar';
         $solicitud->usuario_id = $user->id;
         $solicitud->save();
         //$user = User::create(request(['name', 'email', 'password']));
         //return 'cuenta creada';
         return redirect()->route('login')->with('status', '¡Felicitaciones! Tu cuenta ha sido creada exitosamente.');
    
        //$user->update();
        //return redirect()->back();
        return $request;
    }


    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'telefono' => 'required',
            'direccion' => 'required|string',
            'email' => 'required|unique:users',
            'marca' => 'required',
            'modelo' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'placa' => 'required',
            'color' => 'required',
            'anchura' => 'required',
            'altura' => 'required|string',
            'longitud' => 'required',
            'fecha' => 'required',
            'foto_perfil' => 'required|image|max:2048',

        ]);
        //solicitud
        $mes_actual = date('n');

        if ($mes_actual >= 1 && $mes_actual <= 6) {
            $gestion_actual = 'I';
        } else {
            $gestion_actual = 'II';
        }
        $currentYear = date('Y');



        $nombre_completo = implode(' ', array($request['name'], $request['name2']));

        //crear usuario
        $usuario = new User();
        $usuario->name = $nombre_completo;
        $usuario->email = $request['email'];
        $usuario->password = Hash::make($request['password']);
        $usuario->fecha_nac = $request['fecha'];
        $usuario->telefono = $request['telefono'];
        $usuario->direccion = $request['direccion'];
        $usuario->assignRole('Cliente');
        //imagen de perfil
        
        $imagen = $request->file('foto_perfil')->store('public/imagenes');
        $url = Storage::url($imagen);
        $usuario->foto_perfil = $url;

        $usuario->save();
        //crear vehiculo
        $vehiculo = new Vehiculo();
        $vehiculo->marca = $request['marca'];
        $vehiculo->modelo = $request['modelo'];
        $vehiculo->color = $request['color'];
        $vehiculo->placa = $request['placa'];
        $vehiculo->anchura = $request['anchura'];
        $vehiculo->altura = $request['altura'];
        $vehiculo->longitud = $request['longitud'];
        $vehiculo->soat = $request->has('soat');
        $vehiculo->usuario_id = $usuario->id;
        $vehiculo->save();
        //crear solicitud
        $solicitud = new Solicitud();
        $solicitud->estado = 'Habilitado';
        $solicitud->observacion = 'Ninguna';
        $solicitud->gestion = $gestion_actual;
        $solicitud->year = $currentYear;
        $solicitud->tipo_plaza = $request->input('tipo_plaza');
        $solicitud->usuario_id = $usuario->id;
        $solicitud->save();
        //$user = User::create(request(['name', 'email', 'password']));
        //return 'cuenta creada';
        return redirect()->route('login')->with('status', '¡Felicitaciones! Tu cuenta ha sido creada exitosamente. Sin embargo, antes de que puedas acceder a nuestros servicios, debemos verificar tus datos para garantizar la seguridad de nuestro sitio web.');
    }



    public function guardar(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string',
            'telefono' => 'required',
            'direccion' => 'required|string',
            'email' => 'required|unique:users',
            'marca' => 'required',
            'modelo' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'placa' => 'required',
            'color' => 'required',
            'anchura' => 'required',
            'altura' => 'required|string',
            'longitud' => 'required',
            'fecha' => 'required',
            'foto_perfil' => 'required|image|max:2048'

        ]);

        $imagen = $request->file('foto_perfil')->store('public/imagenes');
        $url = Storage::url($imagen);
        return $url;
    }
}

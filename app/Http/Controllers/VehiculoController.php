<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , User $user)
    {
        //
        $this->validate($request, [

            'marca' => 'required',
            'modelo' => 'required',
            'placa' => 'required',
            'color' => 'required',
            'anchura' => 'required',
            'altura' => 'required|string',
            'longitud' => 'required',
            'foto_vehiculo' => 'required|image|max:2048',

        ]);
        
        $imagen = $request->file('foto_vehiculo')->store('public/imagenes');
        $url = Storage::url($imagen);
        

       
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
        $vehiculo->usuario_id = $user->id;
        $vehiculo->foto = $url;
        $vehiculo->save();
        //crear solicitud
        /*
        $solicitud = new Solicitud();
        $solicitud->estado = 'Habilitado';
        $solicitud->observacion = 'Ninguna';
        $solicitud->gestion = $gestion_actual;
        $solicitud->year = $currentYear;
        $solicitud->tipo_plaza = 'Estandar';
        $solicitud->usuario_id = $user->id;
        $solicitud->save();*/
        //$user = User::create(request(['name', 'email', 'password']));
        //return 'cuenta creada';
        return redirect()->route('login')->with('status', '¡Felicitaciones! Se registro su vehiculo');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('AddVehiculo',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

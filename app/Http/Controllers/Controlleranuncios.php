<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anuncios;

class Controlleranuncios extends Controller
{
    
    public function store(Request $request)
    {
        
        $anuncios = new anuncios();

        $anuncios->nombre = $request->post('nombre');
        $anuncios->comentario = $request->post('comentario');
        $anuncios->save();
        
        return redirect()->route("anuncios")->with("Success","agregado con exito");
    }
}

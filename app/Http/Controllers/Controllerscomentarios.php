<?php

namespace App\Http\Controllers;

use App\Models\comentarios;
use Illuminate\Http\Request;

class Controllerscomentarios extends Controller
{
    //
    public function store(Request $request)
    {
        
        $comentarios = new comentarios();

        $comentarios->nombre = $request->post('nombre');
        $comentarios->comentario = $request->post('comentario');
        $comentarios->save();
        
        return redirect()->route("Comentarios")->with("Success","agregado con exito");
    }
}

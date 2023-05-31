<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculos';

    protected $fillable = [
        'marca',
        'modelo',
        'placa',
        'color',
        'soat',
        'altura',
        'anchura',
        'longitud',
        'foto',
        'usuario_id',

    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}

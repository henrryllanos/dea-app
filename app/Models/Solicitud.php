<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';

    protected $fillable = [
        'estado',
        'observacion',
        'gestion',
        'year',
        'tipo_plaza',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}

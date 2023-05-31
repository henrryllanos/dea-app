<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagoqr extends Model
{
    use HasFactory;

    protected $table = 'factura2';

    protected $fillable = [
        'nombre',
        'detalle',
        'monto',
        'ci',
        'comprobante',
        'usuario_id',
        
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}

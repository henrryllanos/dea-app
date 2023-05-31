<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anuncios extends Model
{
    use HasFactory;
    protected $table = 'anuncios';

    protected $fillable = [
        'nombre',
        'comentario',
        
        
    ];
}

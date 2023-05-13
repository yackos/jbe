<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'entrenador'
    ];

    // Relación Uno a Uno Inversa con Atletas
    public function atleta(){
        return $this->hasOne(Atleta::class);
    }
}

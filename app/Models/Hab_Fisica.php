<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hab_Fisica extends Model
{
    use HasFactory;

    protected $fillable = [
        'atleta_id',
        'velocidad_30m',
        'resistencia',
        'fuerza_salto',
        'fuerza_abdom30s',
        'observaciones',
    ];

    //Relación uno a muchos inversa con Atletas
    public function atleta(){
        return $this->belongsTo(Atleta::class);
    }
}

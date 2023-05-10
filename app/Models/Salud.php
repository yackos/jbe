<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salud extends Model
{
    use HasFactory;

    protected $fillable = [
        'atleta_id',
        'glicemia',
        'presion_arterial',
        'pulsacion_min',
        'observaciones',
    ];

    //Relación uno a muchos inversa con Atletas
    public function atleta(){
        return $this->belongsTo(Atleta::class);
    }
}

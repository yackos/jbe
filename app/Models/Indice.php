<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indice extends Model
{
    use HasFactory;

    protected $fillable = [
        'talla_id',
        's6pl',
        'imc',
        's3pl',
        'hwr',
    ];

    //Relación uno a uno inversa con Tallas
    public function talla(){
        return $this->belongsTo(Talla::class);
    }

    //Relación uno a uno con Somatotipos
    public function somatotipo(){
        return $this->hasOne(Somatotipo::class);
    }
}

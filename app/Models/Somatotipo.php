<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Somatotipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'indice_id',
        'endo',
        'meso',
        'ecto',
        'coord_x',
        'coord_y',
    ];

    //Relación uno a uno inversa con Indices
    public function indice(){
        return $this->belongsTo(Indice::class);
    }
}

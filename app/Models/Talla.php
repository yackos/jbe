<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    use HasFactory;

    protected $fillable = [
        'atleta_id',
        'peso',
        'talla',
        'talla_sentada',
        'biacromial',
        'torax_transv',
        'torax_antpost',
        'bi_liocrestideo',
        'humeral',
        'femoral',
        'cabeza',
        'brazo_relajado',
        'brazo_flex_ten',
        'antebrazo',
        'torax',
        'cintura',
        'cadera_max',
        'muslo_max',
        'muslo_medio',
        'pantorrilla_max',
        'triceps',
        'subescapular',
        'supraespinal',
        'abdominal',
        'pmuslo_medio',
        'pantorrilla',
        'observaciones',
    ];

    //Relación uno a muchos inversa con Atletas
    public function atleta(){
        return $this->belongsTo(Atleta::class);
    }

    //Relación uno a uno con Indices
    public function indice(){
        return $this->hasOne(Indice::class);
    }

    //Relación uno a muchos con Phantoms
    public function phantom(){
        return $this->hasOne(Phantom::class);
    }
}

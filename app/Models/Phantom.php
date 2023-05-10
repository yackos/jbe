<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phantom extends Model
{
    use HasFactory;

    protected $fillable = [
        'talla_id',
        'masa_corp',
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
    public function talla(){
        return $this->belongsTo(Talla::class);
    }
}

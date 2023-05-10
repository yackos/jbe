<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Atleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'documento',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'fecha_nac',
        'edad',
        'sexo',
        'direccion',
        'telefono',
        'email',
        'categoria_id',
        'observaciones',
        'imagen_url',
    ];

    public function imagen(): Attribute
    {
        return new Attribute(
            get: function(){
                return $this->imagen_url ? Storage::url($this->imagen_url) : 'https://media.istockphoto.com/id/1087531642/es/vector/silueta-de-la-cara-macho-o-icono-perfil-de-avatar-de-hombre-persona-desconocida-o-an%C3%B3nimo.jpg?s=170667a&w=0&k=20&c=0TEotsNfN3Qd6PGQw1nH2eMZRy2bCeCR7td5HRFCbcc=';
            }
        );
    }

    // Relación uno a Muchos con Tallas
    public function tallas(){
        return $this->hasMany(Talla::class);
    }

    //Relacion Uno a Uno con Categorias
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    // Relación Uno a Muchos con Hab_Físicas
    public function hab_fisicas(){
        return $this->hasMany(Hab_Fisica::class);
    }

    // Relación Uno a Muchos con Salud
    public function saluds(){
        return $this->hasMany(Salud::class);
    }
}

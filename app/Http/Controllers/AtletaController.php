<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AtletaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atletas = Atleta::paginate(6);
        

        return view('atletas.index', compact('atletas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {       
        return view('atletas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'documento' => 'required|integer|unique:atletas,documento',
            'primer_nombre' => 'required|string|max:20',
            'primer_apellido' => 'required|string|max:20',
            'sexo' => 'required|string|max:9',
            'observaciones' => 'required'
        ]);

        $atleta = Atleta::create([
            'documento' => $request->documento,
            'primer_nombre' => $request->primer_nombre,
            'primer_apellido' => $request->primer_apellido,
            'sexo' => $request->sexo,
            'observaciones' => $request->observaciones,
            'categoria_id' => 1
        ]);

        session()->flash('flash.banner', 'Atleta Creado con Exito');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('atletas.edit', $atleta);
    }

    /**
     * Display the specified resource.
     */
    public function show(Atleta $atleta)
    {
        return view('atletas.show', compact('atleta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atleta $atleta)
    {
        $categorias = Categoria::all();
        return view('atletas.edit', compact('atleta', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atleta $atleta)
    {
        $request->validate([
            'documento' => 'required|integer|unique:atletas,documento,' . $atleta->id,
            'primer_nombre' => 'required|string|max:20',
            'segundo_nombre' => 'string|max:20',
            'primer_apellido' => 'required|string|max:20',
            'segundo_apellido' => 'string|max:20',
            'fecha_nac' => 'required|date',
            'edad' => 'required|integer',
            'telefono' => 'required|string|max:12',
            'email' => 'required|string',
            'sexo' => 'required|string|max:9',
            'categoria_id' => 'required|integer|exists:categorias,id',
            'direccion' => 'required|string',
            'observaciones' => 'required'
        ]);

        $atleta->update($request->all());

        if ($request->hasFile('imagen')){

            if ($atleta->imagen_url){
                Storage::delete($atleta->imagen_url);
            }

            $nombreFoto = $atleta->documento . '_' .$atleta->primer_nombre . '_' . $atleta->primer_apellido . '.' . $request->imagen->extension();
            $imagen_url = Storage::putFileAs('atletas', $request->imagen, $nombreFoto);

            $atleta->imagen_url = $imagen_url;
            $atleta->save();
        }

        session()->flash('flash.banner', 'Atleta Actualizado con Exito');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('atletas.edit', $atleta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atleta $atleta)
    {
        //
    }
}

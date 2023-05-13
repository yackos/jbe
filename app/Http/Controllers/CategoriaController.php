<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('nombre')->get();

        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:20',
            'entrenador' => 'required|string|max:20'
        ]);

        $categoria = Categoria::create([
            'nombre' => $request->nombre,
            'entrenador' => $request->entrenador
        ]);

        session()->flash('flash.banner', 'Categoria Creada con Exito');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:20',
            'entrenador' => 'required|string|max:20'
        ]);

        $categoria->update($request->all());

        session()->flash('flash.banner', 'Categoria Actualizada con Exito');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}

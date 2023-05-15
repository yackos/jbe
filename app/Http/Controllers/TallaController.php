<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use App\Models\Talla;
use Illuminate\Http\Request;

class TallaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        //return view('tallas.index', compact('atleta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Atleta $atleta)
    {
        return $atleta;
        //return view('tallas.show', compact('atleta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

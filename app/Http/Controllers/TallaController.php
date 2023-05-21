<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use App\Models\Talla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TallaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        
        return view('tallas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'peso' => 'required|max:5',
            'talla' => 'required|max:5',
            'talla_sentada' => 'required|max:5',
            'biacromial' => 'nullable|max:5',
            'torax_transv' => 'nullable|max:5',
            'torax_antpost' => 'nullable|max:5',
            'bi_liocrestideo' => 'nullable|max:5',
            'humeral' => 'nullable|max:5',
            'femoral' => 'nullable|max:5',
            'cabeza' => 'nullable|max:5',
            'brazo_relajado' => 'nullable|max:5',
            'brazo_flex_ten' => 'nullable|max:5',
            'antebrazo' => 'nullable|max:5',
            'torax' => 'nullable|max:5',
            'cintura' => 'nullable|max:5',
            'cadera_max' => 'nullable|max:5',
            'muslo_max' => 'nullable|max:5',
            'muslo_medio' => 'nullable|max:5',
            'pantorrilla_max' => 'nullable|max:5',
            'triceps' => 'nullable|max:5',
            'subescapular' => 'nullable|max:5',
            'supraespinal' => 'nullable|max:5',
            'abdominal' => 'nullable|max:5',
            'pmuslo_medio' => 'nullable|max:5',
            'pantorrilla' => 'nullable|max:5',
            'observaciones' => 'required'
        ]);

        $talla = Talla::create([
            'atleta_id' => $request->atleta_id,
            'peso' => $request->peso,
            'talla' => $request->talla,
            'talla_sentada' => $request->talla_sentada,
            'biacromial' => $request->biacromial,
            'torax_transv' => $request->torax_transv,
            'torax_antpost' => $request->torax_antpost,
            'bi_liocrestideo' => $request->bi_liocrestideo,
            'humeral' => $request->humeral,
            'femoral' => $request->femoral,
            'cabeza' => $request->cabeza,
            'brazo_relajado' => $request->brazo_relajado,
            'brazo_flex_ten' => $request->brazo_flex_ten,
            'antebrazo' => $request->antebrazo,
            'torax' => $request->torax,
            'cintura' => $request->cintura,
            'cadera_max' => $request->cadera_max,
            'muslo_max' => $request->muslo_max,
            'muslo_medio' => $request->muslo_medio,
            'pantorrilla_max' => $request->pantorrilla_max,
            'triceps' => $request->triceps,
            'subescapular' => $request->subescapular,
            'supraespinal' => $request->supraespinal,
            'abdominal' => $request->abdominal,
            'pmuslo_medio' => $request->pmuslo_medio,
            'pantorrilla' => $request->pantorrilla,
            'observaciones' => $request->observaciones
        ]);

        session()->flash('flash.banner', 'Tallas agregadas con Exito');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('atletas.show', $talla->atleta_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $atleta = Atleta::find($id);
        $tallas = Talla::where('atleta_id', '=', $atleta->id)->get()->sortByDesc('created_at');
        $i = 1;

        
        return view('tallas.show', compact('id', 'atleta', 'tallas', 'i'));
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

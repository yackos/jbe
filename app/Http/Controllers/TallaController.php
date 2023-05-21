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
        $talla = Talla::where('atleta_id', '=', $atleta->id)->get()->last();

        // Indices
        $s6pl = $talla->triceps + $talla->subescapular + $talla->supraespinal + $talla->abdominal + $talla->pmuslo_medio + $talla->pantorrilla;
        $imc = $talla->peso / (($talla->talla * $talla->talla)* 0.0001);
        $s3pl = (($talla->triceps + $talla->subescapular + $talla->supraespinal) * 170.18) / $talla->talla;
        $hwr = $talla->talla / pow($talla->peso, 0.3333);

        // Somatotipos
        $endo = -0.7182 + (0.1451 * $s3pl) - (0.00068 * pow($s3pl, 2)) + (0.0000014 * pow($s3pl, 3));
        $meso = ( 0.858 * $talla->humeral ) + ( 0.601 * $talla->femoral ) + ( 0.188 * ( $talla->brazo_flex_ten - ( $talla->triceps / 10 ) ) ) + ( 0.161 * ( $talla->pantorrilla_max - ( $talla->pantorrilla / 10) ) ) - ( $talla->talla * 0.131 ) + 4.5;

        if ($hwr >= 40.75) {
            $ecto = 0.732 * $hwr - 28.58;
        } elseif ($hwr >= 38.25) {
            $ecto = 0.463 * $hwr - 17.63;            
        } else {
            $ecto = 0.1;
        }
        
        $coord_x = $ecto - $endo;
        $coord_y = 2 * $meso - ($endo + $ecto);

        // Phantoms
        $masa_corp = ( $talla->peso * pow(170.18 / $talla->talla, 3) - 64.58 ) / 8.6;
        $talla_sen = ( $talla->talla_sentada * ( 170.181 / $talla->talla ) - 89.92 ) / 4.5;
        $biacromial = ( $talla->biacromial * (170.18 / $talla->talla ) - 38.04 ) / 1.92;
        $torax_tran = ( $talla->torax_transv * ( 170.18 / $talla->talla ) - 27.92 ) / 1.74;
        $torax_ant = ( $talla->torax_antpost * ( 170.18 / $talla->talla ) - 17.5 ) / 1.38;
        $bi_lio = ( $talla->bi_liocrestideo * ( 170.18 / $talla->talla ) - 28.84 ) / 1.75;
        $humeral = ( $talla->humeral * ( 170.18 / $talla->talla) -  6.48 ) / 0.35;
        $femoral = ( $talla->femoral * ( 170.18 / $talla->talla ) - 9.52 ) / 0.48;
        $cabeza = ( $talla->cabeza * ( 170.18 / $talla->talla ) - 56 ) / 1.44;
        $brazo_rel = ( $talla->brazo_relajado * ( 170.18 / $talla->talla ) - 26.89 ) / 2.33;
        $brazo_flex = ( $talla->brazo_flex_ten * ( 170.18 / $talla->talla ) - 29.41 ) / 2.37;
        $antebrazo = ( $talla->antebrazo * ( 170.18 / $talla->talla ) - 25.13 ) / 1.41;
        $torax = ( $talla->torax * ( 170.18 / $talla->talla ) - 87.86 ) / 5.18;
        $cintura = ( $talla->cintura * ( 170.18 / $talla->talla ) - 71.91 ) / 4.45;
        $cadera_max = ( $talla->cadera_max * ( 170.18 / $talla->talla ) - 94.67 ) / 5.58;
        $muslo_max = ( $talla->muslo_max * ( 170.18 / $talla->talla ) - 55.82 ) / 4.23;
        $muslo_med = ( $talla->muslo_medio * ( 170.18 / $talla->talla ) - 53.2 ) / 4.56;
        $pantorrilla_max = ( $talla->pantorrilla_max * ( 170.18 / $talla->talla ) - 35.25 ) / 2.3;
        $triceps = ( $talla->triceps * ( 170.18 / $talla->talla ) - 15.4 ) / 4.47;
        $subescapular = ( $talla->subescapular * ( 170.18 / $talla->talla ) - 17.2 ) / 5.07;
        $supraespinal = ( $talla->supraespinal * ( 170.18 / $talla->talla ) - 15.4 ) / 4.47;
        $abdominal = ( $talla->abdominal * ( 170.18 / $talla->talla ) - 25.4 ) / 7.78;
        $pmuslo_med = ( $talla->pmuslo_medio * ( 170.18 / $talla->talla ) - 27 ) / 8.33;
        $pantorrilla = ( $talla->pantorrilla * ( 170.18 / $talla->talla ) - 16 ) / 4.67;

        return view('tallas.show', compact('id', 'atleta', 'tallas', 'i', 's6pl', 'imc', 's3pl', 'hwr', 'endo', 'meso', 'ecto', 'coord_x', 'coord_y', 'masa_corp', 'talla_sen', 'biacromial', 'torax_tran', 'torax_ant', 'bi_lio', 'humeral', 'femoral', 'cabeza', 'brazo_rel', 'brazo_flex', 'antebrazo', 'torax', 'cintura', 'cadera_max', 'muslo_max', 'muslo_med', 'pantorrilla_max', 'triceps', 'subescapular', 'supraespinal', 'abdominal', 'pmuslo_med', 'pantorrilla'));
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

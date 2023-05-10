<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tallas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('atleta_id')->constrained();
            $table->float('peso');
            $table->float('talla');
            $table->float('talla_sentada');
            $table->float('biacromial');
            $table->float('torax_transv');
            $table->float('torax_antpost');
            $table->float('bi_liocrestideo');
            $table->float('humeral');
            $table->float('femoral');
            $table->float('cabeza');
            $table->float('brazo_relajado');
            $table->float('brazo_flex_ten');
            $table->float('antebrazo');
            $table->float('torax');
            $table->float('cintura');
            $table->float('cadera_max');
            $table->float('muslo_max');
            $table->float('muslo_medio');
            $table->float('pantorrilla_max');
            $table->float('triceps');
            $table->float('subescapular');
            $table->float('supraespinal');
            $table->float('abdominal');
            $table->float('pmuslo_medio');
            $table->float('pantorrilla');
            $table->longText('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tallas');
    }
};

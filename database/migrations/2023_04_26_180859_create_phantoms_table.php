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
        Schema::create('phantoms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talla_id');
            $table->string('masa_corp');
            $table->string('talla_sentada');
            $table->string('biacromial');
            $table->string('torax_transv');
            $table->string('torax_antpost');
            $table->string('bi_liocrestideo');
            $table->string('humeral');
            $table->string('femoral');
            $table->string('cabeza');
            $table->string('brazo_relajado');
            $table->string('brazo_flex_ten');
            $table->string('antebrazo');
            $table->string('torax');
            $table->string('cintura');
            $table->string('cadera_max');
            $table->string('muslo_max');
            $table->string('muslo_medio');
            $table->string('pantorrilla_max');
            $table->string('triceps');
            $table->string('subescapular');
            $table->string('supraespinal');
            $table->string('abdominal');
            $table->string('pmuslo_medio');
            $table->string('pantorrilla');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phantoms');
    }
};

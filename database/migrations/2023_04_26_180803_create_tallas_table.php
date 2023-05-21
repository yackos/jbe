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
            $table->float('biacromial')->nullable();
            $table->float('torax_transv')->nullable();
            $table->float('torax_antpost')->nullable();
            $table->float('bi_liocrestideo')->nullable();
            $table->float('humeral')->nullable();
            $table->float('femoral')->nullable();
            $table->float('cabeza')->nullable();
            $table->float('brazo_relajado')->nullable();
            $table->float('brazo_flex_ten')->nullable();
            $table->float('antebrazo')->nullable();
            $table->float('torax')->nullable();
            $table->float('cintura')->nullable();
            $table->float('cadera_max')->nullable();
            $table->float('muslo_max')->nullable();
            $table->float('muslo_medio')->nullable();
            $table->float('pantorrilla_max')->nullable();
            $table->float('triceps')->nullable();
            $table->float('subescapular')->nullable();
            $table->float('supraespinal')->nullable();
            $table->float('abdominal')->nullable();
            $table->float('pmuslo_medio')->nullable();
            $table->float('pantorrilla')->nullable();
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

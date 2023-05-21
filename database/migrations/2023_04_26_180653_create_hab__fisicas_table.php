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
        Schema::create('hab__fisicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('atleta_id')->constrained();
            $table->float('velocidad_30m');
            $table->float('resistencia');
            $table->float('fuerza_salto');
            $table->string('flexibilidad');
            $table->float('fuerza_abdom30s');
            $table->longText('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hab__fisicas');
    }
};

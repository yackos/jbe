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
        Schema::create('somatotipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('indice_id');
            $table->string('endo');
            $table->string('meso');
            $table->string('ecto');
            $table->string('coord_x');
            $table->string('coord_y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('somatotipos');
    }
};

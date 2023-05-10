<?php

namespace Database\Factories;

use App\Models\Atleta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salud>
 */
class SaludFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'atleta_id' => Atleta::all()->random()->id,
            'glicemia' => $this->faker->numberBetween(20, 40),
            'presion_arterial' => $this->faker->numberBetween(20, 40),
            'pulsacion_min' => $this->faker->numberBetween(20, 40),
            'observaciones' => $this->faker->paragraph(),
        ];
    }
}

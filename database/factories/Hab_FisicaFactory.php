<?php

namespace Database\Factories;

use App\Models\Atleta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Hab_FisicaFactory extends Factory
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
            'velocidad_30m' => $this->faker->time(),
            'resistencia' => $this->faker->time(),
            'fuerza_salto' => $this->faker->randomNumber(2, true),
            'flexibilidad' => $this->faker->word(),
            'fuerza_abdom30s' => $this->faker->randomNumber(2, true),
            'observaciones' => $this->faker->paragraph(),
        ];
    }
}

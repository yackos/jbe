<?php

namespace Database\Factories;

use App\Models\Atleta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TallaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'peso' => $this->faker->numberBetween(20, 40),
            'talla' => $this->faker->numberBetween(20, 40),
            'talla_sentada' => $this->faker->numberBetween(20, 40),
            'biacromial' => $this->faker->numberBetween(20, 40),
            'torax_transv' => $this->faker->numberBetween(20, 40),
            'torax_antpost' => $this->faker->numberBetween(20, 40),
            'bi_liocrestideo' => $this->faker->numberBetween(20, 40),
            'humeral' => $this->faker->numberBetween(20, 40),
            'femoral' => $this->faker->numberBetween(20, 40),
            'cabeza' => $this->faker->numberBetween(20, 40),
            'brazo_relajado' => $this->faker->numberBetween(20, 40),
            'brazo_flex_ten' => $this->faker->numberBetween(20, 40),
            'antebrazo' => $this->faker->numberBetween(20, 40),
            'torax' => $this->faker->numberBetween(20, 40),
            'cintura' => $this->faker->numberBetween(20, 40),
            'cadera_max' => $this->faker->numberBetween(20, 40),
            'muslo_max' => $this->faker->numberBetween(20, 40),
            'muslo_medio' => $this->faker->numberBetween(20, 40),
            'pantorrilla_max' => $this->faker->numberBetween(20, 40),
            'triceps' => $this->faker->numberBetween(20, 40),
            'subescapular' => $this->faker->numberBetween(20, 40),
            'supraespinal' => $this->faker->numberBetween(20, 40),
            'abdominal' => $this->faker->numberBetween(20, 40),
            'pmuslo_medio' => $this->faker->numberBetween(20, 40),
            'pantorrilla' => $this->faker->numberBetween(20, 40),
            'observaciones' => $this->faker->paragraph(),
        ];
    }
}

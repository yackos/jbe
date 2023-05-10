<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AtletaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'documento' => $this->faker->numberBetween(15192100, 35224300),
            'primer_nombre' => $this->faker->firstName(),
            'segundo_nombre' => $this->faker->firstName(),
            'primer_apellido' => $this->faker->lastName(),
            'segundo_apellido' => $this->faker->lastName(),
            'fecha_nac' => $this->faker->dateTimeBetween('-25 years', '-5 years'),
            'edad' => $this->faker->numberBetween(5, 17),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'direccion' => $this->faker->sentence(8),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'categoria_id' => Categoria::all()->random()->id,
            'observaciones' => $this->faker->paragraph(),
            'imagen_url' => $this->faker->imageUrl(640, 480, 'faces', true),
        ];
    }
}

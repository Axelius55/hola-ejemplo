<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * El nombre del modelo correspondiente.
     *
     * @var string
     */
    protected $model = Alumno::class;  // Especifica el modelo correcto

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'expediente' => $this->faker->unique()->numberBetween(100000, 999999),
            'correo' => $this->faker->unique()->safeEmail(),
        ];
    }
}
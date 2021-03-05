<?php

namespace Database\Factories;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProyectoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proyecto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->bs,
            'descripcion' => $this->faker->catchPhrase,
            'estado' => $this->faker->randomElement(['En ejecución', 'No asignado', 'Terminado'])
        ];
    }
}

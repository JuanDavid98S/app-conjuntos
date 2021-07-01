<?php

namespace Database\Factories;

use App\Models\Conjunto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConjuntoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conjunto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion_conjunto' => $this->faker->words(3, true),
            'cantidad_viviendas' => $this->faker->numberBetween(30,60)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Vivienda;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViviendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vivienda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'id_conjunto' => Conjunto::factory(),
           'id_usuario' => Usuario::factory(),
           'estado' => 'Libre',
           'precio_venta' => 130000000,
           'precio_alquiler' => 800000,
           'tipo' => $this->faker->words(5, true),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Solicitud_espacio;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitudEspacioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solicitud_espacio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => Usuario::factory(),
            'id_espacio' => Espacio::factory(),
            'estado' => $this->faker->sentence(),
            'fecha' => $this->faker->unique()->date(),
            'hora' => $this->faker->unique()->time(),
            'numero_personas' => $this->faker->numberBetween(10,30)
        ];
    }
}

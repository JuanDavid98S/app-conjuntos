<?php

namespace Database\Factories;

use App\Models\Solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitudFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solicitud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => Usuario::factory(),
            'tipo_solicitud' => 'Reparación general',
            'estado' => 'Pendiente',
            'fecha_solicitud' => $this->faker->date()
        ];
    }
}

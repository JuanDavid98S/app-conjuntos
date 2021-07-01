<?php

namespace Database\Factories;

use App\Models\Pqr;
use Illuminate\Database\Eloquent\Factories\Factory;

class PqrFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pqr::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => Usuario::factory(),
            'estado' => 'Pendiente',
            'descripcion' => $this->faker->paragraph(),
            'evidencia' => $this->faker->url()
        ];
    }
}

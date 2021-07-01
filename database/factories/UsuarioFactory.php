<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_rol' => $this->faker->numberBetween(1,2),
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'tipo_documento' => 'C.C',
            'numero_documento' => $this->faker->numberBetween(1000000000, 1999999999),
            'telefono' => $this->faker->numberBetween(3000000000, 3999999999),
            'contrasenia' => $this->faker->password(),
            'remember_token' => 'sakfjbabmfAFBSLI20935#$&/asfna/&)('
        ];
    }
}

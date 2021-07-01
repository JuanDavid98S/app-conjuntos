<?php

namespace Database\Factories;

use App\Models\Transaccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => Usuario::factory(),
            'tipo_transaccion' => 'Administración',
            'estado_pago' => true,
            'valor_pago' => 6000000,
            'fecha_limite' => '2021-07-31',
            'fecha_generacion' => '2021-06-30',
            'detalle' => 'Cancela cuota de administración',
            'metodo_pago' => 'Débito PSE'
        ];
    }
}

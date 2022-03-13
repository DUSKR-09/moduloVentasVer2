<?php

namespace Database\Factories;

use App\Models\Contratos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contratos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'idCliente' => $this->faker->randomDigitNotNull,
        'usuario' => $this->faker->randomDigitNotNull,
        'idProducto' => $this->faker->randomDigitNotNull
        ];
    }
}

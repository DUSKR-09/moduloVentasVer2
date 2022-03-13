<?php

namespace Database\Factories;

use App\Models\TipoProducto;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoProducto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'saldo' => $this->faker->word,
        'montoTotal' => $this->faker->word,
        'plazo' => $this->faker->word,
        'tasaIntereses' => $this->faker->word,
        'descripcion' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

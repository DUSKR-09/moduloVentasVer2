<?php

namespace Database\Factories;

use App\Models\Clientes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientesFactory extends Factory
{
    protected $model = Clientes::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fechaNac' => $this->faker->date('Y-m-d H:i:s'),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->numerify('########'),
            'telefonoAlt' => $this->faker->numerify('########'),
            'nombres' => $this->faker->name(),
            'apellido1' => $this->faker->name(),
            'apellido2' => $this->faker->name(),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

/* 
Clientes::Factory(10)->create();
*/

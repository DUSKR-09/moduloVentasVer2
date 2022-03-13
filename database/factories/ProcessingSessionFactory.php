<?php

namespace Database\Factories;

use App\Models\ProcessingSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProcessingSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProcessingSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fechaTentativa' => $this->faker->date('Y-m-d H:i:s'),
        'fechaContacto' => $this->faker->date('Y-m-d H:i:s'),
        'usuario' => $this->faker->randomDigitNotNull,
        'descripAcuerdo' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'idCliente' => $this->faker->randomDigitNotNull
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TurnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_turno' => $this->faker->word(),
            'hora_finalizacion' => $this->faker->time(),
            'hora_inicio' => $this->faker->time(),
            'estado' => $this->faker->randomElement(['Disponible', 'No disponible']),
        ];
    }
}

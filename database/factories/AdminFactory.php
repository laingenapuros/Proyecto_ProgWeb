<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'correo' => $this->faker->email(),
            'password' => fake()->sentence(),
            //'empleado_id' => $this->faker->randomNumber(1, false),
            'user_id' => User::factory(),
            'archivo_ubicacion' => $this->faker->name(),
            'archivo_nombre' => $this->faker->name(),
        ];
    }
}

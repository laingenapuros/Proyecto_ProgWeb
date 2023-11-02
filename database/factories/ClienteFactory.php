<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->name(),
            'cantidad' => $this->faker->randomNumber(2, false),
            //$this->faker->lexify(),
            'telefono' => fake()->randomNumber(5, true),
            'producto_men' => $this->faker->randomNumber(2, false),
            //'producto_id' => $this->faker->randomNumber(1, false),
            'user_id' => User::factory(),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Soporte>
 */
class SoporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idCliente'=>fake()->numberBetween(1,100),
            'idProducto'=>fake()->numberBetween(1,20),
            'descripcion'=>fake()->words(5,true),
        ];
    }
}

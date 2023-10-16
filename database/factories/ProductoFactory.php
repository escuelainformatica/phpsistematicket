<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idCliente' => fake()->numberBetween(1,100),
            'producto' => fake()->word,
            'precio' => fake()->numberBetween(1,2000),
            'enGarantia' => fake()->numberBetween(0,1),
        ];
    }
}

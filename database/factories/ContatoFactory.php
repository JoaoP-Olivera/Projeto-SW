<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contato>
 */
class ContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=> fake()->firstName(),
            'sobrenome' => fake()->lastName(),
            'data_de_nascimento' => fake()->date(),
            'telefone' => fake()->phoneNumber(),
            'celular' => fake()->phoneNumber(),
            'email' => fake()->safeEmail()
        ];
    }
}

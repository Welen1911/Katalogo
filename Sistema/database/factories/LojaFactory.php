<?php

namespace Database\Factories;

use App\Models\Loja;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loja>
 */
class LojaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->company(),
            'contato' => $this->faker->phoneNumber(),
            'logo' => null,
            'user_id' => function () {
                return User::factory()->create()->id;
            },
        ];
    }
}

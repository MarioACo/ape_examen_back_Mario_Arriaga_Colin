<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'domicilio' => $this->faker->streetAddress,
            'numero_exterior' => $this->faker->randomNumber(3),
            'colonia' => $this->faker->citySuffix,
            'cp' => $this->faker->postcode,
            'ciudad' => $this->faker->city
        ];
    }
}
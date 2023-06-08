<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emergency>
 */
class EmergencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->numberBetween(),
            'zipcode' => $this->faker->numberBetween(),
            'street' => $this->faker->streetAddress,
            'number' => $this->faker->numberBetween(1,500),
            'complement',
            'neighborhood' => $this->faker->century,
            'state' => $this->faker->century,
            'city' => $this->faker->city,
            'description' => $this->faker->words(6),
            'user_id' => User::first()->id,
        ];
    }
}

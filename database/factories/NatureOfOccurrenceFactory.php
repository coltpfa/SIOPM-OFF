<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NatureOfOccurrence>
 */
class NatureOfOccurrenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->title,
            "description" => $this->faker->text,
            'user_created' => User::first()->id,
            'user_updated' => User::first()->id,
        ];
    }
}

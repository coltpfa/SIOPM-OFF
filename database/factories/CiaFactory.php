<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\Bpmm;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cia>
 */
class CiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->faker->title,
            'description' => $this->faker->text,
            'bpmm_id' => Bpmm::first()->id,
            'user_created' => User::first()->id,
            'user_updated' => User::first()->id,
        ];
    }
}

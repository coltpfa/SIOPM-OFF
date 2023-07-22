<?php

namespace Database\Factories;

use App\Models\Bpmm;
use App\Models\NatureOfOccurrence;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RegistrationOccurrence>
 */
class RegistrationOccurrenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->title(),
            'time' => $this->faker->dateTime(),
            'requester' => $this->faker->name(),
            'anonymous' => $this->faker->boolean(),
            'phone' => $this->faker->phoneNumber(),
            'city' => $this->faker->city(),
            'address' => $this->faker->streetAddress(),
            'number' => $this->faker->buildingNumber(),
            'complement' => $this->faker->secondaryAddress(),
            'neighborhood' => $this->faker->word(),
            'reference' => $this->faker->sentence(),
            'bpmm_id' => Bpmm::first()->id,
            'natureOfOccurrence_id' => NatureOfOccurrence::first()->id,
            'policeInDanger' => $this->faker->boolean(),
            'cellularImeiNumber' => $this->faker->numerify('##############'),
            'cellularModel' => $this->faker->word(),
            'cellularBrand' => $this->faker->word(),
            'cellularStatus' => $this->faker->randomElement(['Active', 'Inactive']),
            'vehiclePlate' => $this->faker->regexify('[A-Z]{3}-\d{4}'),
            'vehicleBrand' => $this->faker->word(),
            'vehicleModel' => $this->faker->word(),
            'vehicleColor' => $this->faker->colorName(),
            'vehicleChassis' => $this->faker->regexify('[A-HJ-NPR-Z0-9]{17}'),
            'vehicleStatus' => $this->faker->randomElement(['Stolen', 'Recovered', 'Unclaimed']),
            'peopleRg' => $this->faker->numerify('##########'),
            'peopleName' => $this->faker->name(),
            'peopleStatus' => $this->faker->randomElement(['Suspect', 'Witness', 'Victim']),
            'status' => $this->faker->randomElement(['Open', 'Closed']),
            'view' => $this->faker->randomElement(['Public', 'Private']),
            'situation' => $this->faker->sentence(),
            'observation' => $this->faker->paragraph(),
            'attendance' => $this->faker->randomElement(['Police', 'Firefighter', 'Medical']),
            'log' => $this->faker->paragraph(),
            'user_id' => User::first()->id,
        ];
    }
}

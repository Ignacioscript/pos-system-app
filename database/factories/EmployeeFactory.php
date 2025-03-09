<?php

namespace Database\Factories;

use App\Models\JobType;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->email,
            'phone_number' => $this->faker->unique()->phoneNumber,
            'jobType_id' => JobType::factory(),
            'hired_date' => now()->toDateString(),
            'location_id' => Location::factory()
        ];
    }
}

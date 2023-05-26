<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contact_name' => fake()->word(),
            'contact_email' => fake()->email(),
            'contact_phone_number' => fake()->phoneNumber(),
            'company_name' => fake()->word(),
            'company_address' => fake()->address(),
            'company_city' => fake()->city(),
            'company_zip' => rand(1,100_000),
            'company_vat' => rand(1,10_000),
        ];
    }
}

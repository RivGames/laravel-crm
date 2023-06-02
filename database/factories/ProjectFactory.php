<?php

namespace Database\Factories;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = [Status::OPEN, Status::IN_PROGRESS, Status::CLOSED];

        return [
            'title' => fake()->word(),
            'description' => fake()->words(10, true),
            'user_id' => rand(1, 10),
            'client_id' => rand(1, 10),
            'deadline' => fake()->date(),
            'status' => ($statuses[array_rand($statuses)])->name,
        ];
    }
}

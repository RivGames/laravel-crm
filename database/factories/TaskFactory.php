<?php

namespace Database\Factories;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'title' => Str::random(rand(5, 25)),
            'description' => Str::random(rand(25, 125)),
            'user_id' => rand(1, 10),
            'client_id' => rand(1, 10),
            'project_id' => rand(1, 10),
            'deadline' => fake()->date(),
            'status' => ($statuses[array_rand($statuses)])->value,
        ];
    }
}

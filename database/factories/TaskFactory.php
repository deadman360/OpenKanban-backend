<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            "board_id" => \App\Models\Board::factory(),
            "created_by_id" => \App\Models\User::factory(),
            "assigned_to_id" => \App\Models\User::factory(),
            "status_id" => \App\Models\Status::factory(),
            "name" => $this->faker->sentence(4),
            "description" => $this->faker->paragraph(),
            "due_date" => $this->faker->date(),
            "estimated_hours" => $this->faker->numberBetween(1, 40),
        ];
    }
}

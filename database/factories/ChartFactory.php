<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chart>
 */
class ChartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startDate = $this->faker->dateTimeThisYear("-30 days");

        $endDate = (clone $startDate)->modify("+1 day");

        return [
            'date' => $endDate,
            'number' => $this->faker->numberBetween(10, 100)
        ];
    }
}

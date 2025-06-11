<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TableFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => 'Столик ' . $this->faker->unique()->numberBetween(1, 20),
            'capacity' => $this->faker->numberBetween(2, 8),
            'location' => $this->faker->randomElement(['У окна', 'В центре', 'В углу', 'На террасе']),
            'is_available' => $this->faker->boolean(90),
        ];
    }
}

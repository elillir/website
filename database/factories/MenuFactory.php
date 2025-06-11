<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    public function definition()
    {
        return [
            'category_id' => \App\Models\Category::factory(),
            'name' => $this->faker->words(3, true),
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100, 2000),
            'is_available' => $this->faker->boolean(90),
        ];
    }
}

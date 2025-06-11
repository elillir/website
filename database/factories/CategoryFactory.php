<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Завтраки', 'Салаты', 'Супы', 'Основные блюда', 'Десерты', 'Напитки']),
            'slug' => $this->faker->slug,
            'description' => $this->faker->sentence,
        ];
    }
}

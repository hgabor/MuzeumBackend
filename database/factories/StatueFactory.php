<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person' => $this->faker->name(),
            'height' => $this->faker->numberBetween(30, 200),
            'price' => $this->faker->numberBetween(10, 500) * 1000,
        ];
    }
}

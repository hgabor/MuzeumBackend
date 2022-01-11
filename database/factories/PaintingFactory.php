<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \Illuminate\Support\Str;

class PaintingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => Str::headline($this->faker->colorName() . ' ' . $this->faker->city()),
            'year' => $this->faker->year(),
            'on_display' => $this->faker->boolean(),
        ];
    }
}

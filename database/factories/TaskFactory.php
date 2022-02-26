<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'id' => $this->faker->randomDigit,
            'title' => $this->faker->title,
            'content' => Str::random(100),
            'person_in_charge' => Str::random(50),
        ];
    }
}
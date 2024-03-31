<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(mt_rand(2, 10)),
            "slug" => $this->faker->slug(3, false),
            "catatan" => $this->faker->paragraph(mt_rand(5, 10)),
            "user_id" => mt_rand(1, 3),
            "category_id" => mt_rand(1, 3)
        ];
    }
}

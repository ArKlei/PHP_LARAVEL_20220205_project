<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ //Užpildyti kategorijas 3 netikromis kategorijomis
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->paragraph(5),
        ];
    }
}

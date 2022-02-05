<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [ //Užpildyti 150 netikrų produktų. Paveiksliukams naudoti $this->faker->imageUrl().
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->paragraph(5),
            'price' => $this->faker->numberBetween(0.00, 1000.00),
            'category_id' => rand(1,3),
            'image_url' =>$this->faker->imageUrl(),
        ];
       
    }
}

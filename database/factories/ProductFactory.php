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
        $product_name = $this->faker->unique()->word($nb=2,$asText=true);
        return [
            'name' => $product_name,
            'description' => $this->faker->text(500),
            'price' => $this->faker->numberBetween(10,500),
            'quantity' => $this->faker->numberBetween(100,500),
            'image' => 'digital_'.$this->faker->unique()->numberBetween(1,22).'.jpg',
            'category_id' => $this->faker->numberBetween(1,5)
        ];
    }
}

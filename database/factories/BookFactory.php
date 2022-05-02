<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'title' => $this->faker->word(),
            'page_count' => $this->faker->randomDigit(),
            'edition' => $this->faker->word(),
            'volume' => $this->faker->randomDigit(),
            'description' => $this->faker->paragraph()
        ];
    }
}

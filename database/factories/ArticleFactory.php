<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\BlogCategory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'category_id' => BlogCategory::factory(),
            'author_id' => User::factory(),
            'published_at' => $this->faker->dateTime(),
            'excerpt' => $this->faker->sentence(),
            'image' => $this->faker->image('storage/app/public'),
            'seo_title' => $this->faker->sentence(),
            'seo_description' => $this->faker->sentence(),
        ];
    }
}

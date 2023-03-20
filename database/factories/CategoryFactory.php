<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = implode('', $this->faker->words(3));
        $slug = implode('-', $this->faker->words(2));

        return [
            'name' => $category,
            'slug' => $slug,
            // 'slug' => Str::slug($category),
        ];
    }
}

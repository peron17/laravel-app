<?php

namespace Database\Factories;

use App\Models\BookCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'author' => $this->faker->name(),
            'synopsys' => $this->faker->paragraph(5),
            'publisher' => $this->faker->city(),
            'cover' => $this->faker->imageUrl(300, 300, 'robot'),
            'released_date' => $this->faker->date(),
            'price' => $this->faker->numberBetween(10, 999),
            'sold' => $this->faker->randomNumber(2),
            'category_id' => BookCategory::all('id')->random(1)[0]->id,
            'user_id' => User::all('id')->random(1)[0]->id,
        ];
    }
}

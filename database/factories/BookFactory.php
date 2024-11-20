<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    use HasFactory;
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(3),
            "author" => fake()->name(),
            "created_at" => fake()->dateTimeBetween("-2 years", "now"),
            "updated_at" => fake()->dateTimeBetween('created_at', "now")
        ];
    }
}

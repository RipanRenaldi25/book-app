<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "book_id" => null,
            "review" => fake()->paragraph(),
            "rating" => fake()->numberBetween(1, 5),
            "created_at" => fake()->dateTimeBetween("-2 years", "now"),
            "updated_at" => fake()->dateTimeBetween("created_at", "now"),
        ];
    }


    public function customReviews(int $ratingStart, int $ratingEnd) {
        return $this->state(function () use($ratingStart, $ratingEnd) {
            return [
                "rating" => fake()->numberBetween($ratingStart, $ratingEnd),
            ];
        });
    }

    public function goodReviews() {
        return $this->customReviews(4, 5);
    }

    public function badReviews() {
        return $this->customReviews(1, 3);
    }

    public function averageReviews() {
        return $this->customReviews(2,4);
    }
}

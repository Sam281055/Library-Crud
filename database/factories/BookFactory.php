<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'isbn' => $this->faker->isbn13,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(100),
            'publisher' => $this->faker->company(),
            'release_date' => $this->faker->date(),
            'pages' => $this->faker->numberBetween(50,1000),
            'image' => '/img/example.png'
        ];
    }
}

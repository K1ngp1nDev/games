<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'developer' => $this->faker->name(),
            'genre' => $this->faker->word(),
            'release_date' => $this->faker->date(),
            'platform' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}

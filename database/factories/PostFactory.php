<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'postBody' => $this->faker->firstName(),
            'topic' => $this->faker->randomElement(['Sports', 'Art', 'Games']),
            'likes' => $this->faker->numberBetween(0,20),
            'dislikes' => $this->faker->numberBetween(0,20),
            'totalUniqueViews' => $this->faker->numberBetween(20,40),
            'walesUniqueViews' => $this->faker->numberBetween(0,20),
            'englandUniqueViews' => $this->faker->numberBetween(0,20),
            'scotlandUniqueViews' => $this->faker->numberBetween(0,20),
            'maleUniqueViews' => $this->faker->numberBetween(0,20),
            'femaleUniqueViews' => $this->faker->numberBetween(0,20),
            'otherUniqueViews' => $this->faker->numberBetween(0,20),
        ];
    }
}

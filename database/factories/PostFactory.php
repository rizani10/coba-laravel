<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //membuat factory post
            'title' => $this->faker->sentence(mt_rand(3, 10)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->text(mt_rand(40, 100)),
            'body' => '<p>' . implode('<p></p>' , $this->faker->paragraphs(mt_rand(20, 30))) . '</p>',
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 3),
        ];
    }
}

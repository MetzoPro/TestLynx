<?php
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tag;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;


    public function definition()
    {
        return [
            'contenu' => $this->faker->sentence(),
            'tag_id' => $this->faker->randomNumber(1,Tag::count()),

        ];
    }
}

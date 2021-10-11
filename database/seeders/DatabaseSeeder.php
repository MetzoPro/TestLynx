<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ { Post, Tag};

use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            ['contenu' => 'post1', 'tag_id' => 1],
            ['contenu' => 'post2', 'tag_id' => 2],
            ['contenu' => 'post3', 'tag_id' => 1],
            ['contenu' => 'post4', 'tag_id' => 3],
            ['contenu' => 'post5', 'tag_id' => 4],
            ['contenu' => 'post6', 'tag_id' => 2],
            ['contenu' => 'post7', 'tag_id' => 3],
            ['contenu' => 'post8', 'tag_id' => 5],
            ['contenu' => 'post9', 'tag_id' => 1],
            ['contenu' => 'post10', 'tag_id' => 3]
        ]);

        Tag::insert([
            ['tag' => 'tag1'],
            ['tag' => 'tag2'],
            ['tag' => 'tag3'],
            ['tag' => 'tag4'],
            ['tag' => 'tag5'],
            ['tag' => 'tag6'],
        ]);
    }
}

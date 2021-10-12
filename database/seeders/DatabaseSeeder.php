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

        Tag::factory()
            ->count(50)
            ->create();

        Post::factory()
            ->count(50)
            ->create();
    }
}

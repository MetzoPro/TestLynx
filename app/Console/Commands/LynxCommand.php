<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Tag;
use App\Models\Post;

class LynxCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Permet de lister tous les posts d\'un tag donné';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $tag = $this->ask('Entrez le tag svp:');

        $idTag = Tag::GetTagId($tag);

        $posts = Post::GetPosts($idTag);

        foreach ($posts as $post) {
            $this->info($post);
        }

    }
}

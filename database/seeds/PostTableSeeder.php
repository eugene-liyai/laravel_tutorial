<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Learning laravel',
            'content' => 'This blog post is meant to get you started with laravel'
        ]);
        $post->save();

        $post = new \App\Post([
            'title' => 'Laravel diving deeper',
            'content' => 'This blog post gives you an in depth view of models and databases'
        ]);
        $post->save();
    }
}

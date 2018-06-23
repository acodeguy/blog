<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "View the Source Code on Github",
            'body' => "Wanna see how this works or make a fork of your own? <a href='https://github.com/acodeguy/blog'>",
        ]);
    }
}

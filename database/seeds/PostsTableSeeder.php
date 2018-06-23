<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            [
                'id' => 1,
                'user_id' => 1,
                'title' => "View the Source Code on Github",
                'body' => "Wanna see how this works or make a fork of your own? <a href='https://github.com/acodeguy/blog'>View the source on GitHub</a>.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'title' => "Create New Posts, Edit Them Too",
                'body' => "Posted something and want to change it? No worries! Just select your post, edit and save!",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'title' => "Add Comments",
                'body' => "Members can leave comments on posts, and even delete them if they change their mind later!",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'title' => "Register Now to Explore",
                'body' => "This is a fully-functional live demo; register yourself an account and begin leaving making posts and comments of your own in seconds!",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}

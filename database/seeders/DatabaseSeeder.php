<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory()->create([
        //     'name' => 'John Doe',
        // ]);

        // Post::factory(5)->create([
        //     'user_id' => $user->id,
        // ]);

        User::factory(5)->create();

        Post::factory(5)->create();

        Comment::factory(5)->create();
    }
}

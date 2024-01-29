<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('posts')->insert([
            'id' => 1,
            'user_id' => 1,
            'name' => 'TestPost',
            'contents' => 'Test post content.',
        ]);

        $posts = Post::all();

        foreach ($posts as $post) {
            Comment::create([
                'post_id' => $post->id,
                'content' => 'testcomment1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        foreach ($posts as $post) {
            Comment::create([
                'post_id' => $post->id,
                'content' => 'testcomment2',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}

<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new post();
        $post->title = 'Title 1';
        $post->content = 'Content 1';
        $post->category = 'Category 1';
        $post->published_at= now();
        
        $post->save();
    }
}

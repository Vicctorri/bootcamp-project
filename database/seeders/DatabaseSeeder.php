<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\BlogTag;
use App\Models\Comment;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()
            ->count(100)
            ->has(BlogTag::factory(), 'blogTags')
            ->create();
        Comment::factory()->count(20)->create();
    }
}

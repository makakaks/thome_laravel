<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()
            ->count(5)
            ->create()
            ->each(function ($article) {
                $article->translations()->createMany([
                    [
                        'locale' => 'en',
                        'title' => 'English Title',
                        'coverPageImg' => 'https://example.com/cover-en.jpg',
                        'content' => 'This is the content in English'
                    ],
                    [
                        'locale' => 'th',
                        'title' => 'Thai Title',
                        'coverPageImg' => 'https://example.com/cover-th.jpg',
                        'content' => 'เนื้อหาในภาษาไทย',
                    ],
                ]);
            });
    }
}

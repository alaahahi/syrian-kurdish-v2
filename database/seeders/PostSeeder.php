<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => [
                'en' => 'Breaking News',
                'fr' => 'Dernières nouvelles',
                'es' => 'Últimas noticias',
                'ar' => 'أخبار عاجلة',
            ],
            'content' => [
                'en' => 'This is the latest breaking news.',
                'fr' => 'Ceci est la dernière nouvelle.',
                'es' => 'Esta es la última noticia de última hora.',
                'ar' => 'هذه هي آخر الأخبار العاجلة.',
            ],
            'is_published' => true,
        ]);
    }
}

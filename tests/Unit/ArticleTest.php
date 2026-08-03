<?php

namespace Tests\Unit;

use App\Models\Article;
use Carbon\Carbon;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    public function test_published_at_is_cast_to_datetime(): void
    {
        $article = new Article(['published_at' => '2024-01-02 03:04:05']);

        $this->assertInstanceOf(Carbon::class, $article->published_at);
        $this->assertSame('2024-01-02 03:04:05', $article->published_at->format('Y-m-d H:i:s'));
    }
}

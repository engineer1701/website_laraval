@extends('layouts.app')

@section('title', $article->title . ' | Consultancy Company')
@section('description', $article->excerpt)

@section('content')
<section class="py-5">
    <div class="container-lg">
        <a href="{{ route('news') }}" class="d-inline-flex align-items-center mb-4"><i class="bi bi-arrow-left me-3"></i>back to all posts</a>
        <div class="text-color-secondary fs-5 mb-4">{{ strtoupper($article->category) }}</div>
        <div class="fw-light">
            <h1 class="display-4">{{ $article->title }}</h1>
            <p class="fs-5">{{ $article->excerpt }}</p>
            <img src="{{ asset($article->image ?? 'images/news-img1.jpg') }}" class="w-100 rounded-5 mb-5" alt="">
            <p class="fw-semibold mb-3">{{ $article->published_at ? $article->published_at->format('F d, Y') : 'Published recently' }}</p>
            @php
                $blocks = preg_split('/\R{2,}/', trim($article->body));
            @endphp
            @foreach($blocks as $block)
                @if(trim($block) === '')
                    @continue
                @endif
                @if(str_starts_with(trim($block), '- '))
                    <ul class="fw-light mb-4 ps-3">
                        @foreach(explode("\n", trim($block)) as $item)
                            @if(trim($item) !== '')
                                <li>{{ trim(ltrim($item, '- ')) }}</li>
                            @endif
                        @endforeach
                    </ul>
                @else
                    <p class="fw-light mb-4">{{ trim($block) }}</p>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endsection

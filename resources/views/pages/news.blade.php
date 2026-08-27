@extends('layouts.app')

@section('title', 'Insights | Consultancy Company')
@section('description', 'Explore consultancy insights, articles, and strategic thinking curated for modern leaders.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-lg-center align-items-end justify-content-between">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-4 text-white">Our Insights</h1>
                        <p class="mb-0 text-white">See how we help our clients expand their capabilities on multiple existing—and emerging—fronts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-2">
            @foreach($articles as $article)
                <div class="col-lg-4 col-sm-6">
                    <div class="news-card rounded-5 p-3 pb-4">
                        <div class="news-featured-img rounded-4 mb-4"><img src="{{ asset($article->image ?? 'images/news-img1.jpg') }}" class="object-fit-cover h-100 w-100" alt=""></div>
                        <small class="rounded-pill light-bg p-1 px-3">{{ strtoupper($article->category) }}</small>
                        <a href="{{ route('article', $article) }}" class="fs-5 fw-normal d-block my-4">{{ $article->title }}</a>
                        <small>Report</small>
                        <small>{{ $article->published_at ? $article->published_at->format('M d, Y') : 'Published recently' }}</small>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">{{ $articles->links() }}</div>
    </div>
</section>
@endsection

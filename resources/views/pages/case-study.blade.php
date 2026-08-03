@extends('layouts.app')

@section('title', $caseStudy->title . ' | Consultancy Company')
@section('description', $caseStudy->summary)

@section('content')
<section class="py-5">
    <div class="container-lg">
        <a href="{{ route('case-studies') }}" class="d-inline-flex align-items-center mb-4"><i class="bi bi-arrow-left me-3"></i>back to all case studies</a>
        <div class="text-color-secondary fs-5 mb-4">{{ strtoupper($caseStudy->industry) }}</div>
        <div class="fw-light">
            <h1 class="display-4">{{ $caseStudy->title }}</h1>
            <p class="fs-5">{{ $caseStudy->summary }}</p>
            <img src="{{ asset($caseStudy->image ?? 'images/news-img1.jpg') }}" class="w-100 rounded-5 mb-5" alt="">
            <p class="fw-semibold">Client: {{ $caseStudy->client }}</p>
            <p class="fw-semibold">Outcome: {{ $caseStudy->result }}</p>
            <div>{!! nl2br(e($caseStudy->body)) !!}</div>
        </div>
    </div>
</section>
@endsection

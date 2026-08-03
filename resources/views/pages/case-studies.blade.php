@extends('layouts.app')

@section('title', 'Case Studies | Consultancy Company')
@section('description', 'See how Consultancy Company has helped clients achieve measurable gains through transformation and advisory work.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-lg-center align-items-end justify-content-between">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-4 text-white">Case Studies</h1>
                        <p class="mb-0 text-white">A selection of measurable client outcomes driven by strategy, leadership, and operational excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-4">
            @foreach($caseStudies as $study)
                <div class="col-lg-4 col-md-6">
                    <div class="news-card rounded-5 p-3 pb-4">
                        <div class="news-featured-img rounded-4 mb-4"><img src="{{ asset($study->image ?? 'images/news-img1.jpg') }}" class="object-fit-cover h-100 w-100" alt=""></div>
                        <small class="rounded-pill light-bg p-1 px-3">{{ strtoupper($study->industry) }}</small>
                        <a href="{{ route('case-study', $study) }}" class="fs-5 fw-normal d-block my-4">{{ $study->title }}</a>
                        <small>{{ $study->result }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

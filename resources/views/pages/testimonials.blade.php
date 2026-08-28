@extends('layouts.app')

@section('title', 'Testimonials | Consultancy Company')
@section('description', 'Client testimonials for Consultancy Company.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Testimonials</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <h2 class="fw-light display-5 mb-5">Validated by <br> happy customers.</h2>
        <div class="row g-3">
            @forelse($testimonials as $testimonial)
                <div class="col-md-6">
                    <div class="border border-secondary rounded-4 p-lg-4 p-3 h-100">
                        @if($testimonial->logo)<img src="{{ $testimonial->publicImageUrl($testimonial->logo) }}" class="test-logo img-fluid mb-4" alt="">@endif
                        <p class="fw-light">{{ $testimonial->quote }}</p>
                        <strong>{{ $testimonial->name }}</strong>
                        <div class="fw-light">{{ $testimonial->company }}</div>
                    </div>
                </div>
            @empty
                <p class="mb-0">Testimonials will be available soon.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection

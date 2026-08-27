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
        <h2 class="fw-light display-5 mb-4">Validated by<span class="text-color-primary">happy customers.</span></h2>
        <div class="row g-4">
            @foreach($testimonials as $testimonial)
                <div class="col-lg-6">
                    <div class="border rounded-4 p-4 h-100">
                        <p class="fw-light">{{ $testimonial->quote }}</p>
                        <h5 class="mt-4 mb-0">{{ $testimonial->name }}</h5>
                        <small>{{ $testimonial->name === 'Sarah Davies' ? 'Head of Learning & Development' : 'Manager, ' . $testimonial->company }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

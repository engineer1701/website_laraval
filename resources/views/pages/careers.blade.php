@extends('layouts.app')

@section('title', 'Careers | Consultancy Company')
@section('description', 'Explore career opportunities at Consultancy Company and discover where you can grow.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Careers</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <h2 class="fw-light display-5 mb-0">Where will you shine?</h2>
        <p class="small">Across industries and around the world, you’ll use technology and human ingenuity to create positive change.</p>
        <div class="mb-4">
            <h3 class="fw-semibold text-color-primary">Areas of interest</h3>
            <h4 class="fw-light mb-4">Consulting</h4>
            <div class="row g-4">
                @forelse($careers as $career)
                    <div class="col-lg-4 col-sm-6">
                        <div class="border rounded-4 p-4 h-100 career-item">
                            <h5>{{ $career->title }}</h5>
                            <small class="d-block mb-3">{{ $career->location ?: 'Multiple locations' }} | {{ $career->employment_type ?: 'Full time' }} | {{ $career->level ?: 'All levels' }}</small>
                            <a href="{{ $loop->first ? route('career.details') : route('career.detail', $career) }}" class="fw-semibold">See this job</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="border rounded-4 p-4 text-center">
                            <p class="mb-0">No careers are available at this time. Please check back soon.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection

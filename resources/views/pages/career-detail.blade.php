@extends('layouts.app')

@section('title', 'Career Details | Consultancy Company')
@section('description', 'Review the details of an open position at Consultancy Company.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Career Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-4">
            <div class="col-lg-8">
                <h2 class="fw-semibold mb-3">{{ $career->title }}</h2>
                <p class="text-color-primary fw-semibold">{{ $career->location ?: 'Multiple locations' }} • {{ $career->employment_type ?: 'Full time' }} • {{ $career->level ?: 'All levels' }}</p>
                <p>{{ $career->summary }}</p>
                @if($career->responsibilities)
                    <h4 class="mt-4">Responsibilities</h4>
                    <div>{!! nl2br(e($career->responsibilities)) !!}</div>
                @endif
                @if($career->qualifications)
                    <h4 class="mt-4">Qualifications</h4>
                    <div>{!! nl2br(e($career->qualifications)) !!}</div>
                @endif
                @if($career->benefits)
                    <h4 class="mt-4">Benefits</h4>
                    <div>{!! nl2br(e($career->benefits)) !!}</div>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="border rounded-4 p-4">
                    <h4 class="fw-semibold">Apply Now</h4>
                    <p>Please send your CV and a short note outlining your experience to {{ $career->application_email ?: 'careers@consultancycompany.com' }}.</p>
                    <a href="mailto:{{ $career->application_email ?: 'careers@consultancycompany.com' }}" class="btn btn-type1 rounded-pill px-4">Email Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

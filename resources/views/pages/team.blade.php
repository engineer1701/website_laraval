@extends('layouts.app')

@section('title', 'Our Team | Consultancy Company')
@section('description', 'Meet the leadership and advisory team behind Consultancy Company.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-lg-center align-items-end justify-content-between">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-4 text-white">Our Team</h1>
                        <p class="mb-0 text-white">A multidisciplinary team of strategic advisors, operators, and industry specialists.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-4">
            @foreach($teamMembers as $member)
                <div class="col-lg-4 col-md-6">
                    <div class="team-card rounded-4 position-relative h-100">
                        <img src="{{ asset($member->photo ?? 'images/team-img2.jpg') }}" class="h-100 object-fit-cover w-100" alt="{{ $member->name }}">
                        <a href="{{ route('team.member', $member) }}" class="team-info-link p-xxl-4 p-xl-3 p-md-2 p-3">
                            <span><h5>{{ $member->name }}</h5><small>{{ $member->title }}</small></span>
                            <span class="link-icon"></span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

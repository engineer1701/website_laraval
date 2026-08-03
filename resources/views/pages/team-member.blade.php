@extends('layouts.app')

@section('title', $teamMember->name . ' | Consultancy Company')
@section('description', $teamMember->bio)

@section('content')
<section class="py-5">
    <div class="container-lg">
        <a href="{{ route('team') }}" class="d-inline-flex align-items-center mb-4"><i class="bi bi-arrow-left me-3"></i>back to our team</a>
        <div class="row g-4 align-items-start">
            <div class="col-lg-4">
                <img src="{{ asset($teamMember->photo ?? 'images/team-img2.jpg') }}" class="w-100 rounded-5" alt="">
            </div>
            <div class="col-lg-8">
                <h1 class="display-4">{{ $teamMember->name }}</h1>
                <p class="text-color-primary fs-5">{{ $teamMember->title }}</p>
                <p class="fw-light">{{ $teamMember->bio }}</p>
                @if($teamMember->email)
                    <p><strong>Email:</strong> <a href="mailto:{{ $teamMember->email }}">{{ $teamMember->email }}</a></p>
                @endif
                @if($teamMember->linkedin)
                    <p><strong>LinkedIn:</strong> <a href="{{ $teamMember->linkedin }}" target="_blank">{{ $teamMember->linkedin }}</a></p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

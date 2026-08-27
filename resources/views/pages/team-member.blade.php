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
                <p class="fw-light">A strategist at heart and an innovator by trade, I co-founded [Consulting Firm Name] to cut through the noise and deliver what truly matters: results. My expertise lies in turning complex business challenges into clear opportunities for growth.</p>
                <p class="fw-light">With a Ph.D. in Organizational Psychology and 15+ years of in-the-trenches experience, I blend academic rigor with practical, real-world solutions.</p>
                <p><strong>Phone:</strong> <a href="tel:+919946685878">+91 9946685878</a></p>
                <p><strong>Email:</strong> <a href="mailto:angiemontgomery@sample.com">angiemontgomery@sample.com</a></p>
                <h5 class="mt-4">Specialties:</h5>
                <ul>
                    <li>Leadership &amp; Executive Strategy</li>
                    <li>Organizational Transformation</li>
                    <li>Growth Scaling</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

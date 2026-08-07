@extends('layouts.app')

@section('title', 'About Us | Consultancy Company')
@section('description', 'Learn how Consultancy Company partners with organizations to solve complex challenges with clarity and purpose.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-lg-center align-items-end justify-content-between">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-4 text-white">About Us</h1>
                        <p class="mb-0 text-white">Consultancy Company is a global advisory firm that empowers organizations to navigate complexity, accelerate transformation, and achieve measurable impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <p class="text-center mb-5 fs-5 fw-light">We collaborate with business leaders, innovators, and policymakers to turn vision into strategy, and strategy into lasting success. With a global presence and a multidisciplinary team, we bring together strategic insight, deep industry expertise, and a commitment to sustainable progress.</p>
        <div class="mb-5 p-4 p-lg-5 rounded-5 border border-1 border-light shadow-sm">
            <h2 class="fw-normal mb-4">Our Purpose</h2>
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <p class="fw-light mb-4">We believe that meaningful change begins with clarity, collaboration, and courage. Our purpose is to enable businesses and societies to adapt, grow, and lead responsibly in a rapidly evolving world.</p>
                    <ul class="fw-light mb-4 ps-3">
                        <li class="mb-2"><strong class="text-color-primary">We bring insight to light</strong> by challenging traditional thinking and bringing fresh perspectives to the toughest problems.</li>
                        <li class="mb-2"><strong class="text-color-primary">We drive inspired impact</strong> by looking beyond the next deadline to the next decade.</li>
                        <li class="mb-2"><strong class="text-color-primary">We conquer complexity</strong> by discovering unique sources of competitive advantage and hidden truths in dynamic systems.</li>
                        <li><strong class="text-color-primary">We lead with integrity</strong> by confronting the hard issues and staying true to our values.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <h2 class="fw-normal mb-4">Our Values</h2>
            <div class="row g-lg-4 g-3">
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Integrity.png') }}" class="img-fluid" alt="Integrity"></div><h4>Integrity</h4><p class="fs-5 fw-light">We act with unwavering honesty and accountability.</p></div></div>
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Respect.png') }}" class="img-fluid" alt="Respect"></div><h4>Respect for the Individual</h4><p class="fs-5 fw-light">We value every person’s contribution and create an environment that nurtures curiosity, empathy, and growth.</p></div></div>
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Partnership.png') }}" class="img-fluid" alt="Partnership"></div><h4>Partnership</h4><p class="fs-5 fw-light">We build lasting relationships founded on trust, shared ambition, and mutual success.</p></div></div>
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Clients-Come-First.png') }}" class="img-fluid" alt="Clients Come First"></div><h4>Clients Come First</h4><p class="fs-5 fw-light">We measure our achievements through the results and progress of our clients.</p></div></div>
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Strategic-Perspective.png') }}" class="img-fluid" alt="Strategic Perspective"></div><h4>The Strategic Perspective</h4><p class="fs-5 fw-light">We think beyond the immediate challenge and connect insight with long-term sustainability.</p></div></div>
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Expanding.png') }}" class="img-fluid" alt="Expanding the Art of the Possible"></div><h4>Expanding the Art of the Possible</h4><p class="fs-5 fw-light">We challenge conventions to design solutions that are both practical and visionary.</p></div></div>
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Value-Delivered.png') }}" class="img-fluid" alt="Value Delivered"></div><h4>Value Delivered</h4><p class="fs-5 fw-light">We focus on delivering tangible, lasting change that drives measurable business outcomes.</p></div></div>
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Diversity.png') }}" class="img-fluid" alt="Diversity"></div><h4>Diversity</h4><p class="fs-5 fw-light">We embrace diversity of thought, background, and experience as a source of innovation and strength.</p></div></div>
                <div class="col-lg-4 col-sm-6"><div><div class="w-25 mb-3"><img src="{{ asset('images/Social-Impact.png') }}" class="img-fluid" alt="Social Impact"></div><h4>Social Impact</h4><p class="fs-5 fw-light">We are committed to making a difference by shaping a more inclusive and sustainable world.</p></div></div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <h4 class="fw-bold mb-4">Client <span class="text-color-primary">Testimonials</span></h4>
        <div class="row g-4">
            @forelse($testimonials as $testimonial)
                @php
                    $logoPath = 'images/logos/' . \Illuminate\Support\Str::slug($testimonial->company) . '.png';
                @endphp
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 rounded-4 border h-100 d-flex flex-column justify-content-between">
                        <div>
                            @if(file_exists(public_path($logoPath)))
                                <div class="mb-3">
                                    <img src="{{ asset($logoPath) }}" alt="{{ $testimonial->company }} logo" class="img-fluid" style="max-height:48px;">
                                </div>
                            @endif
                            <p class="fw-light">“{{ $testimonial->quote }}”</p>
                        </div>
                        <div>
                            <h5 class="mt-3 mb-0">{{ $testimonial->name }}</h5>
                            <small class="text-color-primary">{{ $testimonial->company }}</small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="p-4 rounded-4 border">
                        <p class="fw-light mb-0">Testimonials will appear here as they are added to the site.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection

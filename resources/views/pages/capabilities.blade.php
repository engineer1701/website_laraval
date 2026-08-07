@extends('layouts.app')

@section('title', 'Capabilities | Consultancy Company')
@section('description', 'Explore the capabilities and service areas that drive our advisory work.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Capabilities</h1>
                        <p class="mb-0 text-white">See how we help our clients expand their capabilities on multiple existing—and emerging—fronts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="capability-card rounded-4 overflow-hidden">
                    <div class="capability-card-media position-relative">
                        <img src="{{ asset('images/Strategic-Perspective.png') }}" class="img-fluid w-100 object-fit-cover" alt="Artificial Intelligence">
                    </div>
                    <div class="capability-card-footer p-4 bg-white">
                        <h4 class="fw-semibold mb-0">Artificial Intelligence</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="capability-card rounded-4 overflow-hidden">
                    <div class="capability-card-media position-relative">
                        <img src="{{ asset('images/Partnership.png') }}" class="img-fluid w-100 object-fit-cover" alt="Business and Organizational Purpose">
                    </div>
                    <div class="capability-card-footer p-4 bg-white">
                        <h4 class="fw-semibold mb-0">Business and Organizational Purpose</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="capability-card rounded-4 overflow-hidden position-relative">
                    <div class="capability-card-media position-relative">
                        <img src="{{ asset('images/Expanding.png') }}" class="img-fluid w-100 object-fit-cover" alt="Business Resilience">
                    </div>
                    <div class="capability-card-overlay d-flex align-items-center justify-content-center text-dark p-4">
                        <div>
                            <h4 class="fw-semibold mb-3">Business Resilience</h4>
                            <ul class="list-unstyled mb-0">
                                <li>Crisis Planning</li>
                                <li>Continuity</li>
                                <li>Risk Management</li>
                                <li>Agility</li>
                                <li>Cybersecurity</li>
                                <li>Financial Stability</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="capability-card rounded-4 overflow-hidden">
                    <div class="capability-card-media position-relative">
                        <img src="{{ asset('images/Integrity.png') }}" class="img-fluid w-100 object-fit-cover" alt="Business Transformation">
                    </div>
                    <div class="capability-card-footer p-4 bg-white">
                        <h4 class="fw-semibold mb-0">Business Transformation</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

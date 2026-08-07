@extends('layouts.app')

@section('title', 'Industries | Consultancy Company')
@section('description', 'See the industries we support with tailored advisory services.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Industries</h1>
                        <p class="mb-0 text-white">Learn how we draw on industry expertise to make companies more competitive.</p>
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
                <div class="industry-card rounded-4 overflow-hidden">
                    <img src="{{ asset('images/inds1.png') }}" class="img-fluid w-100 object-fit-cover" alt="Insurance Industry">
                    <div class="industry-card-footer p-4 bg-white">
                        <h4 class="fw-semibold mb-0">Insurance Industry</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="industry-card rounded-4 overflow-hidden position-relative">
                    <img src="{{ asset('images/inds2.png') }}" class="img-fluid w-100 object-fit-cover" alt="Aerospace and Defense">
                    <div class="industry-card-overlay d-flex align-items-center justify-content-center text-white p-4">
                        <div>
                            <h4 class="fw-semibold mb-3">Aerospace and Defense</h4>
                            <ul class="list-unstyled mb-0">
                                <li>Aviation</li>
                                <li>Defense Systems</li>
                                <li>Space</li>
                                <li>Cybersecurity</li>
                                <li>Supply Chain</li>
                                <li>Sustainability</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="industry-card rounded-4 overflow-hidden">
                    <img src="{{ asset('images/inds3.png') }}" class="img-fluid w-100 object-fit-cover" alt="Automotive Industry">
                    <div class="industry-card-footer p-4 bg-white">
                        <h4 class="fw-semibold mb-0">Automotive Industry</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="industry-card rounded-4 overflow-hidden">
                    <img src="{{ asset('images/inds4.png') }}" class="img-fluid w-100 object-fit-cover" alt="Consumer Products Industry">
                    <div class="industry-card-footer p-4 bg-white">
                        <h4 class="fw-semibold mb-0">Consumer Products Industry</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

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
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">industries</h1>
                        <p class="mb-0 text-white">Learn how we draw on industry expertise to make companies more competitive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-2">
            <div class="col-lg-6 col-md-6">
                <div class="service-item rounded-4 overflow-hidden">
                    <img src="{{ asset('images/inds1.png') }}" class="h-100 w-100 object-fit-cover" alt="">
                    <div class="srvc-cont p-3 h-100">
                            <h5 class="mb-3">Insurance Industry</h5>
                            <ul class="srvc-list fw-light">
                                <li>Life Insurance</li>
                                <li>Property and Casualty Insurance</li>
                                <li>Health Care Payers, Providers, Systems &amp; Services</li>
                                <li>Reinsurance</li>
                                <li>Bancassurance</li>
                                <li>Insurtech</li>
                                <li>Insurance Transformation</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service-item rounded-4 overflow-hidden">
                    <img src="{{ asset('images/inds2.png') }}" class="h-100 w-100 object-fit-cover" alt="">
                    <div class="srvc-cont p-3 h-100">
                            <h5 class="mb-3">Aerospace and Defense</h5>
                            <ul class="srvc-list fw-light">
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
            <div class="col-lg-6 col-md-6">
                <div class="service-item rounded-4 overflow-hidden">
                    <img src="{{ asset('images/inds3.png') }}" class="h-100 w-100 object-fit-cover" alt="">
                    <div class="srvc-cont p-3 h-100">
                            <h5 class="mb-3">Automotive Industry</h5>
                            <ul class="srvc-list fw-light">
                                <li>EVs</li>
                                <li>Autonomous Driving</li>
                                <li>Connected Mobility</li>
                                <li>Manufacturing</li>
                                <li>Aftermarket</li>
                                <li>Green Mobility</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service-item rounded-4 overflow-hidden">
                    <img src="{{ asset('images/inds4.png') }}" class="h-100 w-100 object-fit-cover" alt="">
                    <div class="srvc-cont p-3 h-100">
                            <h5 class="mb-3">Consumer Products Industry</h5>
                            <ul class="srvc-list fw-light">
                                <li>Retail</li>
                                <li>E-commerce</li>
                                <li>Branding</li>
                                <li>Supply Chain</li>
                                <li>Sustainability</li>
                                <li>Customer Insights</li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

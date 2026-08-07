@extends('layouts.app')

@section('title', 'Services | Consultancy Company')
@section('description', 'Overview of our services, and how industries differ from our capabilities offerings.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Services</h1>
                        <p class="mb-0 text-white">Bringing together sector expertise and delivery capabilities to help you solve the most important problems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="section-heading d-flex justify-content-between align-items-end mb-4 gap-3">
            <div>
                <p class="section-eyebrow mb-2">Services</p>
                <h4 class="fw-bold text-color-primary mb-0">Our Services</h4>
                <p class="mb-0">End-to-end solutions designed to accelerate performance and unlock new value across your organization.</p>
            </div>
            <a href="{{ route('about') }}" class="link-type1">Explore more <span class="ms-2"><svg width="58" height="16" viewBox="0 0 58 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M57.7071 8.70711C58.0976 8.31658 58.0976 7.68342 57.7071 7.29289L51.3431 0.928932C50.9526 0.538408 50.3195 0.538408 49.9289 0.928932C49.5384 1.31946 49.5384 1.95262 49.9289 2.34315L55.5858 8L49.9289 13.6569C49.5384 14.0474 49.5384 14.6805 49.9289 15.0711C50.3195 15.4616 50.9526 15.4616 51.3431 15.0711L57.7071 8.70711ZM0 8V9H57V8V7H0V8Z" fill="#1363DF" /></svg></span></a>
        </div>
        <div class="service-slider owl-carousel owl-theme">
            <div class="item">
                <div class="service-card rounded-4 p-4 h-100">
                    <div class="srvc-icon rounded-3 secondary-bg mb-3"><img src="{{ asset('images/icon-StrategicPlanning.svg') }}" class="img-fluid" alt="Strategic Planning"></div>
                    <h4 class="text-color-primary">Strategic Planning</h4>
                    <p class="mb-0">Develop competitive strategies that position your organization for long-term success, from market entry to digital transformation roadmaps.</p>
                </div>
            </div>
            <div class="item">
                <div class="service-card rounded-4 p-4 h-100">
                    <div class="srvc-icon rounded-3 secondary-bg mb-3"><img src="{{ asset('images/icon-Capabilities.svg') }}" class="img-fluid" alt="Capabilities"></div>
                    <h4 class="text-color-primary">Capabilities</h4>
                    <p class="mb-0">Elevate organizational performance through process redesign, technology enablement, and operational excellence programs.</p>
                </div>
            </div>
            <div class="item">
                <div class="service-card rounded-4 p-4 h-100">
                    <div class="srvc-icon rounded-3 secondary-bg mb-3"><img src="{{ asset('images/icon-HumanResources.svg') }}" class="img-fluid" alt="Human Resources"></div>
                    <h4 class="text-color-primary">Human Resources</h4>
                    <p class="mb-0">Transform your workforce with talent strategy, leadership development, change management, and culture transformation.</p>
                </div>
            </div>
            <div class="item">
                <div class="service-card rounded-4 p-4 h-100">
                    <div class="srvc-icon rounded-3 secondary-bg mb-3"><img src="{{ asset('images/icon-Finance.svg') }}" class="img-fluid" alt="Finance"></div>
                    <h4 class="text-color-primary">Finance</h4>
                    <p class="mb-0">Drive financial performance through sophisticated modeling, capital structure optimization, and M&amp;A advisory.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

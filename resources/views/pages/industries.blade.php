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
            <div class="col-lg-3 col-md-4 col-sm-6">
                @include('components.service-card', ['image' => asset('images/inds1.png'), 'title' => 'Insurance Industry', 'items' => ['Life Insurance', 'Property and Casualty Insurance', 'Health Care Payers, Providers, Systems & Services', 'Reinsurance', 'Bancassurance', 'Insurtech', 'Insurance Transformation']])
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                @include('components.service-card', ['image' => asset('images/inds2.png'), 'title' => 'Aerospace and Defense', 'items' => ['Aviation', 'Defense Systems', 'Space', 'Cybersecurity', 'Supply Chain', 'Sustainability']])
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                @include('components.service-card', ['image' => asset('images/inds3.png'), 'title' => 'Automotive Industry', 'items' => ['EVs', 'Autonomous Driving', 'Connected Mobility', 'Manufacturing', 'Aftermarket', 'Green Mobility']])
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                @include('components.service-card', ['image' => asset('images/inds4.png'), 'title' => 'Consumer Products Industry', 'items' => ['Retail', 'E-commerce', 'Branding', 'Supply Chain', 'Sustainability', 'Customer Insights']])
            </div>
        </div>
    </div>
</section>
@endsection

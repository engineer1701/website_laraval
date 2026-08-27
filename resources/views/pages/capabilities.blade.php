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
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">capabilities</h1>
                        <p class="mb-0 text-white">See how we help our clients expand their capabilities on multiple existing—and emerging—fronts.</p>
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
                @include('components.service-card', ['image' => 'https://html.reubro.com/consultancy-company/images/ai-img.jpg', 'title' => 'Artificial Intelligence', 'items' => ['Machine Learning', 'Automation', 'Data Analytics', 'NLP', 'AI Strategy', 'Ethical AI']])
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                @include('components.service-card', ['image' => 'https://html.reubro.com/consultancy-company/images/business-img.jpg', 'title' => 'Business and Organizational Purpose', 'items' => ['Vision & Mission', 'Sustainability', 'Leadership', 'Culture', 'Stakeholders', 'Impact']])
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                @include('components.service-card', ['image' => 'https://html.reubro.com/consultancy-company/images/Business-Resilience-img.jpg', 'title' => 'Business Resilience', 'items' => ['Crisis Planning', 'Continuity', 'Risk Management', 'Agility', 'Cybersecurity', 'Financial Stability']])
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                @include('components.service-card', ['image' => 'https://html.reubro.com/consultancy-company/images/Business-Transformation-img.jpg', 'title' => 'Business Transformation', 'items' => ['Digital Strategy', 'Automation', 'Customer Experience', 'Data Insights', 'Change Management', 'Agile Models']])
            </div>
        </div>
    </div>
</section>
@endsection

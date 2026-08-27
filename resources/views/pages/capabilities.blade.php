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
            <div class="col-lg-6 col-md-6">
                <div class="service-item rounded-4 overflow-hidden">
                    <img src="https://html.reubro.com/consultancy-company/images/ai-img.jpg" class="h-100 w-100 object-fit-cover" alt="">
                    <div class="srvc-cont p-3 h-100">
                            <h5 class="mb-3">Artificial Intelligence</h5>
                            <ul class="srvc-list fw-light">
                                <li>Machine Learning</li>
                                <li>Automation</li>
                                <li>Data Analytics</li>
                                <li>NLP</li>
                                <li>AI Strategy</li>
                                <li>Ethical AI</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service-item rounded-4 overflow-hidden">
                    <img src="https://html.reubro.com/consultancy-company/images/business-img.jpg" class="h-100 w-100 object-fit-cover" alt="">
                    <div class="srvc-cont p-3 h-100">
                            <h5 class="mb-3">Business and Organizational Purpose</h5>
                            <ul class="srvc-list fw-light">
                                <li>Vision &amp; Mission</li>
                                <li>Sustainability</li>
                                <li>Leadership</li>
                                <li>Culture</li>
                                <li>Stakeholders</li>
                                <li>Impact</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service-item rounded-4 overflow-hidden">
                    <img src="https://html.reubro.com/consultancy-company/images/Business-Resilience-img.jpg" class="h-100 w-100 object-fit-cover" alt="">
                    <div class="srvc-cont p-3 h-100">
                            <h5 class="mb-3">Business Resilience</h5>
                            <ul class="srvc-list fw-light">
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
            <div class="col-lg-6 col-md-6">
                <div class="service-item rounded-4 overflow-hidden">
                    <img src="https://html.reubro.com/consultancy-company/images/Business-Transformation-img.jpg" class="h-100 w-100 object-fit-cover" alt="">
                    <div class="srvc-cont p-3 h-100">
                            <h5 class="mb-3">Business Transformation</h5>
                            <ul class="srvc-list fw-light">
                                <li>Digital Strategy</li>
                                <li>Automation</li>
                                <li>Customer Experience</li>
                                <li>Data Insights</li>
                                <li>Change Management</li>
                                <li>Agile Models</li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

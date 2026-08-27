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
        <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="capability-card capability-card--ai rounded-4 overflow-hidden position-relative">
                    <div class="capability-card-front p-4">
                        <img src="https://html.reubro.com/consultancy-company/images/ai-img.jpg" class="img-fluid" alt="Artificial Intelligence">
                        <div class="capability-card-header mb-3">
                            <h4 class="fw-semibold mb-2">Artificial Intelligence</h4>
                        </div>
                    </div>
                    <div class="capability-card-hover p-4">
                        <div>
                            <h5 class="fw-semibold mb-3">Artificial Intelligence</h5>
                            <ul class="capability-hover-list mb-0">
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
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="capability-card capability-card--purpose rounded-4 overflow-hidden position-relative">
                    <div class="capability-card-front p-4">
                        <img src="https://html.reubro.com/consultancy-company/images/business-img.jpg" class="img-fluid" alt="Business and Organizational Purpose">
                        <div class="capability-card-header mb-3">
                            <h4 class="fw-semibold mb-2">Business and Organizational Purpose</h4>
                        </div>
                    </div>
                    <div class="capability-card-hover p-4">
                        <div>
                            <h5 class="fw-semibold mb-3">Business and Organizational Purpose</h5>
                            <ul class="capability-hover-list mb-0">
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
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="capability-card capability-card--resilience rounded-4 overflow-hidden position-relative">
                    <div class="capability-card-front p-4">
                        <img src="https://html.reubro.com/consultancy-company/images/Business-Resilience-img.jpg" class="img-fluid" alt="Business Resilience">
                        <div class="capability-card-header mb-3">
                            <h4 class="fw-semibold mb-2">Business Resilience</h4>
                        </div>
                    </div>
                    <div class="capability-card-hover p-4">
                        <div>
                            <h5 class="fw-semibold mb-3">Business Resilience</h5>
                            <ul class="capability-hover-list mb-0">
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
                <div class="capability-card capability-card--transformation rounded-4 overflow-hidden position-relative">
                    <div class="capability-card-front p-4">
                        <img src="https://html.reubro.com/consultancy-company/images/Business-Transformation-img.jpg" class="img-fluid" alt="Business Transformation">
                        <div class="capability-card-header mb-3">
                            <h4 class="fw-semibold mb-2">Business Transformation</h4>
                        </div>
                    </div>
                    <div class="capability-card-hover p-4">
                        <div>
                            <h5 class="fw-semibold mb-3">Business Transformation</h5>
                            <ul class="capability-hover-list mb-0">
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
    </div>
</section>
@endsection

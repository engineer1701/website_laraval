@extends('layouts.app')

@section('title', 'Testimonials | Consultancy Company')
@section('description', 'Client testimonials for Consultancy Company.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Testimonials</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <h2 class="fw-light display-5 mb-5">Validated by <br> happy customers.</h2>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="border border-secondary rounded-4 p-lg-4 p-3 h-100">
                    <img src="https://html.reubro.com/consultancy-company/images/consulting-logo-sample.png" class="test-logo img-fluid mb-4" alt="">
                    <p class="fw-light">We're incredibly grateful for the transformative impact that Consulting Company has had on our organization. Thanks to the Consulting Company team, we've seen an improvement in our workplace culture, with a heightened awareness of mental health and a collective commitment to fostering a safe and respectful environment for all. We recommend Consulting Company to any organization looking to prioritize employee well-being and create a supportive, safe &amp; respectful workplace culture.</p>
                    <strong>Sarah Davies</strong>
                    <div class="fw-light">Head of Learning &amp; Development</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="border border-secondary rounded-4 p-lg-4 p-3 h-100">
                    <img src="https://html.reubro.com/consultancy-company/images/inc-logo.png" class="test-logo img-fluid mb-4" alt="">
                    <p class="fw-light">Our experience with Consulting Company has been exceptional. From their responsive communication platform to their responsive communication. They provided valuable insights at both organizational and individual levels, with a robust assessment of our hazard exposure. The reports were clear, actionable, and highly data-driven—'easy, simple, and relevant,' taking less than five minutes to complete while downloading reports, graphs and tailored data on demand.</p>
                    <strong>Anisha Alluri</strong>
                    <div class="fw-light">Manager INC</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

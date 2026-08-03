@extends('layouts.app')

@section('title', 'FAQ | Consultancy Company')
@section('description', 'Find answers to common questions about our advisory services and working approach.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">FAQ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <h2 class="text-center fw-light display-5 mb-4">Got Questions? <br>We've got answers.</h2>
        <div class="rounded-5 grey-bg p-md-5 p-sm-4 p-3">
            <div class="row g-3 gy-4 justify-content-between">
                <div class="col-xl-4 col-lg-5">
                    <div>
                        <div class="display-6 fw-light">General</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion faq-inner d-flex flex-column gap-3 accordion accordion-flush" id="faqAccordion">
                        <div class="accordion-item border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion1" aria-expanded="false" aria-controls="faq-accordion1">What industries do you specialize in, and how do you customize your approach?</button>
                            </h2>
                            <div id="faq-accordion1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">We specialize in a broad range of industries including HR, Strategic Planning, Product Development, Financial Planning, and Mergers &amp; Acquisitions. For each client, we perform an in-depth analysis of their specific needs, industry trends, and organizational structure. Based on this, we design tailored strategies and actionable plans that align with the client’s goals, ensuring maximum impact and measurable results.</div>
                            </div>
                        </div>
                        <div class="accordion-item border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion2" aria-expanded="false" aria-controls="faq-accordion2">How long does a typical consulting engagement last, and what's the investment range?</button>
                            </h2>
                            <div id="faq-accordion2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Consulting engagements typically range from 6 weeks to 6 months depending on the project complexity and client requirements. Investment varies based on the scope of work, team involvement, and desired deliverables. We provide a transparent proposal outlining timelines, milestones, and costs to ensure clients understand the commitment and expected ROI upfront.</div>
                            </div>
                        </div>
                        <div class="accordion-item border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion3" aria-expanded="false" aria-controls="faq-accordion3">What differentiates your methodology from other consulting firms?</button>
                            </h2>
                            <div id="faq-accordion3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Our methodology combines deep industry expertise with a client-centric approach. Unlike traditional consulting, we focus on actionable strategies rather than just recommendations. We use data-driven insights, collaborative workshops, and continuous feedback loops to ensure solutions are practical, measurable, and adaptable. This ensures clients achieve both short-term wins and long-term growth.</div>
                            </div>
                        </div>
                        <div class="accordion-item border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion4" aria-expanded="false" aria-controls="faq-accordion4">How do you measure success and ensure sustainable results after the project ends?</button>
                            </h2>
                            <div id="faq-accordion4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Success is measured using predefined KPIs, client satisfaction metrics, and tangible outcomes such as revenue growth, operational efficiency, or project milestones achieved. To ensure sustainability, we provide comprehensive handover documentation, training sessions for client teams, and follow-up reviews. Our goal is to empower clients to continue implementing best practices long after the engagement concludes.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

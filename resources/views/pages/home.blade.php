@extends('layouts.app')

@section('title', 'Consultancy Company | Strategic Advisory Services')
@section('description', 'Consultancy Company helps organizations accelerate growth through strategy, operations, and transformation expertise.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-4">
            <div class="container-lg">
                <div class="row gx-xl-5 gx-lg-4 gx-3 align-items-lg-center align-items-end justify-content-between">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="display-5 fw-bold lh-1 mb-4 text-white">Transform Strategy Into Sustainable Growth</h1>
                        <p class="mb-4 text-white">Partner with industry-leading consultants who combine deep sector expertise with innovative methodologies to solve your most complex business challenges.</p>
                        <a href="{{ route('contact') }}" class="btn btn-type1 px-4 border rounded-0 text-white">Get Started</a>
                    </div>
                    <div class="col-lg-6 col-md-5 d-md-block d-none">
                        <div class="text-center">
                            <video width="100%" height="auto" autoplay loop muted>
                                <source src="{{ asset('images/home-banner-video.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-bg rounded-bottom-5 py-4">
            <div class="container">
                <div class="row g-xl-5 g-3">
                    <div class="col-lg-3">
                        <h4 class="text-white">Our <br> Impact</h4>
                        <p>Proven Track Record of Excellence - Three decades of driving measurable results for organizations across industries, from startups to Fortune 500 companies.</p>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-1 gy-3 justify-content-between lh-base">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <div class="display-4 fw-bold text-white"><span id="count1"></span>+</div>
                                    <p class="mb-0">Years of Industry Leadership Pioneering consulting excellence since 1992</p>
                                </div>
                            </div>
                            <div class="col-auto d-md-block d-none"><hr class="vr bg-white h-100"></div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <div class="display-4 fw-bold text-white"><span id="count2"></span>+</div>
                                    <p class="mb-0">Strategic Transformations Delivered across 40+ countries worldwide</p>
                                </div>
                            </div>
                            <div class="col-auto d-md-block d-none"><hr class="vr bg-white h-100"></div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <div class="display-4 fw-bold text-white"><span id="count3"></span>+</div>
                                    <p class="mb-0">Long-Term Partnerships Clients who return for ongoing engagements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">The Leadership <span class="text-color-primary">Team</span></h4>
            <a href="{{ route('team') }}" class="link-type1">Meet our people <span class="ms-3"><svg width="58" height="16" viewBox="0 0 58 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M57.7071 8.70711C58.0976 8.31658 58.0976 7.68342 57.7071 7.29289L51.3431 0.928932C50.9526 0.538408 50.3195 0.538408 49.9289 0.928932C49.5384 1.31946 49.5384 1.95262 49.9289 2.34315L55.5858 8L49.9289 13.6569C49.5384 14.0474 49.5384 14.6805 49.9289 15.0711C50.3195 15.4616 50.9526 15.4616 51.3431 15.0711L57.7071 8.70711ZM0 8V9H57V8V7H0V8Z" fill="#1363DF" /></svg></span></a>
        </div>
        <div class="team-slider owl-carousel owl-theme">
            @forelse($teamMembers as $member)
                <div class="item">
                    <div class="team-card rounded-4 position-relative">
                        <img src="{{ asset($member->photo ?? 'images/team-img2.jpg') }}" class="h-100 object-fit-cover" alt="{{ $member->name }}">
                        <a href="{{ route('team.member', $member) }}" class="team-info-link p-xxl-4 p-xl-3 p-md-2 p-3">
                            <span><h5>{{ $member->name }}</h5><small>{{ $member->title }}</small></span>
                            <span class="link-icon"></span>
                        </a>
                    </div>
                </div>
            @empty
                <div class="item">
                    <div class="team-card rounded-4 position-relative">
                        <img src="{{ asset('images/team-img2.jpg') }}" class="h-100 object-fit-cover" alt="Team member">
                        <div class="team-info-link p-4">
                            <span><h5>Consulting Team</h5><small>Leadership & Strategy</small></span>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
<section class="py-5" id="services">
    <div class="container-lg">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-bold text-color-primary mb-0">Our Services</h4>
                <p class="mb-0">End-to-end solutions designed to accelerate performance and unlock new value across your organization.</p>
            </div>
            <a href="{{ route('about') }}" class="link-type1">Explore more <span class="ms-3"><svg width="58" height="16" viewBox="0 0 58 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M57.7071 8.70711C58.0976 8.31658 58.0976 7.68342 57.7071 7.29289L51.3431 0.928932C50.9526 0.538408 50.3195 0.538408 49.9289 0.928932C49.5384 1.31946 49.5384 1.95262 49.9289 2.34315L55.5858 8L49.9289 13.6569C49.5384 14.0474 49.5384 14.6805 49.9289 15.0711C50.3195 15.4616 50.9526 15.4616 51.3431 15.0711L57.7071 8.70711ZM0 8V9H57V8V7H0V8Z" fill="#1363DF" /></svg></span></a>
        </div>
        <div class="service-slider owl-carousel owl-theme">
            <div class="item">
                <div class="service-card">
                    <div class="srvc-icon rounded-3 secondary-bg mb-2"><img src="{{ asset('images/icon-Finance.svg') }}" class="img-fluid" alt="Finance"></div>
                    <h4 class="text-color-primary">Finance</h4>
                    <p>Drive financial performance through sophisticated modeling, capital structure optimization, and M&amp;A advisory.</p>
                </div>
            </div>
            <div class="item">
                <div class="service-card">
                    <div class="srvc-icon rounded-3 secondary-bg mb-2"><img src="{{ asset('images/icon-StrategicPlanning.svg') }}" class="img-fluid" alt="Strategic Planning"></div>
                    <h4 class="text-color-primary">Strategic Planning</h4>
                    <p>Develop competitive strategies that position your organization for long-term success.</p>
                </div>
            </div>
            <div class="item">
                <div class="service-card">
                    <div class="srvc-icon rounded-3 secondary-bg mb-2"><img src="{{ asset('images/icon-Capabilities.svg') }}" class="img-fluid" alt="Capabilities"></div>
                    <h4 class="text-color-primary">Capabilities</h4>
                    <p>Elevate organizational performance through process redesign, technology enablement, and operational excellence programs.</p>
                </div>
            </div>
            <div class="item">
                <div class="service-card">
                    <div class="srvc-icon rounded-3 secondary-bg mb-2"><img src="{{ asset('images/icon-HumanResources.svg') }}" class="img-fluid" alt="Human Resources"></div>
                    <h4 class="text-color-primary">Human Resources</h4>
                    <p>Transform your workforce into a competitive advantage with talent strategy, leadership development, and culture transformation.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="px-xl-5 px-3">
        <div class="grey-bg rounded-5 py-md-y py-5">
            <div class="container-lg">
                <div class="row g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-5 d-md-block d-none">
                        <img src="{{ asset('images/approach-bg.png') }}" class="img-fluid" alt="Our Approach">
                    </div>
                    <div class="col-md-6">
                        <h2 class="display-5 fw-bold">Our Approach</h2>
                        <h3 class="fs-2 fw-bold text-color-secondary">We collaborate, analyze, and transform.</h3>
                        <p class="fs-4 mb-0">Every engagement begins with deep listening and rigorous analysis. We work shoulder-to-shoulder with your teams, combining external perspective with internal knowledge to design solutions that stick.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="mb-4">
            <h4 class="fw-bold text-color-primary mb-0">News and Updates</h4>
            <p class="mb-0">Explore our recent announcements, success stories, and expert analysis on the trends reshaping business strategy, leadership, and organizational effectiveness.</p>
        </div>
        <div class="news-slider owl-carousel owl-theme">
            @forelse($articles as $article)
                <div class="item">
                    <div class="news-card rounded-5 p-3 pb-4 h-100">
                        <div class="news-featured-img rounded-4 mb-4">
                            <img src="{{ asset($article->image ?? 'images/news-img1.jpg') }}" class="object-fit-cover h-100 w-100" alt="{{ $article->title }}">
                        </div>
                        <small class="rounded-pill light-bg p-1 px-3">NEWS &amp; UPDATES</small>
                        <a href="{{ route('article', $article) }}" class="fs-5 fw-normal d-block my-4">{{ $article->title }}</a>
                        <p class="fw-light mb-3">{{ $article->excerpt }}</p>
                        <small class="text-color-primary">{{ $article->published_at ? $article->published_at->format('M d, Y') : 'Published recently' }}</small>
                    </div>
                </div>
            @empty
                <div class="item">
                    <div class="news-card rounded-5 p-3 pb-4">
                        <div class="news-featured-img rounded-4 mb-4">
                            <img src="{{ asset('images/news-img1.jpg') }}" class="object-fit-cover h-100 w-100" alt="News">
                        </div>
                        <small class="rounded-pill light-bg p-1 px-3">NEWS &amp; UPDATES</small>
                        <a href="{{ route('news') }}" class="fs-5 fw-normal d-block my-4">No articles are available right now. Check back soon.</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-3 gy-4 justify-content-between">
            <div class="col-xl-4 col-lg-5">
                <h2>
                    <div class="display-4 fw-medium">Frequently</div>
                    <div class="display-6 fw-medium">asked questions.</div>
                    <div class="fs-5">See all FAQs</div>
                </h2>
            </div>
            <div class="col-lg-6">
                <div class="faq-accordion d-flex flex-column gap-3 accordion accordion-flush" id="faqAccordion">
                    <div class="accordion-item border">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion1" aria-expanded="false" aria-controls="faq-accordion1">What industries do you specialize in, and how do you customize your approach?</button>
                        </h2>
                        <div id="faq-accordion1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">We specialize in HR, Strategic Planning, Product Development, Financial Planning, and M&amp;A advisory. For each client, we tailor strategies based on industry trends and organizational goals to ensure measurable outcomes.</div>
                        </div>
                    </div>
                    <div class="accordion-item border">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion2" aria-expanded="false" aria-controls="faq-accordion2">How long does a typical consulting engagement last, and what is the investment range?</button>
                        </h2>
                        <div id="faq-accordion2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Engagements typically range from 6 weeks to 6 months depending on project complexity and client requirements. We provide a transparent proposal with timelines, milestones, and expected ROI.</div>
                        </div>
                    </div>
                    <div class="accordion-item border">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion3" aria-expanded="false" aria-controls="faq-accordion3">What differentiates your methodology from other consulting firms?</button>
                        </h2>
                        <div id="faq-accordion3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Our methodology combines deep industry expertise with a client-centric approach. We focus on actionable strategies, continuous feedback, and implementation support that drives lasting impact.</div>
                        </div>
                    </div>
                    <div class="accordion-item border">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion4" aria-expanded="false" aria-controls="faq-accordion4">How do you measure success and ensure sustainable results after the project ends?</button>
                        </h2>
                        <div id="faq-accordion4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Success is measured using predefined KPIs, client satisfaction metrics, and tangible outcomes. We provide handover documentation, training, and follow-up reviews to support long-term adoption.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

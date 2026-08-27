@extends('layouts.app')

@section('title', 'Career Details | Consultancy Company')
@section('description', 'Review the details of an open position at Consultancy Company.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Careers</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-4">
            <div class="col-lg-8">
                <h2 class="fw-semibold mb-3">{{ $career->title }}</h2>
                <p class="text-color-primary fw-semibold">Job No. R00251687 | Multiple Locations {{ $career->location ?: 'Various locations' }} | Full time | Senior Level</p>
                <h4 class="mt-4">Full job description</h4>
                <h5 class="mt-4">Job Responsibilities:</h5>
                <ul>
                    <li>Manage the migration processing for various countries especially Australia, UK-Visit Visa , Schengen Visa and USA.</li>
                    <li>Coordinate a team of consultants to ensure efficient workflow and client satisfaction.</li>
                    <li>Provide expert advice and guidance to clients regarding migration procedures, requirements, and options.</li>
                    <li>Conduct comprehensive assessments of clients' eligibility for various migration programs.</li>
                    <li>Maintain up-to-date knowledge of immigration laws, policies, and procedures for different countries.</li>
                    <li>Handle complex immigration cases and resolve any issues or challenges that may arise.</li>
                </ul>
                <h5 class="mt-4">Qualifications and Experience:</h5>
                <ul>
                    <li>Minimum of 1 year of experience as a migration Consultant.</li>
                    <li>Strong knowledge of immigration laws, regulations, and procedures for various countries.</li>
                    <li>Knowledge about visa processing of various countries</li>
                    <li>Excellent communication and interpersonal skills.</li>
                    <li>Proficiency in Malayalam and English is essential.</li>
                    <li>Bachelor's degree in any field is preferred.</li>
                </ul>
                <h5 class="mt-4">Job Type: Full-time</h5>
                <p>Pay: ₹22,000.00 - ₹25,000.00 per month</p>
                <h5 class="mt-4">Benefits:</h5>
                <ul><li>Cell phone reimbursement</li><li>Health insurance</li><li>Paid sick time</li><li>Paid time off</li></ul>
                <h5 class="mt-4">Ability to commute/relocate:</h5>
                <p>Kochi, Kerala: Reliably commute or planning to relocate before starting work (Required)</p>
                <h5 class="mt-4">Education:</h5><p>Bachelor's (Required)</p>
                <h5 class="mt-4">Experience:</h5><p>Migration Consultant: 1 year (Required)</p>
                <p>Work Location: In person</p>
            </div>
            <div class="col-lg-4">
                <div class="border rounded-4 p-4">
                    <a href="mailto:hrd@reubro.com" class="btn btn-type1 rounded-pill px-4">Apply for this job</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

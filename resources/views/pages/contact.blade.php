@extends('layouts.app')

@section('title', 'Contact Us | Consultancy Company')
@section('description', 'Get in touch with Consultancy Company for strategic advisory support and enquiries.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">We're here to help.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <h3 class="text-center fw-light mb-4">Reach out to us for any inquiries or support</h3>
        <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap mb-5">
            <a href="mailto:hello@incheq.co" class="btn btn-type1 rounded-pill fw-light p-2 px-4">hello@incheq.co</a>
            <a href="tel:1300 400 290" class="btn btn-type1 rounded-pill fw-light p-2 px-4">1300 400 290</a>
        </div>
        <div class="rounded-5 grey-bg p-md-5 p-sm-4 p-3 pt-5">
            <div class="row g-3 gy-4 justify-content-center">
                <div class="col-xl-10">
                    <h3 class="fw-light mb-4">Your details</h3>
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6"><div class="form-floating mb-3"><input type="text" name="first_name" class="form-control bg-transparent rounded-0 border-0 border-bottom border-black px-0 shadow-none" id="first_name" placeholder="First name" required><label for="first_name" class="text-black fw-light px-0">First name</label></div></div>
                            <div class="col-sm-6"><div class="form-floating mb-3"><input type="text" name="last_name" class="form-control bg-transparent rounded-0 border-0 border-bottom border-black px-0 shadow-none" id="last_name" placeholder="Last name" required><label for="last_name" class="text-black fw-light px-0">Last name</label></div></div>
                            <div class="col-sm-6"><div class="form-floating mb-3"><input type="text" name="company" class="form-control bg-transparent rounded-0 border-0 border-bottom border-black px-0 shadow-none" id="company" placeholder="Company" required><label for="company" class="text-black fw-light px-0">Company</label></div></div>
                            <div class="col-sm-6"><div class="form-floating mb-3"><input type="text" name="country" class="form-control bg-transparent rounded-0 border-0 border-bottom border-black px-0 shadow-none" id="country" placeholder="Country" required><label for="country" class="text-black fw-light px-0">Country</label></div></div>
                            <div class="col-sm-6"><div class="form-floating mb-3"><input type="email" name="email" class="form-control bg-transparent rounded-0 border-0 border-bottom border-black px-0 shadow-none" id="email" placeholder="Email" required><label for="email" class="text-black fw-light px-0">Email</label></div></div>
                            <div class="col-sm-6"><div class="form-floating mb-3"><input type="tel" name="phone" class="form-control bg-transparent rounded-0 border-0 border-bottom border-black px-0 shadow-none" id="phone" placeholder="Phone Number" required><label for="phone" class="text-black fw-light px-0">Phone Number</label></div></div>
                            <div class="col-12"><div class="form-floating"><textarea name="message" class="form-control bg-transparent rounded-0 border-0 border-bottom border-black px-0 shadow-none" placeholder="How can we assist you?" id="message" style="height: 100px"></textarea><label for="message" class="text-black fw-light bg-transparent px-0">How can we assist you?</label></div></div>
                            <div class="col-12"><p class="mt-4 small fw-light mb-4">We value the opportunity to connect with you. Please submit your inquiries and feedback, and our experienced professionals are ready to assist you.</p></div>
                            <div class="col-12"><button type="submit" class="btn btn-type2 rounded-pill fw-light p-2 px-5">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

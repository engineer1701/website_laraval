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
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Industries</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <p class="mb-4">We work across a broad range of markets, combining deep sector insight with hands-on execution support to help organizations unlock growth and resilience.</p>
        <div class="row g-4">
            @foreach($industries as $industry)
                <div class="col-lg-4 col-md-6">
                    <div class="border rounded-4 p-4 h-100">
                        <h4 class="fw-semibold">{{ $industry->title }}</h4>
                        <p>{{ $industry->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

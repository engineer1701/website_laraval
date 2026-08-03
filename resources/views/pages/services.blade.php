@extends('layouts.app')

@section('title', 'Services | Consultancy Company')
@section('description', 'Overview of our services, and how industries differ from our capabilities offerings.')

@section('content')
<section>
    <div class="px-xl-5 px-3">
        <div class="primary-bg rounded-top-5 py-5">
            <div class="container-lg">
                <div class="inner-page-panner row gx-xl-5 gx-lg-4 gx-3 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Services</h1>
                        <p class="mb-0 text-white">Bringing together sector expertise and delivery capabilities to help you solve the most important problems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="fw-normal mb-3">How we structure our work</h2>
                <p class="mb-4">We separate our client work into two complementary areas: <strong>Industries</strong> — where we bring deep sector insight and relationships, and <strong>Capabilities</strong> — the functional expertise and delivery approaches we apply across sectors. This approach lets us combine contextual understanding with repeatable, proven methods to drive faster results.</p>
            </div>
        </div>
        <div class="row g-4">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="border rounded-4 p-4 h-100">
                        <h4 class="fw-semibold">{{ $service->title }}</h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

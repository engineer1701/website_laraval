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
            @forelse($capabilities as $capability)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    @include('components.service-card', [
                        'image' => asset($capability->image ?: 'images/Value-Delivered.png'),
                        'title' => $capability->title,
                        'description' => $capability->description,
                    ])
                </div>
            @empty
                <p class="mb-0">Capability information will be available soon.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection

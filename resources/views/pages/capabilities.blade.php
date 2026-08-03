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
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">Capabilities</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <p class="mb-4">Our capabilities span advisory, design, and delivery, allowing us to support organizations at every step of a transformation journey.</p>
        <div class="row g-4">
            @foreach($capabilities as $capability)
                <div class="col-lg-4 col-md-6">
                    <div class="border rounded-4 p-4 h-100">
                        <h4 class="fw-semibold">{{ $capability->title }}</h4>
                        <p>{{ $capability->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

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
                        <h1 class="display-5 fw-normal lh-1 mb-0 text-white">industries</h1>
                        <p class="mb-0 text-white">Learn how we draw on industry expertise to make companies more competitive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-lg">
        <div class="row g-2">
            @forelse($industries as $industry)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    @include('components.service-card', [
                        'image' => asset($industry->image ?: 'images/inds1.png'),
                        'title' => $industry->title,
                        'description' => $industry->description,
                    ])
                </div>
            @empty
                <p class="mb-0">Industry information will be available soon.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection

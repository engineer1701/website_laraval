<div class="service-item rounded-4 overflow-hidden">
    <img src="{{ $image }}" class="h-100 w-100 object-fit-cover" alt="">
    <div class="srvc-cont p-3 h-100">
        <h5 class="mb-3">{{ $title }}</h5>
        <ul class="srvc-list fw-light">
            @foreach ($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
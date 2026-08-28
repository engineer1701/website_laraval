<div class="service-item rounded-4 overflow-hidden">
    @if($image)
        <img src="{{ $image }}" class="h-100 w-100 object-fit-cover" alt="">
    @endif
    <div class="srvc-cont p-3 h-100">
        <h5 class="mb-3">{{ $title }}</h5>
        @php($descriptionItems = !empty($description) ? preg_split('/\r\n|\r|\n/', $description, -1, PREG_SPLIT_NO_EMPTY) : [])
        @if (!empty($items))
            <ul class="srvc-list fw-light">
                @foreach ($items as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @elseif (count($descriptionItems) > 1)
            <ul class="srvc-list fw-light">
                @foreach ($descriptionItems as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p class="fw-light mb-0">{{ $description }}</p>
        @endif
    </div>
</div>
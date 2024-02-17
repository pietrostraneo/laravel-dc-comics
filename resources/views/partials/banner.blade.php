<div class="banner">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($banner as $item)
                <div class="col-2 d-flex align-items-center gap-1">
                    <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['text'] }}">
                    <span>{{ $item['text'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

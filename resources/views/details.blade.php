@extends('layout.app')

@section('content')
    <div class="jumbo">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
    <div class="blueline"></div>

    <div class="top-content">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="d-flex gap-5 align-items-center justify-content-between">
                        <h2>{{ $comic['title'] }}</h2>
                        <div class="d-flex gap-4">
                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"><button
                                    class="btn btn-warning btn-sm">EDIT</button></a>

                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </div>
                    </div>
                    <div class="price mt-3 d-flex justify-content-between align-items-center">
                        <p>U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></p>
                        <div class="available d-flex gap-3 align-items-center">
                            <p>AVAILABLE</p>
                            <p class="text-white">Check Availability</p>
                        </div>
                    </div>
                    <div class="description mt-3">
                        <p>{{ $comic['description'] }}</p>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <h5>ADVERTISEMENT</h5>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-content">
        <div class="container-fluid">
            <div class="row padding-80">

                <div class="col-6">
                    <h5>Talent</h5>
                    <div class="d-flex justify-content-between border-top mt-3 p-3">
                        <p>Art by:</p>
                        <p class=" w-75 text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui a quae
                            excepturi
                            minima magnam quasi
                            deleniti. Quas iusto eos inventore, laborum at, error beatae, totam velit harum voluptate dolor
                            nam.</p>
                    </div>
                    <div class="d-flex justify-content-between border-top border-bottom p-3">
                        <p>Written by:</p>
                        <p class="w-75 text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus
                            rerum, ducimus
                            eligendi
                            aliquid asperiores tempora ut eos expedita? Possimus laudantium iste amet maiores voluptatem
                            explicabo quis deleniti porro fugiat itaque.</p>
                    </div>
                </div>

                <div class="col-6 justify-content-center">
                    <h5>Specs</h5>
                    <div class="d-flex justify-content-between border-top mt-3 p-3">
                        <p>Series:</p>
                        <p class="text-primary">{{ $comic['series'] }}</p>
                    </div>
                    <div class="d-flex justify-content-between border-top p-3">
                        <p>U.S. Price:</p>
                        <p>{{ $comic['price'] }}</p>
                    </div>
                    <div class="d-flex justify-content-between border-top border-bottom p-3">
                        <p>On Sale Date:</p>
                        <p>{{ $comic['sale_date'] }}</p>
                    </div>
                </div>

            </div>

            <div class="row d-flex justify-content-center">
                <div class="detail-banner d-flex justify-content-center">
                    @foreach ($banner as $item)
                        <div class="col-2 d-flex align-items-center gap-1 single-banner justify-content-center">
                            <span>{{ $item['text'] }}</span>
                            <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['text'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.app')

@section('content')
    <div class="jumbo">
        <h5>HOMEPAGE</h5>
    </div>
    <div class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Welcome on DC Official Website!</h1>
                    <a href="/comics">
                        <button class="btn btn-primary mt-4">SHOW COMICS</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('partials.banner')
@endsection

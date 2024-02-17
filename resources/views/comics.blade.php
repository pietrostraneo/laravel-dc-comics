@extends('layout.app')

@section('content')
    @include('partials.jumbo')

    <div class="comics">
        @include('partials.series')
    </div>

    @include('partials.banner')
@endsection

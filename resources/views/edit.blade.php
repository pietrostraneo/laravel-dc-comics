@extends('layout.app')

@section('content')
    <div class="jumbo">
        <h5>EDIT {{ $comic->title }}</h5>
    </div>

    <div class="comics">
        @include('partials.editcomic')
    </div>

    @include('partials.banner')
@endsection

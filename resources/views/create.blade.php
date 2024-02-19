@extends('layout.app')

@section('content')
    <div class="jumbo">
        <h5>ADD NEW COMIC</h5>
    </div>

    <div class="comics">
        @include('partials.newcomic')
    </div>

    @include('partials.banner')
@endsection

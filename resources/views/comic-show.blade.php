@extends('layouts.app')

@section('content')

{{-- SEZIONE COVER FUMETTO --}}

    <div id="blue-section">
        <div class="container cover-container">
            <img class="cover" src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>

{{-- DETTAGLI FUMETTO --}}
    @include('partials.comicDetails')
{{-- SEZIONE INFORMAZIONI FUMETTO --}}
    @include('partials.comicInfo')
@endsection
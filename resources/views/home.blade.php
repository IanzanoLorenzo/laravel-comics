@extends('layouts.app')

@section('content')
    <div class="content" style="min-height: 200px;">
        <div class="container position-relative py-5">
        <div class="current-series text-format">
            current-series
        </div>
        <div class="row">

            <div class="col-12 d-flex justify-content-center row">
                @foreach ($comics as $id => $comic)
                <div class="col-2">
                    <a href="{{ route('comics.show', $id) }}">
                        <img class="cover-comic" src="{{ $comic['thumb'] }}" alt="">
                        <h5>{{ $comic['title'] }}</h5>
                    </a>
                </div>
                @endforeach
                <button class="blue-button text-format col-4">
                    load more
                </button>
            </div>
        </div>
        </div>
    </div>
@endsection
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
                    <img class="cover-comic" src="{{ $comic['thumb'] }}" alt="">
                    <a href="{{ route('comic', $id) }}"><h5>{{ $comic['title'] }}</h5></a>
                </div>
                @endforeach
                <button class="blue-button text-format col-4">
                    load more
                </button>
            </div>
        </div>
        </div>
    </div>
    <div id="blue-section">
        <div class="container">
            <ul class="row d-flex py-5 justify-content-between">
                @foreach($sectionBlue as $section)
                <li class="col-2 d-flex align-items-center">
                    <img class="me-2 blue-section-image" src="{{ Vite::asset($section['sectionImage']) }}" alt="">
                    <a href=""><h6>{{ $section['sectionName'] }}</h6></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
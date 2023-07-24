@extends('layouts.app')

@section('content')
    <div id="blue-section">
        <div class="container cover-container">
            <img class="cover" src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>
    <div id="comic-details">
        <div class="container p-5">

        </div>
    </div>
    <div id="comic-info">
        <div class="container">

        </div>
    </div>
@endsection
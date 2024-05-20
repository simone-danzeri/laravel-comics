@extends('layouts.app')
@include('partials.header')
@include('partials.jumbotron')
@section('content')
<div class="comics-wrapper">
    <div class="container">
        <div class="comics-list d-flex flex-wrap">
            @foreach ($comics as $eachComic)
                {{-- Singolo fumetto --}}
                <div class="comic">
                    <img src="{{ $eachComic['thumb'] }}" alt="">
                    <p class="text-center">{{ $eachComic['title'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

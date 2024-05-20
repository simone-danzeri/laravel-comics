@extends('layouts.app')
@include('partials.header')
@section('content')
<div class="ms-home">
    <div class="text-center">
        <span>
            Looking for something to read? Try our new <a href="{{ route('comics') }}">COMICS</a> section!
        </span>
    </div>
</div>
@endsection

@extends('layouts/main')

@section('title')
{{ $object ? $object['name'] : '404 Object not found' }}
@endsection

@section('head')
<link rel="stylesheet" href="/css/objects/show.css">
@endsection

@section('content')

@if(!$object)
    <h1>404 Object not found</h1>
    <a href='/objects'>Check out the other objects in our library...</a>
@else
    @if ( ! session('hideInfo') )
        <h1>{{ $object['name'] }}</h1>
    @else
        <span class="show-me btn btn-info" tabindex="0">Show object name</span>
        <h1 class="hidden-by-default">{{ $object['name'] }}</h1>
    @endif
    <div class="container">
        <div class="row">
            <div class="card">
                <img data-src="{{ $object['cover_url'] }}" alt="{{ $object['name'] }}" style="height: 280px; width: 100%; display: block;" src="{{ $object['cover_url'] }}" data-holder-rendered="true">

                @if ( ! session('hideInfo') )
                    <p class="card-text">{{ $object['description'] }}</p>
                @else
                    <span class="show-me btn btn-info" tabindex="0">Show object description</span>
                    <p class="hidden-by-default">{{ $object['description'] }}</p>
                @endif

            </div>
        </div>
    </div>
@endif

@endsection

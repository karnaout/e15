@extends('layouts/main')

@section('title')
All Objects - RandomObjects
@endsection

@section('head')
<link rel="stylesheet" href="/css/objects/objects.css">
@endsection

@section('content')

<h1>This is where all your objects are</h1>

@if(count( $objects ) == 0 )
No books have been added yet
@else

<div id="objects">
    @foreach($objects as $slug => $object)
     <a class='object' href='/objects/{{ $slug }}'>
        <h3>{{ $object['name'] }}</h3>
    </a>
    @endforeach
</div>

@endif

@endsection

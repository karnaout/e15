@extends('layouts/main')

@section('title')
{{ Auth::user()->name }} - FlashCards
@endsection

@section('head')
<link rel="stylesheet" href="/css/pages/profile.css">
@endsection

@section('content')
@if( ! Auth::user() )
    @php
        header("Location: " . URL::to('/login'), true, 302);
        exit();
    @endphp
@endif

<div class="wrapper">
    <h1>{{ Auth::user()->name }}</h1>
</div>


@endsection

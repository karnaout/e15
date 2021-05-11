@extends('layouts/main')

@section('title')
404 - RandomObjects
@endsection

@section('head')
@endsection

@section('content')

<h1 dusk='not-found-heading'>404 @if(session('missing-item-message')) {{ session('missing-item-message') }} @else PAGE NOT FOUND @endif </h1>
<p>Please check that you typed the address correctly. You can also use one of the links below to navigate to your desired page.</p>
<p class="lead">
    <a href="/decks" class="btn btn-lg btn-secondary">View Decks</a>
    <a href="/cards" class="btn btn-lg btn-secondary">View Cards</a>
    <a href="/" class="btn btn-lg btn-secondary">Study</a>
</p>

@endsection

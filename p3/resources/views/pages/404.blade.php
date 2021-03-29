@extends('layouts/main')

@section('title')
404 - RandomObjects
@endsection

@section('head')
@endsection

@section('content')

<h1>404 PAGE NOT FOUND</h1>
<p>Please check that you typed the address correctly. You can also use one of the links below to navigate to their respective pages.</p>
<p class="lead">
    <a href="/decks" class="btn btn-lg btn-secondary">View Decks</a>
    <a href="/cards" class="btn btn-lg btn-secondary">View Cards</a>
    <a href="/" class="btn btn-lg btn-secondary">Study</a>
</p>

@endsection

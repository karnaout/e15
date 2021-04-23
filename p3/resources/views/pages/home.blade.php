@extends('layouts/main')

@section('title')
Home - FlashCards
@endsection

@section('head')
<link rel="stylesheet" href="/css/pages/home.css">
@endsection

@section('content')
@if(Auth::user())
<div class="user-dashboard">
    <h3>
        Welcome back {{ Auth::user()->name }}!
    </h3>
</div>
@endif


<h1>FlashCards</h1>
<p class="lead">
Welcome to FlashCards! You can learn more about Flashcards and why and how they work by visiting the <a target="_blank" href="https://en.wikipedia.org/wiki/Flashcard">Wikipedia Flashcard page</a>.
</p>
<p class="lead">
    <a href="/decks" class="btn btn-lg btn-secondary">View Decks</a>
    <a href="/cards" class="btn btn-lg btn-secondary">View Cards</a>
    <a href="/study" class="btn btn-lg btn-secondary">Study</a>
</p>

@endsection

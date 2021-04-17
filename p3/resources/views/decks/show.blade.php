@extends('layouts/main')

@section('title')
{{ $deck ? $deck->name : 'deck not found' }} - FlashCards
@endsection

@section('head')
@endsection

@section('content')

@if(!$deck)
    @php
        header("Location: " . URL::to('/404'), true, 302);
        exit();
    @endphp
@else

<h1>{{ $deck['name'] }}</h1>

<p class='description'>
    {{ $deck['description'] }}
</p>

<p class="lead">
    <a href="/decks/{{ $deck->slug}}/edit" class="btn btn-lg btn-secondary">Edit Deck</a>
    <a href="/study" class="btn btn-lg btn-secondary">Study Deck</a>
    <a href="/decks" class="btn btn-lg btn-secondary">Other Decks</a>
</p>

@endif

@endsection

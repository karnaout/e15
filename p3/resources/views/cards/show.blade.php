@extends('layouts/main')

@section('title')
{{ $card ? $card->question : 'card not found' }} - FlashCards
@endsection

@section('head')
<link rel="stylesheet" href="/css/cards.css">
@endsection

@section('content')

@if( !$card )
    @php
        header("Location: " . URL::to('/404'), true, 302);
        exit();
    @endphp
@else

@if( $card->cover_url )
    <div class="cover">
        <img src='{{ $card->cover_url }}' alt='Cover photo for {{ $card->cover_url }}'>
    </div>
@endif
<h1>{{ $card['answer'] }}</h1>

<p class='question'>
    {{ $card['question'] }}
</p>

<p class="lead">
    <a href="/cards/{{ $card->slug }}/edit" class="btn btn-lg btn-secondary">Edit Card</a>
    <a href="/study" class="btn btn-lg btn-secondary">Study</a>
    <a href="/cards" class="btn btn-lg btn-secondary">Other Cards</a>
</p>

@endif

@endsection

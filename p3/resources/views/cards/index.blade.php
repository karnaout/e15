@extends('layouts/main')

@section('title')
Cards - FlashCards
@endsection

@section('head')
<link rel="stylesheet" href="/css/cards.css">
@endsection

@section('content')
<h1 dusk='cards'>Cards</h1>

@if( $cards->count() == 0 )
No cards have been added yet

@else

<div class="row">
@foreach($cards as $card)
     <div class="card col-md-5 m-2 py-2" style="">
        <img data-src="{{ $card->cover_url }}" alt="{{ $card->question }}" src="{{ $card->cover_url }}" class="card-img-top">
        <div class="card-body">
            <p class="card-title text-primary">{{ $card->answer }}</p>
            <p class="text-dark">{{ $card->question }}</p>
            <a href="/cards/{{ $card->slug }}" class="btn btn-primary">Manage card</a>
        </div>
    </div>
@endforeach
</div>

@endif

@endsection

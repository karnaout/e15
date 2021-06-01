@extends('layouts/main')

@section('title')
Study - FlashCards
@endsection

@section('head')
@endsection

@section('content')

<h1>Guess Proposition</h1>
<p class="lead">
Select the game or exercise you would like to play
</p>
<div class="row">
    <div class="card col-md-5 position-relative m-3 pb-3">
        <img class="card-img-top" src="images/memorize-cards.jpg" alt="Memorize cards">
        <div class="card-body">
            <h5 class="card-title text-dark">Memorize Cards</h5>
            <p class="card-text text-dark">Memorize Cards uses a method known as  <strong>Spaced repetition</strong> to help you memorize your selected cards</p>
            <a href="/memorize-cards" class="btn btn-primary position-absolute fixed-bottom">Play Memorize Cards</a>
        </div>
    </div>
    <div class="card col-md-5 m-3 position-relative m-3 pb-3">
        <img class="card-img-top" src="images/trivia.jpg" alt="Memorize cards">
        <div class="card-body">
            <h5 class="card-title text-dark">Trivia</h5>
            <p class="card-text text-dark">Guess the name of the person, city or object in the photo</p>
            <a href="/trivia" class="btn btn-primary position-absolute fixed-bottom">Play Trivia</a>
        </div>
    </div>
</div>


@endsection

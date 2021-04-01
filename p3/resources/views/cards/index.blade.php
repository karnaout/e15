@extends('layouts/main')

@section('title')
Cards - FlashCards
@endsection

@section('head')
@endsection

@section('content')
<h1>Cards</h1>

@if(count( $cards ) == 0 )
No cards have been added yet

@else

<div class="row">
@foreach($cards as $slug => $card)
     <div class="card col-md-5 m-2 py-2" style="">
        <img data-src="{{ $card['cover_url'] }}" alt="{{ $card['question'] }}" src="{{ $card['cover_url'] }}" class="card-img-top">
        <div class="card-body">
            <p class="card-title text-primary">{{ $card['answer'] }}</p>
            <p class="text-dark">{{ $card['question'] }}</p>

            @if(count( $card['categories'] ) != 0 )
                <p class="categories text-dark">
                @foreach($card['categories'] as $category)
                <span class="mr-1">{{ $category }}</span>
                @endforeach
                </p>
            @endif

            <a href="#" class="btn btn-primary">Edit card</a>
        </div>
    </div>
@endforeach
</div>

@endif

@endsection

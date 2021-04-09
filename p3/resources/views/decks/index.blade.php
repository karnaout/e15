@extends('layouts/main')

@section('title')
Decks - FlashCards
@endsection

@section('head')
@endsection

@section('content')

<h1>Decks</h1>
@if( $decks->count() == 0 )
No decks have been added yet

@else

<div class="row">
@foreach($decks as $deck)
     <div class="card col-md-5 m-2 py-2" style="">
        <div class="card-body">
            <p class="card-title text-primary">{{ $deck->name }}</p>
            <p class="text-dark">{{ $deck->description }}</p>
            {{-- @if(count( $deck['categories'] ) != 0 )
                <p class="categories text-dark">
                @foreach($deck['categories'] as $category)
                <span class="mr-1">{{ $category }}</span>
                @endforeach
                </p>
            @endif --}}

            <a href="#" class="btn btn-primary">Edit deck</a>
        </div>
    </div>
@endforeach
</div>

@endif

@endsection

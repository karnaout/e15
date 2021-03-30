@extends('layouts/main')

@section('title')
New card - FlashCards
@endsection

@section('head')
<link rel="stylesheet" href="/css/cards.css">
@endsection

@section('content')

<h1>New card</h1>
<p>Create a new card to study later.</p>

<hr>
<form method='POST' action='/cards'>
    {{ csrf_field() }}

    <fieldset>
        <label for='question'>Question [Required]</label>
        <input type='text' name='question' id='question' value="{{ old("question") }}">
    </fieldset>

    <fieldset>
        <label for='answer'>Answer [Required]</label>
        <input type='text' name='answer' id='answer' value="{{ old("answer") }}">
    </fieldset>

    <fieldset>
        <label for="type">Category:</label>
            <select name="type" id="type">
                @if ( old('type') == 'a' )
                    <option value="a" selected>Category A</option>
                @else
                    <option value="a">Category A</option>
                @endif

                @if ( old('type') == 'b' )
                    <option value="b" selected>Category B</option>
                @else
                    <option value="b">Category B</option>
                @endif

                @if ( old('type') == 'c' )
                    <option value="c" selected>Category C</option>
                @else
                    <option value="c">Category C</option>
                @endif
        </select>
    </fieldset>

    <fieldset>
        <label for="type">Deck</label>
            <select name="type" id="type">
                <option value="deck1" selected>Deck 1</option>
            </select>
    </fieldset>

    <input type='submit' class='btn btn-primary' value='Submit'>
</form>

@if(count($errors) > 0)
    <ul class='alert alert-warning'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@endsection

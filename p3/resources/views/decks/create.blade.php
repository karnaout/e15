@extends('layouts/main')

@section('title')
New deck - FlashCards
@endsection

@section('head')
<link rel="stylesheet" href="/css/decks.css">
@endsection

@section('content')

<h1>New deck</h1>
<p>Create a new deck of cards that you can use later to add cards to.</p>

<hr>
<form method='POST' action='/decks'>
    {{ csrf_field() }}

    <fieldset>
        <label for='name'>Deck name [Required]</label>
        <input type='text' name='name' id='name' value="{{ old("name") }}">
    </fieldset>

    <fieldset>
        <label for='description'>Description</label>
        <textarea name='description'>{{{ old('description') }}}</textarea>
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

@extends('layouts/main')

@section('title')
Edit deck {{ $deck->name }} - FlashCards
@endsection

@section('head')
<link rel="stylesheet" href="/css/decks.css">
@endsection

@section('content')

<h1>Edit deck - {{ $deck->name }}</h1>

<hr>
<form method='POST' action='/decks'>
    {{ csrf_field() }}
    {{ method_field('put') }}

    <fieldset>
        <label for='name'>Deck name [Required]</label>
        <input type='text' name='name' id='name' value="{{ $deck->name }}">
    </fieldset>

    <fieldset>
        <label for='description'>Description</label>
        <textarea name='description'>{{ $deck->description }}</textarea>
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

    <input type='submit' class='btn btn-primary' value='Update deck'>
</form>

@if(count($errors) > 0)
    <ul class='alert alert-warning'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@endsection

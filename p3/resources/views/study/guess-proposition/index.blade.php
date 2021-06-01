@extends('layouts/main')

@section('title')
Study - FlashCards
@endsection

@section('head')
@endsection

@section('content')

<h1>Guess Proposition</h1>
<p class="lead">
Enter a paragraph with propositions. All propositions will be removed and then you have to guess them yourself.
</p>
<div class="row">
    <form method='GET' action='/guess-proposition'>
        <fieldset>
            <label for='description'>Your text:</label>
            <br>
            <textarea name='description' rows="4" cols="50">{{{ old('description') }}}</textarea>
        </fieldset>

        <input type='submit' class='btn btn-primary' value='Submit'>
    </form>
</div>


@endsection

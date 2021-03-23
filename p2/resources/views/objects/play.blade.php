@extends('layouts/main')

@section('title')
Play - RandomObjects
@endsection

@section('head')
@endsection

@section('content')

<h1>Play RandomObjects</h1>

<form method='GET' action='/findObject'>

    <!-- Object type -->
    <fieldset>
        <label for="type">Object type:</label>
        <select name="type" id="type">
        <option value="appliances">Home Appliances</option>
        <option value="electronics">Electronics</option>
        <option value="other">Other</option>
        </select>
    </fieldset>

    <!-- Search -->
    <fieldset>
        <label for='searchObjects'>
            Search objects:
            <input type='text' name='searchObjects'>
        </label>
    </fieldset>

    <!-- Inculde hints? -->
    <fieldset>
    <label for="hints"> Include hints</label>
    <input type="checkbox" id="hints" name="hitns" value="">
    </fieldset>

    <input type='submit' class='btn btn-primary' value='Search'>

</form>

@endsection

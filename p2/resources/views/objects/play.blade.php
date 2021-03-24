@extends('layouts/main')

@section('title')
Play - RandomObjects
@endsection

@section('head')
<link rel="stylesheet" href="/css/objects/play.css">
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
            <input type='text' name='searchObjects' placeholder="Enter slug e.g. hot-dog-roller">
        </label>
    </fieldset>

    <!-- Inculde hints? -->
    <fieldset>
    <label for="hideInfo">Hide object desciption and hints</label>
    <input type="checkbox" id="hideInfo" name="hideInfo" value="false">
    </fieldset>

    <input type='submit' class='btn btn-primary' value='Search'>

</form>

@endsection

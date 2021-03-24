@extends('layouts/main')

@section('title')
New Object - RandomObjects
@endsection

@section('head')
<link rel="stylesheet" href="/css/objects/create.css">
@endsection

@section('content')

<h1>Add a new object</h1>

<form method='POST' action='/objects'>
    <div class='details'>* Required fields</div>
    {{ csrf_field() }}

    <fieldset>
        <label for='name'>* Name</label>
        <input type='text' name='name' id='name' value="{{ old("name") }}">
    </fieldset>

    <fieldset>
        <label for='description'>Description</label>
        <textarea name='description'>{{{ old('description') }}}</textarea>
    </fieldset>

    <fieldset>
        <label for="type">Object type:</label>
            <select name="type" id="type">
                @if ( old('type') == 'appliances' )
                    <option value="appliances" selected>Home Appliances</option>
                @else
                    <option value="appliances">Home Appliances</option>
                @endif

                @if ( old('type') == 'electronics' )
                    <option value="electronics" selected>Electronics</option>
                @else
                    <option value="electronics">Electronics</option>
                @endif

                @if ( old('type') == 'other' )
                    <option value="other" selected>Other</option>
                @else
                    <option value="other">Other</option>
                @endif
        </select>
    </fieldset>

    <fieldset>
        <label for='cover_url'>Cover URL</label>
        <input type='text' name='cover_url' id='cover_url' value='{{ old("cover_url") }}'>
    </fieldset>

    <fieldset>
        <label for='types'>Types</label>
        <input type='text' name='types' id='types' value='{{ old("types") }}'>
    </fieldset>

    <fieldset>
        <label for='hints'>Hints</label>
        <input type='text' name='hints' id='hints' value='{{ old("hints") }}'>
    </fieldset>

    <input type='submit' class='btn btn-primary' value='Add'>
</form>

@if(count($errors) > 0)
    <ul class='alert alert-warning'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@endsection

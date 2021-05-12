@extends('layouts/main')

@section('title')
Register - FlashCards
@endsection

@section('head')
@endsection

@section('content')
<h1 dusk='register-heading'>Register</h1>

Already have an account? <a href='/login'>Login here...</a>

<hr>

<form method='POST' action='/register'>
    {{ csrf_field() }}

    <label for='name'>Name</label>
    <input dusk='name-input' id='name' type='text' name='name' value='{{ old('name') }}' autofocus>

    <label for='email'>E-Mail Address</label>
    <input dusk='email-input' id='email' type='email' name='email' value='{{ old('email') }}'>

    <label for='password'>Password (min: 8)</label>
    <input dusk='password-input' id='password' type='password' name='password'>

    <label for='password-confirm'>Confirm Password</label>
    <input dusk='confirm-password-input' id='password-confirm' type='password' name='password_confirmation'>

    <br>

    <button dusk='register-button' type='submit' class='btn btn-primary'>Register</button>
</form>

{{-- form errors --}}
@if(count($errors) > 0)
    <ul class='alert alert-warning'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@endsection

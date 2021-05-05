@extends('layouts/main')

@section('content')

<h1 dusk='login-heading'>Login</h1>


Don’t have an account? <a href='/register'>Register here...</a>

<form method='POST' action='/login'>

    {{ csrf_field() }}

    <label for='email'>E-Mail Address</label>
    <input dusk='email-input' id='email' type='email' name='email' value='{{ old('email') }}' autofocus>
    @include('includes.error-field', ['fieldName' => 'email'])

    <label for='password'>Password</label>
    <input dusk='password-input' id='password' type='password' name='password'>
    @include('includes.error-field', ['fieldName' => 'password'])

    <label>
        <input type='checkbox' name='remember' {{ old('remember') ? 'checked' : '' }}> Remember Me
    </label>

    <button dusk='login-button' type='submit' class='btn btn-primary'>Login</button>

</form>

@endsection

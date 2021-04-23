@extends('layouts/main')

@section('title')
{{ Auth::user()->name }} - FlashCards
@endsection

@section('head')
<link rel="stylesheet" href="/css/pages/profile.css">
@endsection

@section('content')

<div class="wrapper">
    <h1>{{ Auth::user()->name }}</h1>
</div>


@endsection

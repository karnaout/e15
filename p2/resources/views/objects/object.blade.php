@extends('layouts/main')

@section('title')
{{ $name }}
@endsection

@section('head')
<link rel="stylesheet" href="/css/objects/object.css">
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <img data-src="{{ $cover_url }}" alt="{{ $name }}" style="height: 280px; width: 100%; display: block;" src="{{ $cover_url }}" data-holder-rendered="true">
            <p class="card-text">{{ $description }}</p>
        </div>
    </div>
</div>
@endsection

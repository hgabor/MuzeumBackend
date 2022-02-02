@extends('layout')

@section('title', 'Museum bragging page')

@section('content')
    <h1>Welcome to the Museum home page</h1>
    <p>Total number of paintings: {{ $paintingCount }}</p>
    <p>Total number of statues: {{ $statueCount }}, total price: {{ $statuePrice }} Ft</p>
    <p>
        <a href="{{ route('statues.index') }}">Go to statue listing</a>
    </p>
    <p>And a new paragraph</p>
@endsection

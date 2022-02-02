@extends('layout')

@section('title', $statue->person)

@section('content')
    <h1>The statue of {{ $statue->person }}</h1>
    <p>Height: {{ $statue->height }} cm</p>
    <p>Selling price: {{ $statue->price }} Ft</p>
    <p>@include('delete-statue-button',  ['statueId' => $statue->id])</p>
@endsection

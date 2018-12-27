@extends('app')

@section('title', 'Les Articles')

@section('content')
    <p>C'est l'article n° {{ $numero }}</p>
    <a href="{{ route('facture', ['n' => 1]) }}">Voir les factures</a>
    <br>
    <a href="/">Home</a>
@endsection
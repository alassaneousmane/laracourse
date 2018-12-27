@extends('app')

@section('title', 'Les Factures')

@section('content')
    <p>C'est la facture n° {{ $numero }}</p>
    <a href="{{ route('article', ['n' => 1]) }}">Voir les articles</a>
    <br>
    <a href="/">Home</a>

@endsection
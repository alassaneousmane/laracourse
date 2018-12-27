@extends('app')

@section('title', 'Form')

@section('content')
    {!! Form::open(['url' => 'users']) !!}
        {!! Form::label('nom', 'Entrez votre nom') !!}
        {!! Form::text('nom') !!}
        {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@stop

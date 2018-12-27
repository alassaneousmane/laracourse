@extends('app')

@section('content')

<div class="col-sm-offset-1 col-sm-10">
    <div class="panel panel-info">
        <div class="panel-heading">Taadaa :) Un nouveau mail</div>
        <div class="panel-body">
            <h2>Prise de contact sur mon beau site</h2>
            <p>Réception d'une prise de contact avec les éléments suivants :</p>
            <ul>
                <li><strong>Nom</strong> : {{ $nom }}</li>
                <li><strong>Email</strong> : {{ $email }}</li>
                <li><strong>Message</strong> : {{ $texte }}</li>
            </ul>
        </div>
    </div>
</div>
@stop
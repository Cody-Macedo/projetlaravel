@extends('layout')

@section('content')
    <div class="container error">
        <div class="vertical-align">
            <h1>Erreur 418 : Page non trouvé </h1>
            <h2> {{$exception->getMessage()}}</h2>
            <a class="btn btn-warning" href="/"> Retour à la page d'accueil</a>
        </div>
    </div>
@endsection

@extends('layout')

@section('content')
    <div class="container" style="background:#bb2d3b; color:">
        <h1>Erreur 404 : Page non trouvé </h1>
        <h2> {{$exception->getMessage()}}</h2>
        <a href="/"> Retour à la page d'accueil</a>
    </div>
@endsection

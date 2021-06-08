@extends("layout")

@section("content")
    <div class="container">
        <form action="" method="POST">
            @csrf
            <h2>Voulez confirmer cette suppression</h2>
            <h3>{{$livre->titre}} - {{$livre->auteur}}</h3>
            <button type="submit" href="/livres/confirm/{{$livre->id}}" class="btn btn-warning">
                Confirmer
            </button>
            <a href="/livres/form/{{$livre->id}}" class="btn btn-danger">
                Annuler
            </a>
        </form>
    </div>
@endsection

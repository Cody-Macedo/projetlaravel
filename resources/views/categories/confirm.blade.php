@extends("layout")

@section("content")
    <div class="container">
        <form action="" method="POST">
            @csrf
            <h2>Voulez confirmer cette suppression</h2>
            <h3>{{$categorie->titre}} - {{$categorie->mots}}</h3>
            <button type="submit" href="/categories/confirm/{{$categorie->id}}" class="btn btn-warning">
                Confirmer
            </button>
            <a href="/categories/form/{{$categorie->id}}" class="btn btn-danger">
                Annuler
            </a>
        </form>
    </div>
@endsection

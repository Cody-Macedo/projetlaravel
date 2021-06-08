@extends("layout")

@section("content")
    <div class="container">
        <h1>Accueil</h1>
        @foreach ($livres as $item)
            {{-- Renommage de variable qu'on passe à l'include --}}
            @include("livres.vignette", ['livre' => $item])
        @endforeach
    </div>
@endsection

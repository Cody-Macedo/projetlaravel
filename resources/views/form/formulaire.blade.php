@extends("layout")

@section("content")
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control @error("prenom") is-invalid @enderror" name="prenom" >
                @error('prenom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control @error("nom") is-invalid @enderror" name="nom">
                @error('nom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary"> Submit</button>
        </form>
    </div>
    @if (isset($prenom) && isset($nom))
        <div class="container">
            <p> Prénom : {{ $prenom }}</p>
            <p> Nom : {{ $nom }}</p>
        </div>
    @elseif(empty($prenom) || empty($nom))
        <div class="container">
            <p > Veuillez renseigner tous les champs</p>
        </div>
    @endif

{{--    @isset($prenom, $nom)--}}
{{--        <div class="container">--}}
{{--            <p> Prénom : {{ $prenom }}</p>--}}
{{--            <p> Nom : {{ $nom }}</p>--}}
{{--        </div>--}}
{{--    @endisset--}}
@endsection

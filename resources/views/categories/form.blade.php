@extends("layout")

@section("content")
    <div class="container">
        @if(isset($categorie))
            <h1>Modifier</h1>
        @else
            <h1>Créer</h1>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titre">Titre</label>
                <input type="text" @isset($categorie) value="{{$categorie->titre}}"
                       @endisset class="form-control @error("titre") is-invalid @enderror"
                       name="titre">
                @error('titre')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mots">Mot</label>
                <input type="text" @isset($categorie) value="{{$categorie->mots}}"
                       @endisset class="form-control @error("mots") is-invalid @enderror"
                       name="mots">
                @error('mots')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            @if(isset($categorie))
                <button type="submit" class="btn btn-warning">Modifier <i class="fas fa-edit"></i></button>
                <a href="/categories/confirm/{{$categorie->id}}" class="btn btn-danger">
                    Delete <i class="fas fa-trash"></i>
                </a>
            @else
                <button type="submit" class="btn btn-primary"> Submit</button>
            @endif
        </form>
    </div>
    <div class="container">
        @if(isset($category))
            {{dump($category)}}
{{--            {{$livres = $categorie->livres}}--}}
{{--            @foreach($livres as $livre)--}}
{{--                @include("livres.vignette")--}}
{{--            @endforeach--}}
        @endif
    </div>
@endsection

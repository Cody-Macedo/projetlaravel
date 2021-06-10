@extends("layout")

@section("content")
    <div class="container">
        @if(isset($livre))
            <h1>Modifier</h1>
        @else
            <h1>Créer</h1>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titre">Titre</label>
                <input type="text" @isset($livre) value="{{$livre->titre}}"
                       @endisset class="form-control @error("titre") is-invalid @enderror"
                       name="titre">
                @error('titre')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="auteur">Auteur</label>
                <input type="text" @isset($livre) value="{{$livre->auteur}}"
                       @endisset class="form-control @error("auteur") is-invalid @enderror"
                       name="auteur">
                @error('auteur')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category">Categorie</label>
                <select name="category" id="category" class="form-select" aria-label="Default select example">
                    <option value="">Selectionner...</option

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @isset($livre) @if(old('$category') == $livre->categories_id ) @endisset selected @endif>{{ $category->titre }}</option>
                    @endforeach
                </select>
                @error('categories')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            @if(isset($livre))
                <button type="submit" class="btn btn-warning">Modifier <i class="fas fa-edit"></i></button>
                <a href="/livres/confirm/{{$livre->id}}" class="btn btn-danger">
                    Delete <i class="fas fa-trash"></i>
                </a>
            @else
                <button type="submit" class="btn btn-primary"> Submit</button>
            @endif
        </form>
    </div>
@endsection

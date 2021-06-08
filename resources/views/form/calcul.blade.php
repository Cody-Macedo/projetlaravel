@extends("layout")

@section("content")

    <div class="container">

        <h1>Calcul</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nb1">Nombre 1</label>
                <input type="number" class="form-control" name="nb1">
            </div>
            <div class="mb-3">
                <label for="nb2">Nombre 2</label>
                <input type="number" class="form-control" name="nb2">
            </div>
            <button type="submit" class="btn btn-primary"> Submit</button>
        </form>

    </div>

    @if (isset($nb1) && isset($nb2))
        <div class="container">
            <p>Calcul: {{ $nb1 . "+" .  $nb2}}</p>
            <p>= {{ $nb1 + $nb2}}</p>
        </div>
    @endif

@endsection

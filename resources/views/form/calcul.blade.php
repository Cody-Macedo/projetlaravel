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
    {{-- Bootstrap JS--}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
            crossorigin="anonymous"></script>

@endsection

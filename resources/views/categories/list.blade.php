@extends("layout")

@section("content")

    <div class="container">

        <div class="inline position-relative">
            <h1>Categorie</h1>
            <a class="link-no-decoration position-absolute end-0" href="/categories/form"><i class="far fa-plus-square fa-2x"></i></a>
        </div>

        @if(isset($search))
            <span class="badge rounded-pill bg-primary">{{$search}}</span>
        @endif

        @foreach ($categories as $categorie)
            @include("categories.vignette")
        @endforeach

    </div>

@endsection

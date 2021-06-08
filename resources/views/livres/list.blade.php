@extends("layout")

@section("content")
    @if(isset($status))
        @if(session($status))
            {{dump($status)}}
            <div class="alert alert-primary" role="alert">
                {{$status}}
            </div>
        @endif
    @endif

    <div class="container">

        <div class="inline position-relative">
            <h1>Livres</h1>
            <a class="link-no-decoration position-absolute end-0" href="/livres/form"><img class="medium-svg" src="{{asset('assets/svg/plus-square-regular.svg')}}" alt="trash"></a>
        </div>

        @if(isset($search))
            <span class="badge rounded-pill bg-primary">{{$search}}</span>
        @endif

        @foreach ($livres as $livre)
            @include("livres.vignette")
        @endforeach

    </div>

@endsection

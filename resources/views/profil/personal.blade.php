@extends("layout")

@section("content")

    <div class="container horizontal-orientation">
        <div class="side-nav">
            <ul>
                {{--            <li class="nav-item">--}}
                {{--                <a class="nav-link active" aria-current="page" href="#">Active</a>--}}
                {{--            </li>--}}
                <li>
                    <a class="nav-link" href="/profil/personal">Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Autres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
        <div>
            <h3>Nom: {{Auth::user()->name}}</h3>
            <h3>Email: {{Auth::user()->email}}</h3>
        </div>
    </div>


@endsection

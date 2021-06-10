<a class="link-no-decoration" href="/livres/form/{{$livre->id}}">
    <div class="card">
        <div class="card-body">
            <h4>{{ $livre->titre }}</h4>
            <p>Auteur : {{ $livre->auteur }} <i class="bi bi-archive"></i></p>
            <p>category : {{ $livre->category }} <i class="bi bi-archive"></i></p>
            {{--                        <a href="/livres/delete/{{$livre->id}}" class="btn btn-danger"> Delete <img--}}
            {{--                                src="{{asset('assets/svg/trash-alt-solid.svg')}}" class="small-svg" alt="trash"></a>--}}
        </div>
    </div>
</a>

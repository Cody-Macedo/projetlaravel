<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Laravel Cours </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Livre
                            </a>
                            <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="/livres/form">Créer</a></li>
                                <li><a class="dropdown-item" href="/livres/list">Liste</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Categorie
                            </a>
                            <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="/categories/form">Créer</a></li>
                                <li><a class="dropdown-item" href="/categories/list">Liste</a></li>
                            </ul>
                        </li>
                    </ul>
                @endauth
                <li class="nav-item dropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Lang
                            </a>
                            <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="/fr">Français</a></li>
                                <li><a class="dropdown-item" href="/en">English</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" action="{{url("/livres/search")}}" method="POST">
                @csrf
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            @auth
                <a class="link-no-decoration" href="/profil/personal"><i class="fas fa-user"></i> Compte </a>
                <form action="{{route("logout")}}" method="post">
                    @csrf
                    <button type="submit" class="link-no-decoration"><i class="fas fa-sign-out-alt"></i></button>
                </form>
            @endauth
            @guest
                <a class="link-no-decoration" href="/login">Login</a>
            @endguest
        </div>
    </div>
</nav>


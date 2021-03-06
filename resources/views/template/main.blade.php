<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Plateforme volleyball</title>
</head>

<body>
    <header class="position-sticky">
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
            <div class="container-fluid">
                <a class="navbar-brand text-secondary" href="#">Volleyball plateforme <i class="fas fa-volleyball-ball"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-5 pr-5">
                        <li class="nav-item mr-5 pr-5">
                            <a class="nav-link text-dark active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item  mr-5 pr-5">
                            <a class="nav-link text-dark " href="/equipe">Crée une équipe</a>
                        </li>
                        <li class="nav-item  mr-5 pr-5"> 
                            <a class="nav-link text-dark " href="/joueur">Crée un joueur</a>
                        </li>
                        <li class="nav-item  mr-5 pr-5"> 
                            <a class="nav-link text-dark " href="/joueurs">Joueurs</a>
                        </li>
                        <li class="nav-item  mr-5 pr-5"> 
                            <a class="nav-link text-dark " href="/equipes">Equipes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

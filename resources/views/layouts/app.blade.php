<!DOCTYPE html>
<html>
<head>
    <title>Lambda Camp</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css"> -->
    @vite('resources/css/app.css')
    <style>
        .active {
            font-weight: bold; /* Estilo visual para indicar link ativo */
        }
    </style>
</head>
<body>
    <div class="navbar bg-base-100">
        <a class="btn btn-ghost text-xl" href="/">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/Lambda_lc.svg" width="20" alt="lambda logo"/>
            Lambda Camp
        </a>
    </div>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light pr-5 pl-5">
        <a class="navbar-brand" href="{{ url('/') }}">Loja Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Início</a>
                </li>
                <li class="nav-item {{ Request::is('contents*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contents.index') }}">Contents</a>
                </li>
            </ul>
        </div>
    </nav> -->
    <div class="md:container md:mx-auto">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Captura a URL atual e adiciona classe 'active' ao link correspondente na navbar
            var url = window.location;
            $('ul.navbar-nav a[href="'+ url +'"]').addClass('active');
            // Para páginas com URLs que terminam com '/' (como a página inicial)
            $('ul.navbar-nav a').filter(function() {
                return this.href == url + '/';
            }).addClass('active');
        });
    </script>
</body>
</html>

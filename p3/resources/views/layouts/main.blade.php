<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Stylesheets-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">
    <link rel="stylesheet" href="/css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @yield('head')
</head>
<body>
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <a href="/" class="masthead-brand">🅵🅻🅰🆂🅷🅲🅰🆁🅳🆂</a>
                <nav class="nav nav-masthead justify-content-center">
                    {{-- Decks --}}
                    <div class="dropdown">
                        <button type="button" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Decks
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/decks">View deck</a>
                            <a class="dropdown-item" href="/decks/create">Create a deck</a>
                        </div>
                    </div>
                    {{-- Cards --}}
                    <div class="dropdown">
                        <button type="button" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Cards
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/cards">View cards</a>
                            <a class="dropdown-item" href="/cards/create">Create a card</a>
                        </div>
                    </div>
                    <a class="nav-link" href="/study">Study</a>
                    @if(!Auth::user())
                        <a href='/login' class="nav-link">Login / Register</a>
                    @else
                        <div class="dropdown">
                            <button type="button" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/profile">Profile</a>
                                <form method='POST' id='logout' action='/logout'>
                                    {{ csrf_field() }}
                                    <a href='#' onClick='document.getElementById("logout").submit();' class="dropdown-item">Logout</a>
                                </form>
                            </div>
                        </div>
                    @endif
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            @yield('content')
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <small>By Khaled Arnaout <a href="http://khaledarnaout.com/">khaledarnaout.com</a> || Cover template credits for <a href="https://twitter.com/mdo">@mdo</a>.</small>
            </div>
        </footer>
    </div>

    <footer>
        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/js/objects/jquery-3.6.0.min.js"><\/script>')</script>
        <script src="/js/objects/bootstrap.min.js"></script>
        <script src="/js/objects/popper.min.js"></script>
    </footer>
</body>
</html>

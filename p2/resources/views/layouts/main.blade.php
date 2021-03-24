<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <!-- Bootstrap core CSS -->
    <link href="/css/objects/bootstrap.min.css" rel="stylesheet">
    <!-- Stylesheets-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">
    <link rel="stylesheet" href="/css/objects/styles.css">

    @yield('head')
</head>
<body>
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">RandomObjects</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link  " href="/">Home</a>
                    <a class="nav-link" href="/play">Play</a>
                    <a class="nav-link" href="/objects/create">New</a>
                    <a class="nav-link" href="/objects">Objects</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            @yield('content')
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <small>By Khaled Arnaout <a href="http://khaledarnaout.com/">khaledarnaout.com</a> || Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</small>
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

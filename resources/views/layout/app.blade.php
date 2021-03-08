<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Lara7')
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
        <script src="/js/main.js"></script>
    </head>
    <body class="container mt-5">
        <nav>
            <a href="{{ route('article.index') }}">/Article</a>
            <a href="{{ route('article.create') }}">/Create</a>
        </nav>
        <main>
            @yield('content')
        </main>
    </body>
</html>

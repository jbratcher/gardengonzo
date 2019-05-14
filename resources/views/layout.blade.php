<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', "Gardenganza")</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- CSS  -->
    <link href="/css/app.css" rel="stylesheet">

</head>

<body>

<header>

    <nav>
        <ul>
            <li><a href="/" rel="noopener noreferrer">Home</a></li>
            <li><a href="/login" rel="noopener noreferrer">Login</a></li>
            <li><a href="/register" rel="noopener noreferrer">Register</a></li>
            <li><a href="/about" rel="noopener noreferrer">About</a></li>
            <li><a href="/contact" rel="noopener noreferrer">Contact</a></li>
        </ul>
    </nav>

</header>

<main>

    @yield('content')

</main>

<footer>
    <span>Gardenganza 2019</span>
</footer>

</body>
</html>

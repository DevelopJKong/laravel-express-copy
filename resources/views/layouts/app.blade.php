<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel Blog</title>
</head>
<body>
<header>

    @if(isset($user))
        <ul class="header__list">
            <li><a href="/">Home</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    @else
        <ul class="header__list">
            <li><a href="/">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/signup">Signup</a></li>
        </ul>
    @endif
</header>

<main>
    <h1>Laravel Board Project</h1>
    <p>@yield('title')</p>
    @yield('content')
</main>
<footer>
    <p>&copy; {{ date("Y-m-d", time()) }} Cafe Small House</p>
</footer>
</body>
</html>

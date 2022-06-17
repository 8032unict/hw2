<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=PT+Sans&display=swap" rel="stylesheet"> 
    <title>@yield('title')</title>
    <link rel='stylesheet' href='{{ asset('css/home.css') }}'>
    <script src='{{ asset('js/home.js')  }}' defer></script>
    

</head>
<body>
<header>
    <h3 id="site_name">FoxLessons</h3>
    <nav>
        <div id="userInfo">
        Utente loggato:  {{ Session::get('username') }}</div>
        <a id="logout" href="{{route('logout')}}">Logout</a>
    </nav>
</header>

@yield('content')

<footer>
    <h2>FoxLessons - 1000008032</h2>
</footer>
</body>
</html>
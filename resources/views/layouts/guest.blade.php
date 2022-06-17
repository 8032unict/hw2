<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=PT+Sans&display=swap" rel="stylesheet"> 
    <title>@yield('title')</title>
    <link rel='stylesheet' href='{{ asset('css/guest.css') }}'>
    @yield('script')
    

</head>

<body>
    <div id="overlay"></div>
    @yield('main')
</body>
</html>
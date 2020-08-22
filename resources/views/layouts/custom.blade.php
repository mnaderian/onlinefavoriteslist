<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @yield('link')
    <link rel="icon" type="image/png" href="images/favorites.png" />
</head>

<body>
    <div id="main">
        @yield('content')
    </div>
</body>

</html>

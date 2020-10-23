<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/w3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="js\script.js"></script>
    <script  type="text/javascript" src="js\bootstrap.js"></script>
    <script  type="text/javascript" src="js\jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js\bootstrap.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/" style="font-family: Engravers MT;">Perpustakaan IT DEL</a>
</nav>
</header>
@yield('container')
</body>
</html>
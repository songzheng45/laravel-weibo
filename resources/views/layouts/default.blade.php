<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title', 'WeiboApp') - Laravel 入门</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
</head>

<body>

    @include('shared._header')

    <main role="main" class="container">
        @yield('content')
    </main>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>

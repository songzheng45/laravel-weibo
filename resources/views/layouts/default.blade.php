<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    <title>@yield('title', 'WeiboApp') - Laravel 入门案例</title>
</head>


<body>
    @include('shared._header')

    <div class="container">
        @yield('content')

        @include('shared._footer')
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>

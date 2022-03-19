<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App Vote</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container" id="app">
        <h1 class="text-center">@yield('title')</h1>
        @yield('content')
    </div>

{{--scripts--}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

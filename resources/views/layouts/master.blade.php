<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/personal/app.css') }}" rel="stylesheet">
    @notifyCss
    <title>Videoclub</title>
</head>

<body>

    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    // Laravel 7 or greater
    <x:notify-messages />
    @notifyJs
</body>

</html>
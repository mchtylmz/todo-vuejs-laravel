<!doctype html>
<!--
__  __  _____ _    _ _________     ___      __  __ ______
|  \/  |/ ____| |  | |__   __\ \   / / |    |  \/  |___  /
| \  / | |    | |__| |  | |   \ \_/ /| |    | \  / |  / /
| |\/| | |    |  __  |  | |    \   / | |    | |\/| | / /
| |  | | |____| |  | |  | |     | |  | |____| |  | |/ /__
|_|  |_|\_____|_|  |_|  |_|     |_|  |______|_|  |_/_____|
@mchtylmz
-->
<html lang="tr">
<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MucahitLaravelVue') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app" class="w-100 h-100">@yield('content')</div>
</body>
</html>

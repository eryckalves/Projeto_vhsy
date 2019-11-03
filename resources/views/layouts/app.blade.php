<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PARTE 1</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Middle Side Of Navbar -->
                    <ul class="navbar-nav m-auto">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <svg class="icon" height="40px" width="40px" id="Layer_1" version="1.1" viewBox="0 0 633 633"><path d="M540.709,92.77C480.886,32.945,401.344,0,316.74,0S152.595,32.945,92.771,92.77C32.947,152.594,0,232.137,0,316.74  s32.947,164.144,92.771,223.968c59.824,59.824,139.366,92.772,223.969,92.772s164.146-32.948,223.969-92.772  c59.824-59.824,92.771-139.364,92.771-223.968S600.534,152.594,540.709,92.77z M324.57,107.554l92.539-27.02l92.733,67.617  l2.89,96.052l-91.589,40.3l-96.573-70.166V107.554z M205.126,298.659l36.385,111.981l-60.048,63.582l-93.034-44.109l-24.951-96.114  l51.208-75.133L205.126,298.659z M120.563,245.435l2.989-99.337l92.484-65.661l93.871,27.406v105.771l-98.693,71.705  L120.563,245.435z M247.729,425.413h139.443l0.875-2.691l57.484,60.866l-47.553,75.862H236.493l-46.018-73.414L247.729,425.413z   M455.668,472.962l-62.458-66.131l35.646-109.704l89.139-39.22l52.927,77.658l-26.537,95.333L455.668,472.962z M563.029,152.358  l-47.449-18.172l-93.288-68.021L393.585,30.66C463.704,49.511,523.622,93.509,563.029,152.358z M239.899,30.657L211.71,65.523  l-99.934,70.951l-41.275,15.807C109.909,93.468,169.809,49.502,239.899,30.657z M21.097,298.674l30.053,46.2l24.612,94.803  l-2.161,46.039C40.168,437.758,20.53,379.503,20.53,316.74C20.53,310.671,20.736,304.654,21.097,298.674z M190.81,584.806  l54.874-10.691h143.104l54.173,10.557c-38.312,18.121-81.101,28.28-126.221,28.28C271.733,612.951,229.049,602.844,190.81,584.806z   M560.808,484.381l-2.321-49.462l26.087-93.723l27.797-42.729c0.37,6.046,0.58,12.135,0.58,18.272  C612.951,378.922,593.676,436.678,560.808,484.381z"/></svg>
                            </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cadastro
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/time/create">Time</a>
                                <a class="dropdown-item" href="/jogador/create">Jogador</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

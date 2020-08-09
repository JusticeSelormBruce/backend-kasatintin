<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .icon {
            width: 15px !important;
            height: 10px!important;
        }
        hr{
            margin: 0.05rem
        }

    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm shadow-lg" style="height: 50px!important">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('logo/Kasatintin2.jpg') }}" alt="" class="img-thumbnail" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-capitalize">
                        <!-- Authentication Links -->

                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                            <hr>
                            <a href="https://web.facebook.com/Kasatintincom-329606714086874/"><img
                                    src="{{ asset('icons/facebook.png') }}" alt="" class="icon ml-2"></a>
                            <a href="https://www.instagram.com/kasatintin_tv/"><img
                                    src="{{ asset('icons/instagram-sketched.png') }}" alt="" class="icon mx-2 "></a>
                            <a href="https://www.youtube.com/watch?v=x1-I3ebH-0E"><img
                                    src="{{ asset('icons/youtube.png') }}" alt="" class="icon"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-1">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>

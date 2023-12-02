<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-blue">
    <div id="app">
        <!-- header section -->
        <nav class="navbar navbar-expand-md navbar-light home_header">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3>رواياتي</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav links">
    
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">عضو جديد</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link" href="#">من نحن</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" href="#">تواصل معنا</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    حسابي
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        تسجيل الخروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <ul class="navbar-nav nav-search">
                        <li class="nav-item">
                            <form class="d-flex search_box" role="search">
                                <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
                                <button class="btn btn-outline-success search_btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>

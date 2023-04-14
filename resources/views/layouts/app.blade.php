<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
     <!-- Custom Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('img/CapSure.png')}}" class=" capsurelogo" alt="..."/><span class="m-2 brand_name mgn-brand ">CapSure</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item text-uppercase fw-bold"><a href="/" class="nav-link {{request()->is('/') ? 'active' : ''}}">Home</a></li>
                    <li class="nav-item text-uppercase fw-bold"><a href="/services" class="nav-link {{request()->is('services') ? 'active' : ''}}">Services</a></li>
                    <li class="nav-item text-uppercase fw-bold"><a href="/events" class="nav-link {{request()->is('events') ? 'active' : ''}}">Events</a></li>
                    <li class="nav-item text-uppercase fw-bold"><a href="/about" class="nav-link {{request()->is('about') ? 'active' : ''}}">About</a></li>

                     <!-- Search Bar -->
                     <div class="container">
                        <form class="form-inline my-2 my-lg-0">
                            <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search &quot;Birthday&quot; or &quot;Wedding&quot;" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </form>
                        </div>
                        
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto auth-mgn">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn loginbutton btn-sm rounded">{{ __('Log in') }}</button></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><button type="button" class="btn signbutton fw-bold btn-sm rounded">{{ __('Sign Up') }}</button></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="/chat">Chat</a>
                                    <a class="dropdown-item" href="/appointment">Appointment</a>
                                    <a class="dropdown-item" href="/setting">Setting</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>

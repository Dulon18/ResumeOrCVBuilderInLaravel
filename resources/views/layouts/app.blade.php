<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .active {
            font-weight: bolder;
        }

        nav {
            list-style: none;
            background-color: #6495ED;
            color: #F8F8FF;
            font-size: 18px;
            font-weight: 900;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <h3 class="fw-bold text-primary fst-italic">Builder House</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bold text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item fw-bold text-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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

        <main class="py-4 ">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-3">
                        <li class="breadcrumb-item nav-link m-3 {{request()->is('/') ? 'active': ' '}}"><a class="nav-link d-flex" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item nav-link m-3 {{request()->is('/') ? 'active': ' '}}"><a class="nav-link d-flex" href="{{url('/')}}">Header</a></li>
                        <li class="breadcrumb-item m-3 {{request()->is('user-details') ? 'active': ' '}}"><a class="nav-link d-flex" href="{{route('user_details.index')}}">User Info</a></li>
                        <li class="breadcrumb-item m-3 {{request()->is('user-edu') ? 'active': ' '}}"><a class="nav-link d-flex" href="{{route('user-edu.index')}}">Education</a></li>
                        <li class="breadcrumb-item m-3 {{request()->is('work-experience') ? 'active': ' '}} "><a class="nav-link d-flex" href="{{route('work-experience.index')}}">Work Experience</a></li>
                        <li class="breadcrumb-item m-3 {{request()->is('skills') ? 'active': ' '}}"><a class="nav-link d-flex" href="{{route('skills.index')}}">Skills</a></li>

                    </ol>
                </nav>
                @if ($errors->any())
                <div class="alert alert-danger " data-bs-dismiss="alert" aria-label="Close">
                    <ul>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session()->has('success'))
                <div class="alert alert-success">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                   <h5> {{session()->get('success')}}</h5>
                </div>
                @endif
            </div>
            @yield('content')
        </main>
    </div>
    <script src="https://kit.fontawesome.com/783a877fc3.js" crossorigin="anonymous"></script>
</body>

</html>
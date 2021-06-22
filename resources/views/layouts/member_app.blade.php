<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wonderful Journey</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    <style>
        .carousel-content {
            position: absolute;
            bottom: 49%;
            left: 40%;
            z-index: 20;
            color: white;
            text-shadow: 0 2px 3px rgba(0, 0, 0, .6);
            text-align: center;

        }

        .carousel-desc {
            font-size: medium;
        }

        .carousel-inner-custom {
            height: 300px;
        }

        .card-text-custom {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
        }

        .card-custom {
            width: 350px;
            margin-left: 10px;
            margin-top: 30px;
        }

        .card-img-top-custom {
            height: 230px;
        }

        .space {
            margin-top: 150px;
        }

        
    </style>
</head>

<body>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner-custom carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/komodo_island_cropped.jpg" alt="First slide">
                <div class="carousel-content">
                    <h1>Wonderful Journey<div class="carousel-desc"><br>Blog of Indonesia Tourism</div>
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/mount_batur_cropped.jpg" alt="Second slide">
                <div class="carousel-content">
                    <h1>Wonderful Journey<div class="carousel-desc"><br>Blog of Indonesia Tourism</div>
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/borobudur_cropped.jpg" alt="Third slide">
                <div class="carousel-content">
                    <h1>Wonderful Journey<div class="carousel-desc"><br>Blog of Indonesia Tourism</div>
                    </h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="app">
        <nav class="sticky-top navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{url('/member/home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/member/profile')}}">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/member/blog')}}">Blog</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i style="font-size: 18px;" class="bi bi-box-arrow-in-right pr-2"></i>{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i style="font-size: 18px;" class="bi bi-person-fill pr-1"></i>{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i style="font-size: 18px;" class="bi bi-box-arrow-right pr-2"></i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @yield('content')
        </main>
    </div>

    @include('sweetalert::alert')
    <div class="space"></div>
    <script>
        
    </script>
</body>

</html>
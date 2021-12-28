<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title', env('APP_NAME'))</title>
        <link rel="icon" type="image/x-icon" href="{{asset('site5asset/assets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('site5asset/css/styles.css') }}" rel="stylesheet" />

        <style>
            #mainNav .navbar-nav > li.nav-item > a.nav-link.active {
                color: #f00;
            }
        </style>

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ route('site5.index') }}">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4

                            {{-- @if (request()->url() == route('site5.index'))
                                {{ 'active' }}
                            @else
                                {{ '' }}
                            @endif --}}

{{-- {{ (request()->url() == route('site5.index')) ? 'active' : '' }} --}}
{{ request()->routeIs('site5.index') ? 'active' : '' }}

                            " href="{{ route('site5.index') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4
                            {{ request()->routeIs('site5.about') ? 'active' : '' }}
                            " href="{{ route('site5.about') }}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4 {{ request()->routeIs('site5.post') ? 'active' : '' }}" href="{{ route('site5.post') }}">Sample Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4 {{ request()->routeIs('site5.contact') ? 'active' : '' }}" href="{{ route('site5.contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('ahmed')

        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('site5asset/js/scripts.js') }}"></script>
    </body>
</html>

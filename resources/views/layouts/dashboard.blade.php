<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CEPUin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo h-4">
                            <a href="index.html">CEPUin App</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item @if (request()->routeIs('index')) active @endif ">
                            <a href="{{ route ('index')}}" class='sidebar-link'>
                                <i class="bi bi-card-checklist"></i>
                                <span>Dashboard </span>
                            </a>
                        </li>
                        <li class="sidebar-item @if (request()->routeIs('laporan')) active @endif ">
                            <a href="{{ route ('laporan') }}" class='sidebar-link'>
                                <i class="bi bi-card-checklist"></i>
                                <span>List Pelaporan</span>
                            </a>
                        </li>

                        
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>
                    @yield('judul')
                </h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="">jwrapiz</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset ('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset ('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset ('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset ('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset ('assets/js/main.js') }}"></script>
</body>

</html>
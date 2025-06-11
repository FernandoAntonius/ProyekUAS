<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Trapel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="adminlte/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="adminlte/dist/css/adminlte.min.css" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom shadow-sm">
            <div class="container-fluid">
                <!-- Logo -->
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="{{asset('assets/img/bird.png')}}" alt="Logo" class="brand-image" style="height:30px;">
                    <span class="brand-text fw-semibold ms-2 text-dark">Trapel</span>
                </a>

                <!-- Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Content -->
                <div class="collapse navbar-collapse" id="navbarMain">
                    <!-- Kiri -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Negara</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Kota</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Aktivitas</a></li>
                    </ul>
                    <!-- Kanan -->
                    <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item dropdown me-3">
                            <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">
                                🌐 ID | IDR
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Bantuan</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Bookmark</a></li>
                        <li class="nav-item me-2">
                            <a href="{{ url('login')}}" class="btn btn-outline-primary btn-sm">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('register') }}" class="btn btn-primary btn-sm fw-bold">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5 pt-5">
        <h2 class="text-center fw-bold text-uppercase mb-4">Trapel Around the World</h2>
    </div>
</body>

</html>
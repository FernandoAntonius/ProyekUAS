<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Trapeloka')</title>
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
                    <img src="{{ asset('https://images.seeklogo.com/logo-png/31/1/twitter-logo-png_seeklogo-318424.png') }}"
                        alt="Logo" class="brand-image" style="height:30px;">
                    <span class="brand-text fw-semibold ms-2 text-dark">Trapeloka</span>
                </a>

                <!-- Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Content -->
                <div class="collapse navbar-collapse" id="navbarMain">
                    <!-- Kiri -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Hotels</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Activities</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown">
                                Transports
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cruises</a></li>
                                <li><a class="dropdown-item" href="#">Buses</a></li>
                                <li><a class="dropdown-item" href="#">Flights</a></li>
                                <li><a class="dropdown-item" href="#">Car Rental</a></li>
                                <li><a class="dropdown-item" href="#">Airport Transfer</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Kanan -->
                    <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item dropdown me-3">
                            <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">
                                🌐 EN | USD
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">ID | IDR</a></li>
                                <li><a class="dropdown-item" href="#">SG | SGD</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Deals</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Support</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#">Bookings</a></li>
                        <li class="nav-item me-2">
                            <a href="#" class="btn btn-outline-primary btn-sm">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-primary btn-sm fw-bold">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>
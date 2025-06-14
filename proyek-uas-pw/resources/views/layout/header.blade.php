<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Trapel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="adminlte/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="adminlte/dist/css/adminlte.min.css" rel="stylesheet">
    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .overlay {
            background-color: rgba(255, 255, 255, 0.85);
            min-height: 100vh;
            padding-top: 80px;
        }

        .hero {
            position: relative;
            text-align: center;
            padding: 6rem 1rem 7rem;
            background: url('{{ asset('assets/img/sigma.jpg') }}') center/cover no-repeat;
            color: var(--color-button-text);
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 440px;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 0;
            border-radius: 0 0 var(--radius-card) var(--radius-card);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            user-select: none;
        }

        .hero h1 {
            margin-bottom: 1rem;
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
            color: white;
            opacity: 0.7;
        }

        .hero p {
            font-size: 1.4rem;
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.6);
            color: white;
            opacity: 0.7;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom shadow-sm">
            <div class="container-fluid">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="{{asset('assets/img/bird.png')}}" alt="Logo" class="brand-image" style="height:30px;">
                    <span class="brand-text fw-semibold ms-2 text-dark">Trapel</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ url('trapel')}}">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ url('trapel/negara')}}">Negara</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ url('trapel/kota')}}">Kota</a></li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item dropdown me-3">
                            <a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">
                                🌐 ID
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ url('support')}}">Bantuan</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ url('about-us')}}">Tentang Kami</a>
                        </li>
                        @if(Auth::check())
                            <li class="nav-item">
                                <a href="{{ url('logout') }}" class="btn btn-outline-danger btn-sm">Log Out</a>
                            </li>
                        @else
                            <li class="nav-item me-2">
                                <a href="{{ url('login')}}" class="btn btn-outline-primary btn-sm">Log In</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('register') }}" class="btn btn-primary btn-sm fw-bold">Register</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <section class="hero" role="region" aria-labelledby="hero-title">
        <div class="hero-content">
            <h2 class="text-center fw-bold text-uppercase mb-4" style="color: white"><strong>Trapel Around the
                    World</strong></h2>
            <h1 id="hero-title">Discover Your Next Adventure with Expert Guides</h1>
            <p>Browse curated travel guides and tips crafted by local experts to make your journey unforgettable.
            </p>

        </div>
    </section>

</body>

</html>
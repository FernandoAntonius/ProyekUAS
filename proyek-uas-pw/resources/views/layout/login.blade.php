<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login - Trapel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Login Page" />
    <meta name="author" content="ColorlibHQ" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('/css/adminlte.css') }}" />

    <!-- Custom Styles -->
    <style>
        body {
            position: relative;
            background: #000;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('{{ asset('assets/img/resgisterbg.png') }}') center/cover no-repeat;
            z-index: 0;
            opacity: 0.6;
        }

        .login-box {
            width: 400px;
            backdrop-filter: blur(9px);
            -webkit-backdrop-filter: blur(9px);
        }

        .login-logo {
            width: 120px;
            height: 120px;
            object-fit: contain;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="card" style="background-color: rgba(255, 255, 255, 0.8);">
            <div class="card-header text-center">
                <img src="{{ asset('assets/img/bird.png') }}" alt="Logo" class="login-logo">
                <h4 class="fw-bold">Welcome to Trapel</h4>
                <p class="text-muted">Please enter your details to sign in.</p>
            </div>

            <div class="card-body">
                @error('failed')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

                <form method="POST" action="{{ url('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input id="loginEmail" type="email" name="email" class="form-control"
                                value="{{ old('email') }}" placeholder="Email" required />
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input id="loginPassword" type="password" name="password" class="form-control"
                                placeholder="Password" required />
                            <label for="loginPassword">Password</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember" />
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                <p class="mb-1">
                    <a href="#" class="text-decoration-none">Forgot password?</a>
                </p>
                <p class="mb-0">
                    Don't have an account? <a href="{{ url('register') }}" class="fw-bold">Sign Up</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/adminlte.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            margin: 60px auto;
            padding: 2rem;
            border-radius: 16px;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .social-btn {
            width: 100%;
            margin-bottom: 10px;
        }

        .divider {
            position: relative;
            text-align: center;
            margin: 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #ccc;
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .divider span {
            background: white;
            padding: 0 1rem;
            color: #888;
        }

        .login-logo {
            width: 120px;
            height: 120px;
            object-fit: contain;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="login-container text-center">
        <img src="{{asset('assets/img/bird.png')}}" class="login-logo" alt="Logo" class="mb-3" />
        <h4 class="fw-bold">Welcome to Trapel</h4>
        <p class="text-muted">Please enter your details to sign in.</p>
        @error('failed')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <form method="POST" action="{{ url('login') }}">
            @csrf

            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" required placeholder="Enter your email" />
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required placeholder="••••••••" />
            </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember" />
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="#" class="text-decoration-none">Forgot password?</a>
            </div>

            <button type="submit" class="btn btn-dark w-100">Sign in</button>
        </form>

        <p class="mt-3 text-muted">Don't have an account? <a href="{{ url('register') }}" class="fw-bold">Sign Up</a>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
     
</body>

</html>
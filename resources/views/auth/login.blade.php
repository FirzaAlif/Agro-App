<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<style>
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .split-screen {
        display: flex;
        height: 100vh;
    }

    .left {
        flex: 1;
        background-image: url('/images/tani.jpg');
        /* Replace with your image path */
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .left .overlay {
        color: white;
        text-align: center;
        padding: 20px;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        font-weight: 200; /* Thin weight */
    }

    .right {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .content {
        max-width: 400px;
        width: 100%;
    }

    .h2, h1 {
        font-weight: 700; /* Bold weight */
    }

    .p {
        font-weight: 400; /* Regular weight */
    }

    .btn-google {
        background-color: #4285F4;
        color: white;
    }

    .btn-google:hover {
        background-color: #357ae8;
    }

    .error {
        color: red;
        font-size: 14px;
        font-weight: 400; /* Regular weight */
    }
</style>

<body>
    <div class="container-fluid split-screen">
        <!-- Left side with image and quote -->
        <div class="row w-100">
            <div class="col-md-6 d-none d-md-flex left">
                <div class="overlay">
                    <h1>Get Everything You Want</h1>
                    <p>You can get everything you want if you work hard, trust the process, and stick to the plan.</p>
                </div>
            </div>

            <!-- Right side with the form -->
            <div class="col-md-6 d-flex justify-content-center align-items-center right">
                <div class="content">
                    <h2 class="text-center">Welcome Back</h2>
                    <p class="text-center">Enter your email and password to access your account</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        <!-- Sign In Button -->
                        <button type="submit" class="btn btn-dark w-100">Sign In</button>

                        <!-- Forgot Password Link -->
                        <div class="text-center mt-3">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                        </div>

                        <!-- Separator -->
                        <hr class="my-4">

                        <!-- Google Sign In -->
                        <button type="button" class="btn btn-google w-100">
                            <i class="fab fa-google me-2"></i> Sign In with Google
                        </button>

                        <!-- Sign Up Link -->
                        <p class="signup-text text-center mt-3">Don't have an account? <a
                                href="{{ route('register') }}">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

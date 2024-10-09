<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Tambahkan ini untuk style -->
    <style>
        /* Styling untuk sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            display: block;
            color: #000;
            padding: 10px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        /* Konten utama harus bergeser ke kanan untuk mengakomodasi sidebar */
        .main-content {
            margin-left: 260px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
        }
        .navbar {
            width: calc(100% - 260px); /* Sesuaikan dengan lebar sidebar */
            position: fixed;
            top: 0;
            left: 260px;
            background-color: #f8f9fa;
            padding: 30px 30px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .navbar a{
            text-decoration: none;
            color: #000;
        }

        /* Untuk tampilan mobile */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }
            .navbar {
                width: 100%;
                left: 0;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            
            <!-- Authentication Links -->
            
        </div>
        <div class="navbar">
            @auth
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endauth
        </div>
        

        <!-- Konten Utama -->
        <div class="main-content">
            <main class="py-4 mt-4" >
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

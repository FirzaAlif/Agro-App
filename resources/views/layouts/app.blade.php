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

    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css') }}">
    
    <!-- Font Awesome (Untuk Ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
        }

        /* Styling untuk sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40; /* Warna sidebar */
            padding-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: width 0.3s;
        }

        .sidebar a {
            display: block;
            color: #ffffff; /* Warna teks */
            padding: 10px 20px; /* Padding dalam tautan */
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #495057; /* Warna latar belakang saat hover */
        }

        /* Konten utama harus bergeser ke kanan untuk mengakomodasi sidebar */
        .main-content {
            margin-left: 260px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
            padding-top: 70px; /* Space for navbar */
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 250px; /* Sesuaikan dengan lebar sidebar */
            right: 0;
            background-color: #ffffff; /* Warna navbar */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000; /* Pastikan navbar selalu di atas */
        }

        .navbar a {
            text-decoration: none;
            color: #333; /* Warna teks link navbar */
        }

        .navbar a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }

        /* Panel Kartu */
        .card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f1f1f1;
            font-weight: bold;
        }

        .card-body {
            padding: 15px;
        }

        /* Grafik */
        .chart-container {
            position: relative;
            height: 400px; /* Sesuaikan tinggi grafik */
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
                left: 0;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="text-center mb-3">
                <h3><a href="{{ url('/') }}" style="text-decoration: none; color: #ffffff;">{{ config('app.name', 'Laravel') }}</a></h3>
            </div>
            <a href="{{ route('farmers.index') }}">Daftar Petani</a>
            <!-- Tambahkan lebih banyak tautan sesuai kebutuhan -->
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Konten Utama -->
        <div class="main-content">
            <main class="py-4">
                <!-- Panel Kartu untuk Statistik -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Statistik Pengguna</div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="userStatsChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Statistik Produk</div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="productStatsChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Konten Utama -->
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Material Dashboard JS -->
    <script src="{{ asset('js/material-dashboard.js') }}"></script>

    <!-- Chart.js untuk Grafik -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Contoh data untuk grafik pengguna
        const userStatsCtx = document.getElementById('userStatsChart').getContext('2d');
        const userStatsChart = new Chart(userStatsCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Pengguna Aktif',
                    data: [12, 19, 3, 5, 2, 3, 7],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });

        // Contoh data untuk grafik produk
        const productStatsCtx = document.getElementById('productStatsChart').getContext('2d');
        const productStatsChart = new Chart(productStatsCtx, {
            type: 'bar',
            data: {
                labels: ['Produk A', 'Produk B', 'Produk C', 'Produk D'],
                datasets: [{
                    label: 'Jumlah Terjual',
                    data: [10, 15, 5, 20],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });
    </script>
</body>
</html>

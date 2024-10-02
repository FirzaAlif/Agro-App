<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;900&family=Playfair+Display:wght@900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 900;
        }

        .video {
            height: 500px;
            padding: 50px 0px;
        }

        .video video {
            min-height: 100%;
            position: fixed;
            top: 0;
            z-index: -999;
        }
    </style>
</head>

<body class="bg-green-100 text-gray-800">

    <!-- Bagian Header -->
    <header class="text-white py-4 fixed top-0 w-full z-50 bg-opacity-75" style="backdrop-filter: blur(50px); -webkit-backdrop-filter: blur(20px);">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="#" class="flex items-center">
                <img src="{{asset('images/logo.png')}}" alt="Logo Agro Malang" class="w-[70px] mr-2">
            </a>
            <nav class="hidden md:flex space-x-4">
                <a href="#tentang" class="hover:underline">Tentang</a>
                <a href="#fitur" class="hover:underline">Fitur</a>
                <a href="#produk" class="hover:underline">Produk</a>
                <a href="#footer" class="hover:underline">Kontak</a>
                <button class="bg-orange-500 px-4 py-2 rounded text-white">Bergabung Sekarang</button>
            </nav>
            <!-- Menu button for mobile view -->
            <button id="menu-button" class="md:hidden flex items-center px-3 py-2 border rounded text-white border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0zM0 7h20v2H0zM0 11h20v2H0z" />
                </svg>
            </button>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#tentang" class="block px-4 py-2 hover:underline">Tentang</a>
            <a href="#fitur" class="block px-4 py-2 hover:underline">Fitur</a>
            <a href="#produk" class="block px-4 py-2 hover:underline">Produk</a>
            <a href="#footer" class="block px-4 py-2 hover:underline">Kontak</a>
            <button class="bg-orange-500 w-full px-4 py-2 rounded text-white">Bergabung Sekarang</button>
        </div>
    </header>

    <script>
        // JavaScript for toggling the mobile menu
        document.getElementById('menu-button').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>

    <!-- Bagian Hero -->

    <section class="relative text-white h-screen pt-16">
        <div class="video">
            <video autoplay muted loop class="absolute inset-0 object-cover w-full h-full">
                <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-green-900 opacity-60"></div> <!-- Latar belakang hijau -->
            <div class="container mx-auto flex flex-col justify-center items-center text-center h-full relative z-10">
                <h2 class="text-6xl font-bold">Selamat Datang di Agro Malang</h2>
                <h2 class="mt-4 text-lg"><span class="typed-text"></span></h2>
            </div>
        </div>
    </section>


    <!-- Bagian Tentang -->
    <section id="tentang" class="py-16 bg-white h-screen">
        <div class="container mx-auto text-center h-full flex flex-col justify-center">
            <h3 class="text-4xl font-bold mb-4">Tentang Agro Malang</h3>
            <p class="text-lg max-w-2xl mx-auto">Agro Malang adalah platform komunitas yang berfokus pada menghubungkan petani lokal dengan konsumen dan mempromosikan produk pertanian khas Malang, seperti apel, sayuran, dan kopi.</p>
        </div>
    </section>

    <!-- Bagian Fitur -->
    <section id="fitur" class="py-16 bg-green-100 h-screen">
        <div class="container mx-auto text-center h-full flex flex-col justify-center">
            <h3 class="text-4xl font-bold mb-8">Fitur Unggulan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-4 bg-white rounded-lg shadow">
                    <h4 class="text-2xl font-semibold">Direct Farm to Table</h4>
                    <p class="mt-2">Beli langsung dari petani dan nikmati produk segar tanpa perantara.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow">
                    <h4 class="text-2xl font-semibold">Tutorial Pertanian Modern</h4>
                    <p class="mt-2">Dapatkan tips dan tutorial untuk bertani yang terintegrasi dengan tradisi lokal.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow">
                    <h4 class="text-2xl font-semibold">Virtual Farm Tour</h4>
                    <p class="mt-2">Kunjungi kebun apel dan ladang pertanian secara virtual untuk pengalaman edukatif.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow">
                    <h4 class="text-2xl font-semibold">Penilaian Keberlanjutan</h4>
                    <p class="mt-2">Dapatkan informasi tentang praktik pertanian ramah lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Produk -->
    <section id="produk" class="py-16 bg-white h-screen">
        <div class="container mx-auto text-center h-full flex flex-col justify-center">
            <h3 class="text-4xl font-bold mb-8">Produk Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div>
                    <img src="https://images.unsplash.com/photo-1567311988109-0e8a7b50c17f" alt="Produk Apel" class="w-full h-64 object-cover rounded-lg">
                    <p class="mt-4">Apel Malang yang segar dan juicy.</p>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1506703512028-e9df14d4d9d4" alt="Produk Sayuran" class="w-full h-64 object-cover rounded-lg">
                    <p class="mt-4">Sayuran organik dari petani lokal.</p>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1504164643012-e1e7de28d0c3" alt="Produk Kopi" class="w-full h-64 object-cover rounded-lg">
                    <p class="mt-4">Kopi khas Malang dengan cita rasa yang khas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Footer -->
    <footer id="footer" class="bg-green-900 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Agro Malang. Semua hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
<script>
    var typed = new Typed('.typed-text', {
        strings: ["Menghubungkan petani lokal dengan konsumen untuk produk pertanian khas Malang."],
        typeSpeed: 50,
        backSpeed: 25,
        loop: true
    });
</script>


</html>
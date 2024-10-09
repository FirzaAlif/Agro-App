<!DOCTYPE html>
<html lang="id">
<!-- AOS CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

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
    <header id="navbar" class="text-white py-4 fixed top-0 w-full z-50 bg-opacity-75 backdrop-blur-lg transition-all duration-300">
        <div class="container max-w-5xl mx-auto flex justify-between items-center px-6 py-2 bg-white bg-opacity-10 backdrop-blur-md" style="border-radius: 20px;">
            <a href="#" class="flex items-center">
                <img src="{{asset('images/logo.png')}}" alt="Logo Agro Malang" class="w-[50px] mr-4">
            </a>
            <nav class="hidden md:flex space-x-6 text-lg">
                <a href="#tentang" class="hover:underline">Tentang</a>
                <a href="#fitur" class="hover:underline">Fitur</a>
                <a href="#produk" class="hover:underline">Produk</a>
                <a href="#footer" class="hover:underline">Kontak</a>
            </nav>
            <button class="bg-orange-500 px-4 py-2 rounded hover:rounded-full text-white">Profile</button>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center text-center">
            <a href="#tentang" class="block w-full px-4 py-2 hover:underline">Tentang</a>
            <a href="#fitur" class="block w-full px-4 py-2 hover:underline">Fitur</a>
            <a href="#produk" class="block w-full px-4 py-2 hover:underline">Produk</a>
            <a href="#footer" class="block w-full px-4 py-2 hover:underline">Kontak</a>
            <button class="bg-orange-500 w-full px-4 py-2 rounded text-white">Bergabung Sekarang</button>
        </div>
    </header>

    <!-- Bagian Hero -->
    <section class="relative text-white h-screen pt-16" data-aos="fade-up">
        <div class="video">
            <video autoplay muted loop class="absolute inset-0 object-cover w-full h-full">
                <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-green-900 opacity-60"></div> <!-- Latar belakang hijau -->
            <div class="h-screen flex flex-col justify-center items-center text-center">
                <div class="container mx-auto flex flex-col justify-center items-center text-center relative z-10">
                    <h2 class="text-6xl font-bold">Selamat Datang di Agro Malang</h2>
                    <h2 class="mt-4 text-lg"><span class="typed-text"></span></h2>
                </div>
            </div>

        </div>
    </section>

    <!-- Bagian Tentang -->
    <section id="tentang" class="py-24 bg-white h-screen" data-aos="fade-up">
        <div class="flex justify-center gap-6 p-10">
            <div class="bg-white rounded-lg w-64 p-6 text-center shadow-md hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                <div class="text-5xl text-indigo-500 mb-4">
                    <i class="fas fa-book"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Perpustakaan Digital dan Non Digital</h3>
                <p class="text-sm text-gray-600">Yang mempunyai koleksi buku sebagian besar dalam bentuk format digital dan yang bisa diakses dengan komputer, dan memiliki perpustakaan non digital / konvensional.</p>
            </div>

            <div class="bg-white rounded-lg w-64 p-6 text-center shadow-md hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                <div class="text-5xl text-indigo-500 mb-4">
                    <i class="fas fa-book"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Perpustakaan Digital dan Non Digital</h3>
                <p class="text-sm text-gray-600">Yang mempunyai koleksi buku sebagian besar dalam bentuk format digital dan yang bisa diakses dengan komputer, dan memiliki perpustakaan non digital / konvensional.</p>
            </div>

            <div class="bg-white rounded-lg w-64 p-6 text-center shadow-md hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                <div class="text-5xl text-indigo-500 mb-4">
                    <i class="fas fa-book"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Perpustakaan Digital dan Non Digital</h3>
                <p class="text-sm text-gray-600">Yang mempunyai koleksi buku sebagian besar dalam bentuk format digital dan yang bisa diakses dengan komputer, dan memiliki perpustakaan non digital / konvensional.</p>
            </div>

            <div class="bg-white rounded-lg w-64 p-6 text-center shadow-md hover:shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                <div class="text-5xl text-indigo-500 mb-4">
                    <i class="fas fa-book"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Perpustakaan Digital dan Non Digital</h3>
                <p class="text-sm text-gray-600">Yang mempunyai koleksi buku sebagian besar dalam bentuk format digital dan yang bisa diakses dengan komputer, dan memiliki perpustakaan non digital / konvensional.</p>
            </div>

            <!-- Repeat for the remaining cards -->
        </div>

        <div class="flex justify-center gap-10 mt-6" data-aos="fade-up">
            <!-- Counter 1 -->
            <div class="text-center" data-aos="zoom-in" data-aos-delay="300">
                <span class="num text-4xl font-bold text-indigo-500" data-val="500">000</span>
                <p class="text-gray-600">Jumlah Petani</p>
            </div>

            <!-- Counter 2 -->
            <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
                <span class="num text-4xl font-bold text-indigo-500" data-val="300">000</span>
                <p class="text-gray-600">Jumlah Lahan</p>
            </div>

            <!-- Counter 3 -->
            <div class="text-center" data-aos="zoom-in" data-aos-delay="500">
                <span class="num text-4xl font-bold text-indigo-500" data-val="200">000</span>
                <p class="text-gray-600">Jumlah Investor</p>
            </div>

            <!-- Counter 4 -->
            <div class="text-center" data-aos="zoom-in" data-aos-delay="600">
                <span class="num text-4xl font-bold text-indigo-500" data-val="150">000</span>
                <p class="text-gray-600">Invest Complete</p>
            </div>
        </div>
    </section>

    <!-- Bagian Fitur -->
    <section id="fitur" class="py-16 bg-green-100 h-screen" data-aos="fade-up">
        <div class="container mx-auto text-center h-full flex flex-col justify-center">
            <h3 class="text-4xl font-bold mb-8">Fitur Unggulan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-4 bg-white rounded-lg shadow" data-aos="flip-left" data-aos-delay="100">
                    <h4 class="text-2xl font-semibold">Direct Farm to Table</h4>
                    <p class="mt-2">Beli langsung dari petani dan nikmati produk segar tanpa perantara.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow" data-aos="flip-left" data-aos-delay="200">
                    <h4 class="text-2xl font-semibold">Tutorial Pertanian Modern</h4>
                    <p class="mt-2">Dapatkan tips dan tutorial untuk bertani yang terintegrasi dengan tradisi lokal.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow" data-aos="flip-left" data-aos-delay="300">
                    <h4 class="text-2xl font-semibold">Akses ke Pembiayaan</h4>
                    <p class="mt-2">Kami membantu petani mendapatkan akses ke sumber pembiayaan yang mudah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Produk -->
    <section id="produk" class="py-16 bg-white h-screen" data-aos="fade-up">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-8">Produk Terbaik Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-4 bg-green-100 rounded-lg shadow">
                    <img src="produk1.jpg" alt="Produk 1" class="rounded-lg mb-4">
                    <h4 class="text-2xl font-semibold">Produk 1</h4>
                    <p class="mt-2">Deskripsi produk 1</p>
                </div>
                <div class="p-4 bg-green-100 rounded-lg shadow">
                    <img src="produk2.jpg" alt="Produk 2" class="rounded-lg mb-4">
                    <h4 class="text-2xl font-semibold">Produk 2</h4>
                    <p class="mt-2">Deskripsi produk 2</p>
                </div>
                <div class="p-4 bg-green-100 rounded-lg shadow">
                    <img src="produk3.jpg" alt="Produk 3" class="rounded-lg mb-4">
                    <h4 class="text-2xl font-semibold">Produk 3</h4>
                    <p class="mt-2">Deskripsi produk 3</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Footer -->
    <footer id="footer" class="py-16 bg-green-900 text-white">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-8">Kontak Kami</h3>
            <p class="mb-4">Email: info@agromalang.com</p>
            <p>Telepon: +62 123 456 789</p>
            <div class="mt-8">
                <a href="#" class="text-indigo-300 hover:underline">Facebook</a>
                <span class="mx-2">|</span>
                <a href="#" class="text-indigo-300 hover:underline">Instagram</a>
                <span class="mx-2">|</span>
                <a href="#" class="text-indigo-300 hover:underline">Twitter</a>
            </div>
        </div>
    </footer>


    <script>
        var typed = new Typed('.typed-text', {
            strings: ["Menghubungkan petani lokal dengan konsumen untuk produk pertanian khas Malang."],
            typeSpeed: 50,
            backSpeed: 25,
            loop: true
        });

        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.style.backdropFilter = 'blur(0px)';
                navbar.style.webkitBackdropFilter = 'blur(0px)'; // Untuk browser WebKit
            } else {
                navbar.style.backdropFilter = 'none';
                navbar.style.webkitBackdropFilter = 'none'; // Untuk browser WebKit
            }
        });
        // Inisialisasi AOS
        AOS.init();

        // Fungsi untuk menghitung angka dengan animasi
        function startCount() {
            let valueDisplays = document.querySelectorAll(".num");
            let interval = 4000; // Durasi total animasi dalam milidetik

            valueDisplays.forEach((valueDisplay) => {
                let startValue = 0;
                let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                let duration = Math.floor(interval / endValue);
                let counter = setInterval(function() {
                    startValue += 1;
                    valueDisplay.textContent = startValue;
                    if (startValue === endValue) {
                        clearInterval(counter);
                    }
                }, duration);
            });
        }

        // Memanggil fungsi untuk memulai penghitungan saat elemen terlihat
        let hasStarted = false; // Untuk memastikan animasi hanya dipanggil sekali
        window.addEventListener('scroll', function() {
            const countersSection = document.querySelector('.flex.justify-center.gap-10.mt-6'); // Ganti selector sesuai kebutuhan
            const sectionPosition = countersSection.getBoundingClientRect().top;

            if (!hasStarted && sectionPosition < window.innerHeight) {
                startCount();
                hasStarted = true; // Set flag agar tidak dijalankan lagi
            }
        });

        document.getElementById('menu-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
        }
    });
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 1) {
            navbar.style.backdropFilter = 'blur(20px)';
            navbar.style.webkitBackdropFilter = 'blur(20px)'; // Untuk browser WebKit
        } else {
            navbar.style.backdropFilter = 'none';
            navbar.style.webkitBackdropFilter = 'none'; // Untuk browser WebKit
        }
    });
    </script>
</body>

</html>
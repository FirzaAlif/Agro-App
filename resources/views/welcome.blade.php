<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InFarm Navigation</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<header>

    <body>
        <div class="header" id="header">
            <nav>
                <div class="nav__bar">
                    <div class="logo nav__logo">
                        <a href="#">InFarm</a>
                    </div>
                    <ul class="nav__links" id="nav-links">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#equipment">Equipment</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                    <div class="nav__menu__btn" id="menu-btn">
                        <i class="ri-menu-line"></i>
                    </div>
                    <div class="nav__action__btn">
                        <button class="btn">
                            <span><i class="ri-user-line"></i></span> Account
                        </button>
                    </div>
                </div>
            </nav>
            <div class="section__container header__container">
                <div class="header__content">
                    <h3 class="section__subheader"><span id="typed"></span></h3>
                    <h1 class="section__header">Menghubungkan petani lokal dengan konsumen untuk produk pertanian khas Malang</h1>
                    <div class="scroll__btn">
                        <a href="#about">
                            Scroll down
                            <span><i class="ri-arrow-down-line"></i></span>
                        </a>
                    </div>
                </div>
                <div class="header__socials">
                    <span>Follow us</span>
                    <a href="#"><i class="ri-instagram-line"></i></a>
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                </div>
            </div>
        </div>
</header>
<section class="about">
    <div class="flex justify-center gap-10 mt-6" data-aos="fade-up">
        <!-- Counter 1 -->
        <div class="text-center" data-aos="zoom-in" data-aos-delay="300">
            <span class="num text-4xl font-bold text-sky-100" data-val="500">000</span>
            <p class="text-stone-300">Jumlah Petani</p>
        </div>

        <!-- Counter 2 -->
        <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
            <span class="num text-4xl font-bold text-sky-100" data-val="300">000</span>
            <p class="text-stone-300">Jumlah Lahan</p>
        </div>

        <!-- Counter 3 -->
        <div class="text-center" data-aos="zoom-in" data-aos-delay="500">
            <span class="num text-4xl font-bold text-sky-100" data-val="200">000</span>
            <p class="text-stone-300">Jumlah Investor</p>
        </div>

        <!-- Counter 4 -->
        <div class="text-center" data-aos="zoom-in" data-aos-delay="600">
            <span class="num text-4xl font-bold text-sky-100" data-val="150">000</span>
            <p class="text-stone-300">Invest Complete</p>
        </div>
    </div>
    <div class="section__container about__container">
        <div class="about__image about__image-1" id="about">
            <img src="{{asset('images/tani.jpg')}}" alt="about" />
        </div>
        <div class="about__content about__content-1">
            <h3 class="section__subheader">Tentang Petani Malang</h3>
            <h2 class="section__header">Petani Unggul</h2>
            <p>
                Para petani yang berasal dari Malang, sebuah kota di Jawa Timur, Indonesia, yang dikenal dengan lahan pertaniannya yang subur. Petani di Malang memiliki peran penting dalam perekonomian lokal, dengan menanam berbagai macam hasil bumi berkat iklim yang mendukung dan tanah vulkanik yang kaya. Beberapa komoditas yang dihasilkan antara lain buah-buahan seperti apel, jeruk, serta beragam sayuran yang sering didistribusikan ke berbagai wilayah di Indonesia. Daerah dataran tinggi Malang juga mendukung perkebunan kopi dan teh, serta dikenal sebagai penghasil produk organik.
            </p>
            <div class="about__btn">
                <a href="#">
                    Read more
                    <span><i class="ri-arrow-right-line"></i></span>
                </a>
            </div>
        </div>
        <div class="about__image about__image-2" id="equipment">
            <img src="{{asset('images/tractor.webp')}}" alt="about" />
        </div>
        <div class="about__content about__content-2">
            <h3 class="section__subheader">Keunggulan Lahan</h3>
            <h2 class="section__header">Lahan Yang Berkualitas</h2>
            <p>
            Malang terletak di wilayah pegunungan yang dikenal dengan tanahnya yang subur, berkat keberadaan gunung-gunung berapi yang memberikan nutrisi alami pada tanah. Ketinggian lahan tersebut, yang berkisar antara 700 hingga 2.000 meter di atas permukaan laut, menciptakan iklim sejuk dan ideal untuk budidaya tanaman-tanaman yang membutuhkan suhu dingin, seperti apel, stroberi, serta berbagai jenis sayuran, termasuk kentang, wortel, dan kubis.
            </p>
            <div class="about__btn">
                <a href="#">
                    Read more
                    <span><i class="ri-arrow-right-line"></i></span>
                </a>
            </div>
        </div>
        <div class="about__image about__image-3" id="blog">
            <img src="{{asset('images/sawah.webp')}}" alt="about" />
        </div>
        <div class="about__content about__content-3">
            <h3 class="section__subheader">Kesuksesan Pertanian</h3>
            <h2 class="section__header">Hasil Pertanian Malang</h2>
            <p>
            Malang telah mencapai kesuksesan yang signifikan berkat berbagai faktor seperti kondisi alam yang ideal, penerapan teknologi modern, dan inovasi di sektor pertanian. Daerah ini dikenal sebagai salah satu pusat pertanian terkemuka di Jawa Timur, dengan beragam komoditas unggulan seperti apel, jeruk, kentang, wortel, cabai, serta kopi dan teh. Kesuburan tanah vulkanik dan iklim yang sejuk, terutama di dataran tinggi seperti Kota Batu dan Poncokusumo, mendukung produktivitas pertanian yang tinggi.
            </p>
            <div class="about__btn">
                <a href="#">
                    Read more
                    <span><i class="ri-arrow-right-line"></i></span>
                </a>
            </div>
        </div>
    </div>

</section>


<footer class="footer">
    <div class="section__container footer__container">
        <div class="footer__col">
            <div class="logo footer__logo">
                <a href="#">MNTN</a>
            </div>
            <p>
                Get out there & discover your next slope, mountains & destination!
            </p>
        </div>
        <div class="footer__col">
            <h4>More on The Blog</h4>
            <ul class="footer__links">
                <li><a href="#">About MNTN</a></li>
                <li><a href="#">Contributors & Writers</a></li>
                <li><a href="#">Write For Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="footer__col">
            <h4>More on MNTN</h4>
            <ul class="footer__links">
                <li><a href="#">The Team</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Press</a></li>
            </ul>
        </div>
    </div>
    <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
    </div>
</footer>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="{{asset('/main.js')}}"></script>
</body>

</html>
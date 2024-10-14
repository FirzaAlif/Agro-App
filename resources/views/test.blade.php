<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InFarm Navigation</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/style.css')}}">
</head>

<header>

    <body>
        <div class="header" id="header">
            <nav>
                <div class="nav_bar">
                    <div class="logo nav_logo">
                        <a href="#">InFarm</a>
                    </div>
                    <ul class="nav_links" id="nav-links">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#equipment">Equipment</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                    <div class="nav_menu_btn" id="menu-btn">
                        <i class="ri-menu-line"></i>
                    </div>
                    <div class="nav_action_btn">
                        <button class="btn">
                            <span><i class="ri-user-line"></i></span> Account
                        </button>
                    </div>
                </div>
            </nav>
            <div class="section_container header_container">
                <div class="header_content">
                    <h3 class="section_subheader">A Harvest Tech Inovation</h3>
                    <h1 class="section_header">
                        Be Prepared For The Harvest Beyond!
                    </h1>
                    <div class="scroll_btn">
                        <a href="#about">
                            Scroll down
                            <span><i class="ri-arrow-down-line"></i></span>
                        </a>
                    </div>
                </div>
                <div class="header_socials">
                    <span>Follow us</span>
                    <a href="#"><i class="ri-instagram-line"></i></a>
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                </div>
            </div>
        </div>
</header>
<section class="about">
    <div class="section_container about_container">
        <div class="about_image about_image-1" id="about">
            <img src="{{asset('images/tani.jpg')}}" alt="">
        </div> 
    </div>
</section>

<script src="{{asset('/main.js')}}"></script>
<script src="https://unpkg.com/scrollreveal"></script>
</body>

</html>
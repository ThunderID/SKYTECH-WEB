@extends('layouts.app')
@section('menu')
<div id="preloader" class="preloader preloader-dark" style="display: none;">
    <div class="loader-status">
        <div class="circle-side"></div>
    </div>
</div>

<!-- Global Overlay -->
<div class="global-overlay shadow-9">
    <div class="overlay-inner bg-image-holder bg-cover zoom-animation" style="background-image: url(images/skytechwallpaper.jpg)">
        <img src="images/skytechwallpaper.jpg" alt="
            background" style="display: none;">
    </div>
    <div class="overlay-inner bg-black opacity-70"></div>
    <div class="frame">
        <div style="background-color:blueviolet !important" class="frame-inner frame-inner-a"></div>
        <div style="background-color:blueviolet !important" class="frame-inner frame-inner-b"></div>
    </div>
</div>

<div class="site-container">

    <!-- Site Header -->
    <header style="margin-left: -50px; margin-top: -50px" class="site-header">
        <!-- Logo -->
        <a href="/" class="logo mx-auto">
            <img src="https://lh3.googleusercontent.com/w2YY_3da0nxuCgUvbP_tsgoyWJMij0rg_Tzd9Bx1BjtStR_nMDTqe6qSioKcFY07Ph6rsJV9nzskq3bgAnn4qmYMR3TJa712SpQFYtgieUCfzU6W3QbwFdgXGazsdPFKEPWe0pVqrnHpUtBI_GRyuSP8_H6NvCZswwiPMJIrC1kSbWkY191o-WfTIgjNsmwp8fr69Hxq7FgVKBX7q8HqsFqIC0JvcvXX2CPr3GlJniLx0oT8LOFVprt0UW6oy3gqT9OU0qQg6LcxaSK_MJa2sspCKFyRhMhGga_iXwMvZc4qF32nqa3pOeqYOsPttAAqNvvdXBz-C5_HXOzykoICmhKAQTvHVSY8WKyxAafXi7RUWaVCP5crg5lbtWpd1TOLQsH1c0ncfMdT1qQ31sZ8nYurtOJq4FOxzVobkaKyO2fXpdk4Rb8rU858KKzfqPrG3dHjOrAnOgBXGVEitd_tL9KndYRIZ9HSa6v4Xel0pP06QaLf_GmaEFRx2RGhpZTESy8Qsx4G7I5Um1BH2AM8VhgQKty2s8GxlD7_msy5jmI9dDXl5gTCFdCP6-ENESJDHNFT-2YlYiclbsIpvzlEVdglUHeDTnksIPAlSs8=w1920-h979" alt="" style="
width: 200px;
"><img src="https://lh3.googleusercontent.com/dY9bY-fJzG5V16_s2cX7u9_WJbBKTGPe6LTBPWKXcbr4EGXMPfCJX38bFbg_Y9F7f8rawXLEa6L3MnXsMpt4NnA0FU1UU7r1ps1bhoWnGhJbYrkSTZGj6nA0J__deOYS8Qkt7hC0XfwesNIX5z0xLzTm_VXatjNJ3nAiWfz2K_fPSaBceXWQbtZZaFXKapJeFNHsuD9FNUI2cfIeayJd8qVl1lW_UT4jko3-NMM2szT0mBagoWXohsgt0E3AUGVtdi-5dQ4bbqzgO_1q7bdN_3j9Z-Uzq6JL5ZgMG_PKwfc51R6llis9_4-DyfyiNOHF5TY1NX1f2cz9XTjQmwpTl8_khgWPAlYA0Tm3jVget7V6N3PfkVuMu5_vxPoBH0mHcstQ_tGSG1TcnschEF3Xjs62-_jUUEjWwRNupberxXVivNudyakfPTsL7EVLtKPOj5NCoML4Ag0eYA7vk0kXizCcKoxSKI51p5HAdKq89kJi5b5MwLrpWi7DNGUBKyAE9vWWIJjzOdMu8J2Lk-rI0Hkr8oodMTetkjCNW0sU7u-dFApWHTV5MzxwttTbxkpH7pc2SzjgHK98EWpVeWZTI6EqE3A2DFINVOP_JBk=w1920-h979" alt="" style="
width: 200px;
margin-top: -200px;
">
        </a>
    </header>

    <!-- Home Block -->
    <div class="home-block">
        <div class="home-block-inner">

            <section id="home" class="d-flex min-vh--100">
                <div class="container align-self-center text-white">
                    <h1 class="mb-3">Skytech</h1>
                    <p class="lead mb-5">
                        Skytech adalah sebuah perusahan Retail Technology, yang menyediakan produk teknologi berupa Laptop, Smartphone, Kamera, IoT Technology (Internet of Things), dan berbagai macam produk teknologi lainnya
                    </p>
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-7">
                            <div class="subscribe-form">
                                <form class="mb-0" id="sf" name="sf" action="include/subscribe.php" method="post" autocomplete="off" novalidate="novalidate">
                                    <div class="row mx-0">

                                        <div class="form-process"></div>

                                        <div class="col-12 col-sm-8 px-0">
                                            <div class="form-group mb-0">
                                                <input type="email" id="sf-email" name="sf-email" placeholder="Enter Your Email Address" class="shadow-3 form-control fc-semi-dark- rounded-0 border--transparent required">
                                            </div>
                                        </div>

                                        <div class="col-12 px-0 d-none">
                                            <input type="text" id="sf-botcheck" name="sf-botcheck" value="" class="form-control">
                                        </div>

                                        <div class="col-12 col-sm-4 px-0">
                                            <button style="background-color:blueviolet !important; border-color:blueviolet !important" class="btn btn-primary rounded-0 btn-block shadow-3" type="submit" id="sf-submit" name="sf-submit">Notify Me</button>
                                        </div>

                                    </div>
                                </form>
                                <div class="subscribe-form-result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <nav class="usefull-nav usefull-nav-pinned light d-none d-xl-flex">
                <ul>
                    <li><a href="https://www.facebook.com/skytech.id" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                    <li><a href="https://www.instagram.com/skytech.id/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCQlZ4k1aix09Ze-du_S94Kw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </nav>

        </div>
    </div><!-- .home-block end -->

    <!-- Site Footer -->
    @include('partials._footer')
</div>
@endsection
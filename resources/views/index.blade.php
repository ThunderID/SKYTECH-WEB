@extends('layouts.app')
@section('menu')
<div id="preloader" class="preloader preloader-dark" style="display: none;">
    <div class="loader-status">
        <div class="circle-side"></div>
    </div>
</div>

<!-- Global Overlay -->
<div class="global-overlay shadow-9">
    <div class="overlay-inner bg-image-holder bg-cover zoom-animation" style="background-image: url(images/background.jpg); background-size: cover;">
        <img src="images/background.jpg" alt="background" style="display: none;">
    </div>
    <div class="overlay-inner bg-black opacity-60"></div>
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
            <img src="./images/logo.png" alt="" style="width: 200px;">
            <img src="./images/logo-text.png" alt="" style="width: 200px;margin-top: -200px;">
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
                                <form class="mb-0" id="sf" name="sf" action="{{ route('subscribing') }}" method="post" autocomplete="off">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row mx-0">
                                        <div class="form-process"></div>
                                        <div class="col-12 col-sm-8 px-0">
                                            <div class="form-group mb-0">
                                            <input type="email" id="sf-email" name="email" value="{{ (request()->has('email')) ? request()->get('email') : ''  }}"  placeholder="Enter Your Email Address" class="shadow-3 form-control fc-semi-dark- rounded-0 border--transparent required">
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

@section('scripts')

@endsection
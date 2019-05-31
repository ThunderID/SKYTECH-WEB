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
        <div style="" class="bg-blueviolet frame-inner frame-inner-a"></div>
        <div style="" class="bg-blueviolet frame-inner frame-inner-b"></div>
    </div>
</div>

<div class="site-container">

    <!-- Site Header -->
    <header style="margin-left: -50px; margin-top: -50px" class="site-header">
        <!-- Logo -->
        <a href="/" class="logo mx-auto">
            <img src="./images/logo.png" alt="" style="width: 200px;">
            <img src="./images/logo-text.png" alt="" style="width: 180px;margin-top: -180px;">
        </a>
    </header>

    <!-- Home Block -->
    <div class="home-block">
        <div class="home-block-inner">

            <section id="home" class="d-flex min-vh--100">
                <div class="container align-self-center text-white" style="margin-top: -90px;">
                    <h1 class="mb-3">Skytech</h1>
                    <p class="lead mb-5">
                        Skytech adalah sebuah perusahan Retail Technology, yang menyediakan produk teknologi berupa Laptop, Smartphone, Kamera, IoT Technology (Internet of Things), dan berbagai macam produk teknologi lainnya
                    </p>
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-7">
                            @include('components.alert')

                            <div class="subscribe-form">
                                <form onsubmit="onSubmit()" class="mb-0" action="{{ route('subscribing') }}" method="post" autocomplete="off">
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
                                            <button id="btnNotify" class="btn btn-primary bg-blueviolet border-blueviolet rounded-0 btn-block shadow-3" type="submit">
                                                <div style="display:none" id="spinner" class="lds-dual-ring"></div>
                                                <span style="margin-left:10px">Notify Me</span>
                                            </button>
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
                <ul class="mb-4">
                    <li><a href="https://www.facebook.com/skytech.id" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                    <li><a href="https://www.instagram.com/skytech.id/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCQlZ4k1aix09Ze-du_S94Kw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <p class="mb-1"><strong>Alamat Store Kami :</strong></p>
                <ul class="mb-0">
                    <li>Lenmarc Mall Surabaya Lantai UG No.33-35 <br/> Jln. Mayjen Yono Suwoyo No. 9, Pradah Kalikendal, Dukuh Pakis,<br/>Surabaya, Jawa Timur - 60226</li>
                </ul>
                <ul class="py-0 mb-3">
                    <li class="py-0">Telp. +623151163029</li>
                </ul>
                <p class="text-center d-block d-lg-none my-3">© 2019 Skytech.id</p>
                <p class="text-left d-none d-lg-block">© 2019 Skytech.id</p>
            </nav>

        </div>
    </div><!-- .home-block end -->

    <script>
    function onSubmit() {
        document.getElementById('spinner').removeAttribute("style")
        document.getElementById('btnNotify').disabled = true
    }
    </script>

    <style>
    .lds-dual-ring {
    display: inline-block;
    width: 10px;
    height: 10px;
    }
    .lds-dual-ring:after {
    content: " ";
    display: block;
    width: 10px;
    height: 10px;
    margin: 1px;
    border-radius: 50%;
    border: 5px solid #fff;
    border-color: #fff transparent #fff transparent;
    animation: lds-dual-ring 1.2s linear infinite;
    }
    @keyframes lds-dual-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }
    </style>
    <!-- Site Footer -->
    @include('partials._footer')
</div>
@endsection

@section('scripts')

@endsection

@section('styles')
    <style>
        .bg-blueviolet{ background-color: blueviolet !important; }
        .border-blueviolet { border-color: blueviolet !important; }
    </style>
@endsection

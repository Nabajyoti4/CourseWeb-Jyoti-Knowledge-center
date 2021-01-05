<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        #mainNav {
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: #ffffff;
        }

        #mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
            color: #000000;
        }

        @media (min-width: 992px) {
            #mainNav {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
                border: none;
                background-color: #ffffff;
                color: #000000;
                transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
            }

            #mainNav .navbar-brand {
                font-size: 1.5em;
                transition: font-size 0.3s ease-in-out;
            }

            #mainNav .navbar-brand img {
                height: 2rem;
                transition: height 0.3s ease-in-out;
            }

            #mainNav.navbar-shrink {
                padding-top: 1rem;
                padding-bottom: 1rem;
                background-color: #212529;
            }

            #mainNav.navbar-shrink .navbar-brand {
                font-size: 1.25em;
            }

            #mainNav.navbar-shrink .navbar-brand svg,
            #mainNav.navbar-shrink .navbar-brand img {
                height: 1.5rem;
            }

            #mainNav .navbar-nav .nav-item {
                margin-right: 1rem;
            }

            #mainNav .navbar-nav .nav-item:last-child {
                margin-right: 0;
            }
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

        .img_class {
            height: 500px;
            background-position: center;
            background-size: cover;
        }
        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 30%;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
        }
        @media screen and (max-width: 426px) {
            .img_class {
                height: 400px;
                background-position: center;
                background-size: cover;
            }
            .carousel-caption {
                right: 15%;
                bottom: 20%;
                left: 15%;
            }
            .padd {
                padding-left: 12px !important;
            }
        }


    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body>
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}


<!-- Links -->
<nav class="navbar navbar-expand-lg p-1 navbar-dark fixed-top shadow" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="">
            <i class="fab fa-html5 fa-2x text-black-50"></i>
            <img src="{{asset('images/navbar-logo.png')}}"  style="height:60px;" alt=""/></a>
        <button class="navbar-toggler navbar-toggler-right text-black-50" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto  font-weight-bold padd">
                <li class="nav-item"><a class="nav-link" style="color:black" href="{{route('welcome')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" style="color:black" href="#about">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:black" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" style="color:black" href="#">Jyoti Bright - Kids House</a>
                        <a class="dropdown-item" style="color:black" href="#">Vedic Maths</a>
                        <a class="dropdown-item" style="color:black" href="#">Mid Brain Activation</a>
                        <a class="dropdown-item" style="color:black" href="#">DMIT Test</a>
                        <a class="dropdown-item" style="color:black" href="#">Hand Writing</a>
                        <a class="dropdown-item" style="color:black" href="#">Fine Arts</a>
                        <a class="dropdown-item" style="color:black" href="#">Spoken English</a>
                        <a class="dropdown-item" style="color:black" href="#">Coaching English</a>
                        <a class="dropdown-item" style="color:black" href="#">Jyoti Public School</a>
                        <a class="dropdown-item" style="color:black" href="#">Day Care Centre</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" style="color:black" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
{{--<nav class="navbar navbar-expand-lg pt-4 pb-4 bg-success fixed-top">--}}
{{--    <div class="container-fluid">--}}
{{--        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"--}}
{{--                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"--}}
{{--                aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">--}}
{{--            <a class="text-white nav-name mr-5" href="{{route('welcome')}}">Jyoti knowledge Center</a>--}}
{{--            <ul class="navbar-nav d-flex align-content-end mb-2 mb-lg-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active text-white subtitle" aria-current="page"--}}
{{--                       href="{{route('welcome')}}">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white subtitle" href="#">About us</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle text-white subtitle" href="#" id="navbarDropdown" role="button"--}}
{{--                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Courses--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="#">Course Name</a>--}}
{{--                        <a class="dropdown-item" href="#">Course Name</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<!-- End Header -->
{{--<div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">--}}
{{--    <div class="carousel-inner" role="listbox">--}}
{{--        <div class="item active background a"></div>--}}
{{--        <div class="item background b"></div>--}}
{{--        <div class="item background c"></div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="covertext">--}}
{{--    <div class="col-lg-10" style="float:none; margin:0 auto;">--}}
{{--        <h1 class="title">Jyoti Knowledge Center</h1>--}}
{{--        <h3 class="subtitle">Online platform for courses</h3>--}}
{{--    </div>--}}
{{--</div>--}}
<div id="carouselExampleCaptions" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <div class="" >
                    <img src="{{asset('images/header-bg.jpg')}}" class="d-block w-100 img_class">
                    <div class="carousel-caption">
                        <h1 class="text-uppercase"><b>Jyoti Knowledge Center</b></h1>
                        <h3>Online platform for courses</h3>
                    </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/header-1-bg.jpg')}}" class="d-block w-100 img_class">
            <div class="carousel-caption">
                <h1 class="text-uppercase"><b>Jyoti Knowledge Center</b></h1>
                <h3>Online platform for courses</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/header-2-bg.jpg')}}" class="d-block w-100 img_class">
            <div class="carousel-caption">
                <h1 class="text-uppercase"><b>Jyoti Knowledge Center</b></h1>
                <h3>Online platform for courses</h3>
            </div>
        </div>
    </div>
</div>
<main>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <p>About Us</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="">

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Animi corporis cupiditate deserunt, dignissimos dolor,
                        exercitationem expedita fugiat illum modi repellendus
                        sequi sunt veritatis! Accusamus accusantium assumenda
                        autem blanditiis cupiditate dignissimos dolore doloremque
                        dolores dolorum eius enim expedita facilis impedit iusto maiores mollitia nemo officia
                        perferendis, placeat quae quasi
                        qui reiciendis repellendus sequi sint suscipit tempora? Aperiam iure molestiae quibusdam
                        voluptate!
                    </p>
                    <a href="about.html" class="learn-more-btn">Learn More</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->
    <hr>
    {{--    <section id="service" class="service">--}}
    {{--        <div class="container" data-aos="fade-up">--}}
    {{--            <div class="section-title">--}}
    {{--                <p>Services</p>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 d-flex align-items-stretch">--}}
    {{--                    <div class="content">--}}
    {{--                        <h3>Service Name</h3>--}}
    {{--                        <p>--}}
    {{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
    {{--                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit--}}
    {{--                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus--}}
    {{--                            optio ad corporis.--}}
    {{--                        </p>--}}
    {{--                        <div class="text-center">--}}
    {{--                            <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 d-flex align-items-stretch mt-4 mt-lg-0">--}}
    {{--                    <div class="content">--}}
    {{--                        <h3>Service Name</h3>--}}
    {{--                        <p>--}}
    {{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
    {{--                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit--}}
    {{--                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus--}}
    {{--                            optio ad corporis.--}}
    {{--                        </p>--}}
    {{--                        <div class="text-center">--}}
    {{--                            <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 d-flex align-items-stretch mt-4 mt-lg-0">--}}
    {{--                    <div class="content">--}}
    {{--                        <h3>Service Name</h3>--}}
    {{--                        <p>--}}
    {{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
    {{--                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit--}}
    {{--                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus--}}
    {{--                            optio ad corporis.--}}
    {{--                        </p>--}}
    {{--                        <div class="text-center">--}}
    {{--                            <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </section><!-- End Why Us Section -->--}}
    {{--    <hr>--}}
    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Popular Courses</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">


                            <h3><a href="{{route('course')}}">Jyoti Bright - Kids House</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">Vedic Maths</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">Mid Brain Activation</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">DMIT Test</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">Hand Writting ( Eng, Assamese, Hindi)</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">Fine Arts</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">Spoken English</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">Coaching English</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">Jyoti Public School</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item shadow">
                        <img src="{{asset('images/nature_big_5.jpg')}}" class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="{{route('course')}}">Day Care Centre</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="{{route('course')}}" style="background:#5fcf80" class="btn btn-primary">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

            </div>

        </div>
    </section><!-- End Popular Courses Section -->
    <section id="contact" class="contact bg-white" >
        <div class="container" data-aos="fade-up">
            <div class="section-title pt-3">
                <p>Contact Us</p>
            </div>
            <div class="row mt-5">

                <div class="col-lg-12 mt-5 pl-5 pr-5 mt-lg-0">

                    <form method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>

<footer class="footer-area">
    <div class="footer-widget-wrap section-bg bg-success p-6">
        <div class="container">
            <div class="row section-gap justify-content-between">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-widget">
                        <ul class="list">
                            <h4>Jyoti Knowledge Center</h4>
                            <li class="d-flex justify-content-between text-justify">
                                Edugate is a great start for an education personnel or organization to start the online
                                business with 1 Click.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-widget">
                        <ul class="hr-list">
                            <br> <br> <br>
                            <li class="d-flex">
                                <i class="fas fa-envelope pr-1"></i> @mail.com
                            </li>
                            <li class="d-flex ">
                                <i class="fas fa-map-marker-alt pr-1"></i> Address full
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-phone-alt pr-1"></i> 987456123, 987456123
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex ">
                    <div class="single-footer-widget">
                        <ul class="list">
                            <h4>Useful Link</h4>
                            <li class="d-flex align-content-center">
                                <a href="{{route('welcome')}}" class="nav-link"><i class="fas fa-chevron-right"></i>
                                    Home</a>
                            </li>
                            <li class="d-flex align-content-center">
                                <a href="#about" class="nav-link"><i class="fas fa-chevron-right"></i> About</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-wrap">
        <div class="container">
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0">
                    Copyright
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

</body>
</html>

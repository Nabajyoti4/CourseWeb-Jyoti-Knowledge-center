<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
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

        .borderdiv {
            position: relative;
            padding: 32px;
            border-radius: 10px;
            border: 2px solid #75b3e2;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .header {
            position: absolute;
            top: -14px;
            left: 1%;
            padding: 0% 2px;
            margin: 0%;
            background: white !important;
        }
    </style>

    <style>
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

        @media screen and (max-width: 426px) {
            .padd {
                padding-left: 12px !important;
            }
        }

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
            <img src="{{asset('images/navbar-logo.png')}}" style="height:60px;" alt=""/></a>
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
            </ul>
        </div>
    </div>
</nav>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="breadcrumb_iner_item">
                        <h2>Course Details</h2>
                        <p>Home<span>/</span>Course Details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main>
    <section id="course-details" class="course-details">
        <div id="colorlib-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1 animate-box">
                        <h3>Admission application form</h3>
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="fname">Application No. : AY 20</label>
                                    <input type="text" class="form-control mb" placeholder="Your firstname">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Registration No. </label>
                                    <input type="text" class="form-control" placeholder="Your lastname">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="email">Application sought in: </label>
                                </div>


                                <div class="col-md-8">
                                    <label for="email">Playground</label>
                                    <input type="checkbox" id="playground" name="playground" value="playground">
                                    <label for="email">Nursery</label>
                                    <input type="checkbox" id="nursery" name="nursery" value="nursery">
                                    <label for="email">LKG</label>
                                    <input type="checkbox" id="LKG" name="LKG" value="LKG">
                                    <label for="email">UKG</label>
                                    <input type="checkbox" id="UKG" name="UKG" value="UKG">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="email">Batch Required : </label>
                                </div>
                                <div class="col-md-8">
                                    <label for="email">Morning</label>
                                    <input type="checkbox" id="LKG" name="morning" value="morning">
                                    <label for="email">Afternoon</label>
                                    <input type="checkbox" id="UKG" name="afternoon" value="afternoon">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="message">Date of birth</label>
                                    <input type="date" class="form-control" name="dob">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">Name of Child: </label>
                                    <input type="text" class="form-control mb" placeholder="Your firstname"
                                           name="child_name">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">Father's Name: </label>
                                    <input type="text" class="form-control mb" placeholder="Your firstname"
                                           name="father_name">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">Name of Child: </label>
                                    <input type="text" class="form-control mb" placeholder="Your firstname"
                                           name="mother_name">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">Address: </label>
                                    <textarea type="text" class="form-control mb" cols="30" rows="5"
                                              placeholder="Your address" name="address"></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">Email: </label>
                                    <input type="email" class="form-control mb" placeholder="Your email" name="email">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">Phone No: </label>
                                    <input type="number" class="form-control mb" placeholder="Your phone no"
                                           name="phone">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="fname">Mobile No: </label>
                                </div>
                                <div class="col-md-8">
                                    <label for="fname">Father: </label>
                                    <input type="number" class="form-control mb" placeholder="Your phone no"
                                           name="father_number">
                                    <label for="fname">Mother: </label>
                                    <input type="number" class="form-control mb" placeholder="Your phone no"
                                           name="mother_number">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="email">Previous Schooling: </label>
                                </div>

                                <div class="col-md-8">
                                    <label for="email">Yes</label>
                                    <input type="checkbox" id="playground" name="playground" value="playground">
                                    <label for="email">No</label>
                                    <input type="checkbox" id="nursery" name="nursery" value="nursery">
                                    <label for="fname">If yes specify: </label>
                                    <textarea type="text" class="form-control mb" cols="30" rows="3"
                                              placeholder="specify" name="specify"></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="email">Is your children toilet-trained?: </label>
                                </div>

                                <div class="col-md-8">
                                    <label for="email">Yes</label>
                                    <input type="checkbox" id="playground" name="playground" value="playground">
                                    <label for="email">No</label>
                                    <input type="checkbox" id="nursery" name="nursery" value="nursery">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="email">How many sibilings does the children have? Give age
                                        details: </label>
                                    <textarea type="text" class="form-control mb" cols="30" rows="3"
                                              placeholder="specify" name="specify"></textarea>
                                </div>
                            </div>
                            <div class="borderdiv">
                                <label class="header font-weight-bold bg-light">Fathers details</label>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="fname">Profession: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Company/Designation: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Qualification: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                    </div>
                                </div>
                            </div>
                            <div class="borderdiv">
                                <label class="header font-weight-bold bg-light">Mother details</label>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="fname">Profession: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Company/Designation: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Qualification: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                    </div>
                                </div>
                            </div>

                            <!--medical history-->
                            <div class="borderdiv">
                                <label class="header font-weight-bold bg-light">Medical & Health Record of the Child</label>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="fname">Sepecific disease suffered in the past , if any: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Operations undergone in the past , if any: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Allergies, if Any: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Any other diseases for which child on regular medication: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Does your child suffer from any phobias?: </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Any special instructions: </label>
                                        <textarea type="text" class="form-control mb" cols="30" rows="3"
                                                  placeholder="specify" name="specify"></textarea>
                                        <label for="fname">Height (in cms): </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                        <label for="fname">Weight (in kgs): </label>
                                        <input type="text" class="form-control mb" placeholder="Your firstname"
                                               name="mother_name">
                                    </div>
                                </div>
                            </div>

                            <!--immunisation history-->
                            <div class="borderdiv">
                                <label class="header font-weight-bold bg-light">Immunisation History</label>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th>VACCINATION</th>
                                                        <th>AGE</th>
                                                        <th>YES</th>
                                                        <th>NO</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>A) BCG</td>
                                                            <td>(0-2 weeks)</td>
                                                            <td><input type="radio"  name="bcg" value="yes"></td>
                                                            <td><input type="radio"  name="bcg" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>B) DPT(I,II,III)</td>
                                                            <td>(6-24 weeks)</td>
                                                            <td><input type="radio"  name="dpt" value="yes"></td>
                                                            <td><input type="radio"  name="dpt" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>C) Oral Polio Vacchine(OPV)</td>
                                                            <td>(6 doses)</td>
                                                            <td><input type="radio"  name="polio" value="yes"></td>
                                                            <td><input type="radio"  name="polio" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>D) Measles</td>
                                                            <td>(8-9 months)</td>
                                                            <td><input type="radio"  name="measles" value="yes"></td>
                                                            <td><input type="radio"  name="measles" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>E) MMR</td>
                                                            <td>(15-18 months)</td>
                                                            <td><input type="radio"  name="mmr" value="yes"></td>
                                                            <td><input type="radio"  name="mmr" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>F) DT</td>
                                                            <td>(4-6 years)</td>
                                                            <td><input type="radio"  name="dt" value="yes"></td>
                                                            <td><input type="radio"  name="dt" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>G) HBV - Hepatitus(I,II,III)</td>
                                                            <td>(upto 24 weeks)</td>
                                                            <td><input type="radio"  name="hbv" value="yes"></td>
                                                            <td><input type="radio"  name="hbv" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>H) Hi B(Meningitis-3doses)</td>
                                                            <td>(Under 1 year)</td>
                                                            <td><input type="radio"  name="hib" value="yes"></td>
                                                            <td><input type="radio"  name="hib" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>I) Chicken Pox</td>
                                                            <td>(after 1 year of age)</td>
                                                            <td><input type="radio"  name="chicken" value="yes"></td>
                                                            <td><input type="radio"  name="chicken" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>J) Typhoid</td>
                                                            <td>(after 2 years of age)</td>
                                                            <td><input type="radio"  name="typhoid" value="yes"></td>
                                                            <td><input type="radio"  name="typhoid" value="no"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>K) Hepatitis A(2 doses)</td>
                                                            <td>(after 1 year of age)</td>
                                                            <td><input type="radio"  name="hepatitis" value="yes"></td>
                                                            <td><input type="radio"  name="hepatitis" value="no"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">What are your Child's strengths as you see?: </label>
                                    <textarea type="text" class="form-control mb" cols="30" rows="5"
                                              placeholder="Your address" name="address"></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">What are his/her key developmental needs as you suggest in next 12 months?: </label>
                                    <textarea type="text" class="form-control mb" cols="30" rows="5"
                                              placeholder="Your address" name="address"></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">What are the activities he/she likes?: </label>
                                    <textarea type="text" class="form-control mb" cols="30" rows="5"
                                              placeholder="Your address" name="address"></textarea>
                                </div>
                            </div>




                            <div class="form-group text-center">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Cource Details Section -->

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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>

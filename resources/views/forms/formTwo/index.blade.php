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
    <script src="{{asset('js/sweetalert2.min.js')}}"></script>

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
@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '{{$message}}',
            showConfirmButton: true,
        })
    </script>
@endif

@include('partials.navbar')

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
            <div class="container border bg-white rounded-lg">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1 animate-box">
                        <h3>Admission application form {{$course}}</h3>
                        <form action="{{route('from-four.store')}}" method="POST">
                            @csrf
                            @method('POST')

                            <input type="hidden" name="course" value="{{$course}}">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="name">Name: </label>
                                    <input type="text" class="form-control mb @error('name') is-invalid @enderror" placeholder="Your firstname"
                                           name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="dob">Date of birth</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob"
                                           value="{{ old('dob') }}">
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="gender">Gender: </label>
                                </div>
                                <div class="col-md-8 @error('gender') is-invalid @enderror">
                                    <label for="male">Male: </label>
                                    <input type="radio"
                                           name="gender" value="male">
                                    <label for=female>Female: </label>
                                    <input type="radio"
                                           name="gender" value="female">
                                </div>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="nationality">Nationality: </label>
                                    <input type="text" class="form-control mb @error('nationality') is-invalid @enderror" placeholder="Your Nationality"
                                           name="nationality" value="{{ old('nationality') }}">
                                    @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="spoken_language">Language (s) Spoken at home: </label>
                                    <input type="text" class="form-control mb @error('spoken_language') is-invalid @enderror" placeholder="Your Language"
                                           name="spoken_language" value="{{ old('spoken_language') }}">
                                    @error('spoken_language')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="address">Residental Address: </label>
                                    <textarea type="text" class="form-control mb @error('address') is-invalid @enderror" cols="30" rows="5"
                                              placeholder="Your address" name="address" >{{ old('address') }}</textarea>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="school">Name of School: </label>
                                    <input type="text" class="form-control mb @error('school') is-invalid @enderror" placeholder="Your school name"
                                           name="school" value="{{ old('school') }}">
                                    @error('school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="class">Class: </label>
                                    <input type="text" class="form-control mb @error('class') is-invalid @enderror" placeholder="Your class"
                                           name="class" value="{{ old('class') }}">
                                    @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="father_name">Father's Name: </label>
                                    <input type="text" class="form-control mb @error('father_name') is-invalid @enderror" placeholder="Your Father's name"
                                           name="father_name" value="{{ old('father_name') }}">
                                    @error('father_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="father_occupation">Occupation: </label>
                                    <input type="text" class="form-control mb @error('father_occupation') is-invalid @enderror" placeholder="Your Father's occupation"
                                           name="father_occupation" value="{{ old('father_occupation') }}">
                                    @error('father_occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="father_contact_no">Contact No: </label>
                                    <input type="text" class="form-control mb @error('father_contact_no') is-invalid @enderror" placeholder="Your Father's Contact"
                                           name="father_contact_no" value="{{ old('father_contact_no') }}">
                                    @error('father_contact_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="father_whatsapp_no">Whatsapp No: </label>
                                    <input type="text" class="form-control mb @error('father_whatsapp_no') is-invalid @enderror" placeholder="Your Father's whatsapp contact"
                                           name="father_whatsapp_no" value="{{ old('father_whatsapp_no') }}">
                                    @error('father_whatsapp_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="father_email">Email: </label>
                                    <input type="email" class="form-control mb @error('father_email') is-invalid @enderror"
                                           placeholder="Your email" name="father_email" value="{{ old('father_email') }}">
                                    @error('father_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="mother_name">Mother's Name: </label>
                                    <input type="text" class="form-control mb @error('mother_name') is-invalid @enderror" placeholder="Your Mother's  name"
                                           name="mother_name" value="{{ old('mother_name') }}">
                                    @error('mother_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="mother_occupation">Occupation: </label>
                                    <input type="text" class="form-control mb @error('mother_occupation') is-invalid @enderror" placeholder="Your Mother's  occupation"
                                           name="mother_occupation" value="{{ old('mother_occupation') }}">
                                    @error('mother_occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="mother_contact_no">Contact No: </label>
                                    <input type="text" class="form-control mb @error('mother_contact_no') is-invalid @enderror" placeholder="Your Mother's Contact"
                                           name="mother_contact_no" value="{{ old('mother_contact_no') }}">
                                    @error('mother_contact_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="mother_whatsapp_no">Whatsapp No: </label>
                                    <input type="text" class="form-control mb @error('mother_whatsapp_no') is-invalid @enderror" placeholder="Your Mother's whatsapp contact"
                                           name="mother_whatsapp_no" value="{{ old('mother_whatsapp_no') }}">
                                    @error('mother_whatsapp_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                 <h3 class="text-center">DECLARATION</h3>
                                    <p>We hereby declare that above statements are true to the best of our knowledge and will abide by the rules and regulations of Jyoti Knowledge Centre</p>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave Cafe HTML Template by Tooplate</title>
    <link  href="{{asset('asset/fontawesome/css/all.min.css')}}" rel="stylesheet">
     <!-- https://fontawesome.com/ -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400')}}" rel="stylesheet" />
    <!-- https://fonts.google.com/ -->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('asset/css/tooplate-wave-cafe.css')}}">
    {{-- <link rel="stylesheet" href="https://www.tooplate.com/view/2121-wave-cafe"> --}}

    <!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
</head>

<body>
    <div class="tm-container ">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top  bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ">
                                    <a class="nav-link btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="tm-row row mt-5">
            <!-- Site Header -->
            <div class="tm-left col-md-5">
                <div class="tm-left-inner">
                    <div class="tm-site-header">
                        <i class="fas fa-coffee fa-3x tm-site-logo"></i>
                        <h1 class="tm-site-name">Wave Cafe</h1>
                    </div>
                    <nav class="tm-site-nav">
                        <ul class="tm-site-nav-ul list-unstyled">

                        <div class="row">
                            <div class="col-6">
                                <li class=" tm-page-nav-item">
                                    <a href="#drink" class="tm-page-link active btn p-1  ">
                                        <i class="fas fa-mug-hot tm-page-link-icon"></i>
                                        <span>Drink Menu</span>
                                    </a>
                                </li>

                            </div>
                            <div class="col-6">
                                <li class="tm-page-nav-item">
                                    <a href="#about" class="tm-page-link  btn p-1 ">
                                        <i class="fas fa-users tm-page-link-icon"></i>
                                        <span>About Us</span>
                                    </a>
                                </li>

                            </div>
                            <div class="col-6">
                                <li class="tm-page-nav-item">
                                    <a href="#special" class="tm-page-link btn ">
                                        <i class="fas fa-glass-martini tm-page-link-icon"></i>
                                        <span>Special Items</span>
                                    </a>
                                </li>

                            </div>
                            <div class="col-6">
                                <li class="tm-page-nav-item">
                                    <a href="#contact" class="tm-page-link btn ">
                                        <i class="fas fa-comments tm-page-link-icon"></i>
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </div>
                        </div>
                        </ul>
                    </nav>
                </div>
            </div>
                    <!-- Drink Menu Page -->
                    <div class="tm-right col-md-7">
                        <main class="tm-main">
                            <div id="drink" class="tm-page-content min-vh-100">
                                <nav class="tm-black-bg tm-drinks-nav">
                                    <ul >
                                        @foreach($categories as $category)
                                        <li class="d-flex">
                                            <a href="{{route('beverDrink')}}" class="tm-tab-link active category" data-id="{{ $category->id }}">{{ $category->category_name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </nav>
                                @foreach($categories as $cat)
                                    <div id="{{ $cat->id }}" class="tm-tab-content">
                                        <div class="tm-list" >
                                            @foreach($beverages as $val)
                                            @if($cat->id == $val->category_id)
                                            <div class="tm-list-item">
                                                <img src="asset/img/{{$val->image}}" alt="Image" class="tm-list-item-img">
                                                <div class="tm-black-bg tm-list-item-text">
                                                    <h3 class="tm-list-item-name">{{$val->Title}}<span
                                                        class="tm-list-item-price">{{$val->Price}}</span></h3>
                                                    <p class="tm-list-item-description">{{$val->Content}}</p>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                    <!-- end Drink Menu Page -->


                    {{-- About Us Page --}}
                    <div id="about" class="tm-page-content">
                        <div class="tm-black-bg tm-mb-20 tm-about-box-1">
                            <h2 class="tm-text-primary tm-about-header">About Wave Cafe</h2>
                            <div class="tm-list-item tm-list-item-2">
                                <img src="{{asset('asset/img/about-1.png')}}" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                                <div class="tm-list-item-text-2">
                                    <p>Wave Cafe is a one-page video background HTML CSS template from Tooplate. You can
                                        use this for your business websites.</p>
                                    <p>You can also use this for your client websites which you get paid for your
                                        website services. Please tell your friends about us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tm-black-bg tm-mb-20 tm-about-box-2">
                            <div class="tm-list-item tm-list-item-2">
                                <div class="tm-list-item-text-2">
                                    <h2 class="tm-text-primary">How we began</h2>
                                    <p>If you wish to support us, please contact Tooplate. Thank you. Duis bibendum erat
                                        nec ipsum consectetur sodales.</p>
                                </div>
                                <img src="{{asset('asset/img/about-2.png')}}" alt="Image"
                                    class="tm-list-item-img tm-list-item-img-big tm-img-right">
                            </div>
                            <p>Donec non urna elit. Quisque ut magna in dui mattis iaculis eu finibus metus. Suspendisse
                                vel mi a lacus finibus vehicula vel ut diam. Nam pellentesque, mi quis ullamcorper.</p>
                        </div>
                    </div>
                    <!-- end About Us Page -->

                    <!-- Special Items Page -->
                    <div id="special" class="tm-page-content ">
                        <div class="tm-special-items row">
                            @foreach($beverages as $spec)
                            @if($spec->Special == 1)
                            <div class="tm-black-bg tm-special-item card col-5">
                                <img src="{{asset('asset/img/'.$spec->image)}}" class="card-img w-100" alt="Image">
                             <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">{{$spec->Title}}</h2>
                                    <p class="tm-special-item-text">{{$spec->Content}}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- end Special Items Page -->

                    <!-- Contact Page -->
                    <div id="contact" class="tm-page-content">
                        <div class="tm-black-bg tm-contact-text-container">
                            <h2 class="tm-text-primary">Contact Wave</h2>
                            <p>Wave Cafe Template has a video background. You can use this layout for your websites
                                Please contact Tooplates Facebook page Tell your friends about our website.</p>
                        </div>
                        <div class="tm-black-bg tm-contact-form-container tm-align-right">
                            <form action="{{ route('submit')}}" method="POST" id="contact-form">
                                @csrf

                                <div class="tm-form-group">
                                    <input type="text" name="full_Name" id="full_Name" class="tm-form-control" placeholder="Name"
                                        required="" />
                                </div>
                                <div class="tm-form-group">
                                    <input type="email" name="email" id="email" class="tm-form-control" placeholder="Email"
                                        required="" />
                                </div>
                                <div class="tm-form-group tm-mb-30">
                                    <textarea rows="6" name="content" id="content" class="tm-form-control" placeholder="Message"
                                        required=""></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="tm-btn-primary tm-align-right">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end Contact Page -->




                </main>
            </div>
        </div>
        <footer class="tm-site-footer">
            <p class="tm-black-bg tm-footer-text">Copyright 2020 Wave Cafe

                | Design: <a href="{{asset('https://www.tooplate.com')}}" class="tm-footer-link" rel="sponsored"
                    target="_parent">Tooplate</a></p>
        </footer>
    </div>

    <!-- Background video -->
    <div class="tm-video-wrapper">
        <i id="tm-video-control-button" class="fas fa-pause"></i>
        <video autoplay muted loop id="tm-video">
            <source src="{{asset('asset/video/wave-cafe-video-bg.mp4')}}" type="video/mp4">
        </video>
    </div>

    <script src="{{asset('asset/js/jquery-3.4.1.min.js')}}"></script>
    <script>

        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;
            const tempVidWidth = windowHeight * vidWidth / vidHeight;
            const tempVidHeight = windowWidth * vidHeight / vidWidth;
            const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
            const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
        }

        function openTab(evt, id) {
            $('.tm-tab-content').hide();
            $('#' + id).show();
            $('.tm-tab-link').removeClass('active');
            $(evt.currentTarget).addClass('active');
        }

        function initPage() {
            let pageId = location.hash;

            if (pageId) {
                highlightMenu($(`.tm-page-link[href^="${pageId}"]`));
                showPage($(pageId));
            }
            else {
                pageId = $('.tm-page-link.active').attr('href');
                showPage($(pageId));
            }
        }

        function highlightMenu(menuItem) {
            $('.tm-page-link').removeClass('active');
            menuItem.addClass('active');
        }

        function showPage(page) {
            $('.tm-page-content').hide();
            page.show();
        }

        $(document).ready(function () {

            /***************** Pages *****************/

            initPage();

            $('.tm-page-link').click(function (event) {

                if (window.innerWidth > 991) {
                    event.preventDefault();
                }

                highlightMenu($(event.currentTarget));
                showPage($(event.currentTarget.hash));
            });


            /***************** Tabs *******************/

            $('.tm-tab-link').on('click', e => {
                e.preventDefault();
                openTab(e, $(e.target).data('id'));
            });

            $('.tm-tab-link.active').click(); // Open default tab


            /************** Video background *********/

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        });

    </script>
</body>

</html>





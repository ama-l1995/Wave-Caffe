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
        <div class="tm-row">
            <!-- Site Header -->
            <div class="tm-left">
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
                                    <a href="#drink" class="tm-page-link btn p-1  active">
                                        <i class="fas fa-mug-hot tm-page-link-icon"></i>
                                        <span>Drink Menu</span>
                                    </a>
                                </li>

                            </div>
                            <div class="col-6">
                                <li class="tm-page-nav-item">
                                    <a href="#about" class="tm-page-link btn p-1 ">
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
                            {{-- Login and Register --}}
                            <div class="col-12 d-flex ">
                                <li class="tm-page-nav-item mx-2">
                                    <a href="{{ route('login') }}" class=" btn btn-dark">
                                        <span>{{ __('Login') }}</span>
                                    </a>
                                </li>

                                <li class="tm-page-nav-item">
                                    <a href="{{ route('register') }}" class="btn btn-dark ">
                                        <span>{{ __('Register') }}</span>
                                    </a>
                                </li>
                            </div>
                        </div>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="tm-right">
                <main class="tm-main">
                    <div id="drink" class="tm-page-content min-vh-100">
                        <!-- Drink Menu Page -->

                        @yield('content')

                <!-- end Drink Menu Page -->

                    <!-- About Us Page -->
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
                    <div id="special" class="tm-page-content">
                        <div class="tm-special-items">
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-01.jpg" alt="Image">
                             <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Special One</h2>
                                    <p class="tm-special-item-text">Here is a short text description for the first
                                        special item. You are not allowed to redistribute this template ZIP file.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-02.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Second Item</h2>
                                    <p class="tm-special-item-text">You are allowed to download, modify and use this
                                        template for your commercial or non-commercial websites.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-03.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Third Special Item</h2>
                                    <p class="tm-special-item-text">Pellentesque in ultrices mi, quis mollis nulla.
                                        Quisque sed commodo est, quis tincidunt nunc.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-04.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Special Item Fourth</h2>
                                    <p class="tm-special-item-text">Vivamus finibus nulla sed metus sagittis, sed
                                        ultrices magna aliquam. Mauris fermentum.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-05.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Sixth Sense</h2>
                                    <p class="tm-special-item-text">Here is a short text description for sixth item.
                                        This text is four lines.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-06.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Seventh Item</h2>
                                    <p class="tm-special-item-text">Curabitur eget erat sit amet sapien aliquet
                                        vulputate quis sed arcu.</p>
                                </div>
                            </div>
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
            {{-- <source src="{{asset('asset/video/wave-cafe-video-bg.mp4')}}" type="video/mp4"> --}}
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





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>ECOS - Educational Consulting Success</title>
    <meta name="description" content="Ecos- Educational Consulting Success">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/inc/custom-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/inc/custom-slider/css/preview.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        .mine{
            text-align: justify;
            text-justify: inter-word;
        }
        .error{
            color: red;
        }
        .success{
            color: #13a004;
        }
    </style>
    @livewireStyles
</head>

<body class="defult-home">

    <div class="offwrap"></div>


    <!-- Main content Start -->
    <div class="main-content">


    <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header style2 header-transparent">
                <!-- Topbar Area Start -->
                <div class="topbar-area style1">
                    <div class="container custom">
                        <div class="row y-middle">
                            <div class="col-lg-7">
                                <div class="topbar-contact">
                                    <ul>
                                        <li>
                                            <i class="flaticon-email"></i>
                                            <a href="mailto:infoecos2@gmail.com">infoecos2@gmail.com</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-call"></i>
                                            <a href="tel:(+250) 788 318 255"> (+250) 788 318 255</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-call"></i>
                                            <a href="tel:(+250) 788 647 326"> (+250) 788 647 326</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 text-right">
                                <div class="toolbar-sl-share">
                                    <ul>
                                        <li class="opening"> <em><i class="flaticon-clock"></i>Monday - Friday / 8AM -
                                                17PM</em> </li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container custom">
                        <div class="row-table">
                            <div class="col-cell header-logo">
                                <div class="logo-area">
                                    <a href="{{ route('welcome') }}">
                                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu hidden-md">
                                            <ul class="nav-menu">
                                                <li>
                                                    <a href="{{ route('welcome') }}">Home</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('about') }}">About Us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('about') }}">About ECOS</a></li>
{{--                                                        <li><a href="{{ route('team') }}">Our Team</a></li>--}}
                                                        <li><a href="{{ route('partners') }}">Clients</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('achievements') }}">Achievements</a>
                                                    <ul class="sub-menu">
                                                       @yield('links')
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('services') }}">Services</a>
                                                <li>
                                                    <a href="{{ route('testimonials') }}">Testimonials</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Contact</a>
                                                </li>
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li class="search-parent">
                                            <a class="hidden-xs rs-search" data-bs-toggle="modal"
                                                data-bs-target="#searchModal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li class="humburger">
                                            <a id="nav-expander" class="nav-expander bar" href="#">
                                                <div class="bar">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <a id="nav-close" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <div class="canvas-logo">
                        <a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text mine">
                        <p>The Educational Consulting Success, ECOS Ltd is a dynamic and
                            independent research & consultancy company. Through the tailored
                            consultancy, trainings, coaching and advisory services, we support
                            a wide range of International, Regional,
                            Local organizations and individuals to achieve their respective
                            objectives in effective and efficient ways.</p>
                    </div>
                    {{-- <div class="media-img">
                        <img src="assets/images/off2.jpg" alt="Images">
                    </div> --}}
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address</h4>
                                    <em>RWANDA, KIGALI CITY
                                        Gasabo District, MOUCECORE BUILDINGS,
                                        KG 686 ST | P.O Box 2113 Kigali RWANDA</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:infoecos2@gmail.com">infoecos2@gmail.com</a></em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Phone</h4>
                                    <em>+250 788 647 326</em>
                                </div>
                            </div>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->

                <!-- Canvas Mobile Menu start -->
                <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                    <div class="close-btn">
                        <a id="nav-close2" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <ul class="nav-menu">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('about') }}">About</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('about') }}">About Ecos</a></li>
                                <li><a href="{{ route('partners') }}">Clients</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('achievements') }}">Achievements</a>
                            <ul class="sub-menu">
                                <a href="{{ route('achievements') }}">Select Achievement</a>
                                @yield('links')
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('services') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('testimonials') }}">Testimonials</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul> <!-- //.nav-menu -->
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address</h4>
                                    <em>05 kandi BR. New York</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Phone</h4>
                                    <em>+019988772</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
    <!--Full width header End-->

       {{ $slot }}

    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer style1 footer-home3-style">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 ">
                        <div class="footer-logo mb-40">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/logo-dark.png') }}" alt=""></a>
                        </div>
                          <div class=" text-widget mine white-color pb-40"><p>The Educational Consulting Success, ECOS Ltd is a dynamic and independent
                                  research & consultancy company. Through the tailored consultancy, trainings, coaching and advisory services,
                                  we support a wide range of International, Regional, Local organizations and individuals to achieve their respective
                                  objectives in effective and efficient ways.</p>
                          </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                        <h3 class="footer-title">Pages</h3>
                        <ul class="site-map">
                            <li><a href="{{ route('about') }}">About Ecos</a></li>
                            <li><a href="{{ route('partners') }}">Our Clients</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('achievements') }}">Achievements</a></li>
                            <li><a href="{{ route('testimonials') }}">Contact</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                        <h3 class="footer-title">Contact Info</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">P.O Box 2113 Kigali Rwanda<br>
                                    KIGALI, RWANDA <br>
                                    MOUCECORE BUILDINGS, KG 686 ST
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="tel:(+250) 788 318 255">(+250) 788 318 255</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                   <a href="tel:(+250) 788 647 326">(+250) 788 647 326</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:info@ecosltd.com">info@ecosltd.com</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-clock-1"></i>
                                <div class="desc">
                                    Office Hours: 9AM - 17PM
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <h3 class="footer-title">Newsletter</h3>
                        <p class="widget-desc white-color">Stay up to update with our latest news and products.</p>
                        <livewire:news-letter-component />
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                        <ul class="copy-right-menu">
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('partners') }}">Clients</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright text-lg-start text-center ">
                            <p>© ECOS Ltd - {{ \Carbon\Carbon::now()->format('Y') }}. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="blue-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div class="modal fade search-modal" id="searchModal" tabindex="-1">
        <button type="button" class="close" data-bs-dismiss="modal">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <livewire:search-achievement />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    @livewireScripts
    <!-- modernizr js -->
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
     <!-- waypoints.min js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- counterup.min js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('assets/inc/custom-slider/js/jquery.nivo.slider.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('assets/js/contact.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>

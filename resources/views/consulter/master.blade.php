<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dev_raj">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ======== Page title ============ -->
    <title>{{$landingPage->website_title}}</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset($landingPage->website_icon)}}">
    <!-- ===========  All Stylesheet ================= -->
    <link rel="stylesheet" href="{{asset('dist/css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">

</head>

<body class="body-wrapper">

    <!-- preloader start -->
    <div id="preloader">
        <div class="preloader-close">x</div>
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- preloader start -->

    <!-- header end -->
    <header class="header header-1 transparent header-3 hover-color-green">
        <div class="top-header d-none d-xl-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8">
                        <div class="header-cta">
                            <ul>
                                <li><a><i class="fal fa-clock"></i> {{$personalInformation->working_time}}</a></li>
                                <li><a><i class="fal fa-clock"></i> {{$personalInformation->weekly_holiday}}</a></li>
                                <li><a href="mailto:{{$personalInformation->email}}"><i class="icon-email"></i>{{$personalInformation->email}}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="header-right-socail d-flex justify-content-end align-items-center">
                            <h6 class="font-la color-white fw-600">Follow On:</h6>

                            <div class="social-profile">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header-wraper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="{{route('home')}}">
                                        <img height="40px" width="auto" src="{{$landingPage->logo}}" alt="logo">
                                    </a>
                                </div>
                            </div>

                            <div class="header-menu d-none d-xl-block">
                                <div class="main-menu">
                                    <ul>
                                        <li>
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('services')}}">Our Services</a>
                                        </li>
                                        <li>
                                            <a>Pages</a>
                                            <ul>
                                                <li><a href="{{route('about')}}">About</a></li>
                                                <li><a href="{{route('pricing')}}">Pricing Table</a></li>
                                                <li><a href="{{route('team')}}">Team</a></li>
                                                <li><a href="{{route('projects')}}">Our Project</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('blogs')}}">Blog</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="header-right d-flex align-items-center">
                                <div class="header-search">
                                    <a class="search-toggle" data-selector=".header-search">
                                        <span class="fas fa-search"></span>
                                    </a>

                                    <form class="search-box" action="#" method="get">
                                        <div class="form-group d-flex align-items-center">
                                            <input type="search" class="search-input" id="search-input"
                                                placeholder="Search">
                                            <button type="submit" class="search-submit"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                        <ul id="search-results"
                                            class="dropdown-menu dropdown-menu-end mt-2"
                                            style="display: none; position: absolute; z-index: 1000; width: auto; max-height: 300px; overflow-y: auto;">
                                            <!-- Results will be appended here -->
                                        </ul>
                                    </form>
                                </div>

                                <div class="horizontal-bar d-none d-md-block"></div>

                                <a href="tel:+1235568824" class="header-contact d-none d-md-flex align-items-center">
                                    <div class="icon color-primary">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="text">
                                        <span class="font-la mb-2 d-block fw-500">Contact For Support</span>
                                        <h5 class="fw-500">{{$personalInformation->contact_number}}</h5>
                                    </div>
                                </a>

                                <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                    <div class="mobile-nav-wrap">
                                        <div id="hamburger">
                                            <i class="fal fa-bars text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- mobile menu - responsive menu  -->
    <div class="mobile-nav">
        <button type="button" class="close-nav">
            <i class="fal fa-times-circle"></i>
        </button>

        <nav class="sidebar-nav">
            <div class="navigation">
                <div class="consulter-mobile-nav">
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('services')}}">Our Services</a>
                        </li>
                        <li>
                            <a>Pages</a>
                            <ul>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('pricing')}}">Pricing Table</a></li>
                                <li><a href="{{route('team')}}">Team</a></li>
                                <li><a href="{{route('projects')}}">Our Project</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('blogs')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-nav__bottom mt-20">
                    <div class="sidebar-nav__bottom-contact-infos mb-20">
                        <h6 class="color-black mb-5">Contact Info</h6>

                        <ul>
                            <li><a><i class="fal fa-clock"></i>{{$personalInformation->working_time}}</a></li>
                            <li><a href="mailto:{{$personalInformation->email}}"><i
                                        class="icon-email"></i>{{$personalInformation->email}}</a></li>
                            <li>
                                <a class="header-contact d-flex align-items-center">
                                    <div class="icon">
                                        <i class="icon-call"></i>
                                        <!-- <img src="dist/img/icon/phone-1.svg" alt=""> -->
                                    </div>
                                    <div class="text">
                                        <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                        <h5 class="fw-500">{{$personalInformation->contact_number}}</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-nav__bottom-social">
                        <h6 class="color-black mb-5">Follow On:</h6>

                        <ul>
                            <li><a href="{{$personalInformation->facebook_link}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$personalInformation->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$personalInformation->instagram_link}}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{$personalInformation->linked_in_link}}"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas-overlay -->
    <!-- header end -->

    <!-- page-banner start -->
    @include('consulter.partials.landing')
    <!-- page-banner end -->

    <!-- about us start -->
    @include('consulter.partials.about')
    <!-- about us end -->

    <!-- projects start -->
    @include('consulter.partials.projects')
    <!-- projects end -->

    <!-- team start -->
    @include('consulter.partials.team')
    <!-- team end -->

    <!-- testimonial start -->
    @include('consulter.partials.testimonial')
    <!-- testimonial end -->

    <!-- contact us start -->
    @include('consulter.partials.contact')
    <!-- contact us end -->

    <!-- contact us start -->
    @include('consulter.partials.blogs')
    <!-- contact us end -->



    <!-- footer start -->
    <footer class="footer-1 overflow-hidden">
        <div class="footer-top mb-xs-5 mb-sm-10 mb-md-15 mb-lg-20 mb-25 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-footer-wid site_info_box">
                            <a href="{{ route('home') }}" class="d-block mb-20">
                                <img height="70px" width="auto" src="{{asset($landingPage->logo)}}" alt="">
                            </a>

                            <div class="description font-la color-white">
                                <p>
                                    We believe in collaborative partnerships. Our consultants work closely with you to understand
                                    your challenges and opportunities, ensuring that our strategies align with your goals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="single-footer-wid newsletter_widget">
                            <h6 class="title d-flex align-items-center color-white mb-30"><img
                                    src="dist/img/icon/notification.svg" alt="">Your Path to Growth</h6>

                            <div class="description font-la color-white">
                                <p>
                                    We are committed to driving tangible results. Our consultants leverage data-driven insights and best practices to help you achieve sustainable growth and success. We work closely with you, understanding your unique challenges and opportunities, to develop tailored strategies that deliver measurable impact. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="single-footer-wid contact_widget">
                        <h4 class="wid-title mb-30 color-white">Working Time</h4>

                        <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                            <div class="wid-contact pb-30 mb-25">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>{{$personalInformation->working_time}}</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="far fa-clock"></i>
                                        </div>

                                        <div class="contact-info font-la color-white">
                                            <p>{{$personalInformation->weekly_holiday}} Close</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="social-profile">
                                <ul>
                                    <li><a href="{{$personalInformation->facebook_link}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$personalInformation->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$personalInformation->instagram_link}}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{$personalInformation->linked_in_link}}"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-3 - single-footer-wid -->

                <div class="col-md-6 col-xl-2">
                    <div class="single-footer-wid pl-xl-10 pl-50">
                        <h4 class="wid-title mb-30 color-white">Quick Link</h4>

                        <ul>
                            <li><a href="{{route('home')}}">About Company</a></li>
                            <li><a href="{{route('services')}}">Our Services</a></li>
                            <li><a href="{{route('blogs')}}">Investor Presentation</a></li>
                            <li><a href="{{route('projects')}}">Investor Career</a></li>
                            <li><a href="{{route('team')}}">Meet Our Team</a></li>
                            <li><a href="{{route('contact')}}">Support</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.col-lg-2 - single-footer-wid -->

                <div class="col-md-6 col-xl-4">
                    <div class="single-footer-wid recent_post_widget pl-xl-10 pl-65 pr-50 pr-xl-30">
                        <h4 class="wid-title mb-30 color-white">Resent Post</h4>

                        <div class="recent-post-list">
                            <?php $blog_data = $blog->reverse() ?>
                            @foreach ($blog_data->take(2) as $_data)
                            <a href="{{route('blog.details',$_data->slug)}}"
                                class="single-recent-post mb-20 pb-20 d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{asset($_data->image)}}" alt="">
                                </div>

                                <div class="post-data">
                                    <h5 class="color-white mb-10 fw-600">{{$_data->title}}</h5>
                                    <span class="color-white d-flex ailign-items-center"><i
                                            class="far fa-clock"></i>{{$_data->created_at->format('d M Y')}}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 - single-footer-wid -->

                <div class="col-md-6 col-xl-3">
                    <div class="single-footer-wid">
                        <h4 class="wid-title mb-30 color-white">Office Location</h4>
                        <iframe
                            src="{{$personalInformation->google_map_location}}"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- /.col-lg-3 - single-footer-wid -->
            </div>
        </div>

        <div class="footer-bottom overflow-hidden">
            <div class="container">
                <div
                    class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="coppyright text-center text-md-start">
                        © <?php echo date("Y"); ?> <strong>{{ $landingPage->website_title }}</strong> | Developed by <a href="https://tarunsoft.com" target="_blank">Tarun Soft</a>
                    </div>

                    <div class="footer-bottom-list last_no_bullet">
                        <ul>
                            <li><a href="{{route('about')}}">Terms & Conditions</a></li>
                            <li><a href="{{route('about')}}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="{{asset('dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dist/js/jquery.easing.js')}}"></script>
    <script src="{{asset('dist/js/slick.min.js')}}"></script>
    <script src="{{asset('dist/js/scrollUp.min.js')}}"></script>
    <script src="{{asset('dist/js/counterup.min.js')}}"></script>
    <script src="{{asset('dist/js/jquery.sticky-kit.js')}}"></script>
    <script src="{{asset('dist/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('dist/js/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('dist/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('dist/js/wow.min.js')}}"></script>
    <script src="{{asset('dist/js/active.js')}}"></script>
    <!-- Sub-resource Integrity -->
    <script src="/static/ui.bundle-7f3c1.js"
    integrity="sha384-Xx..." crossorigin="anonymous"></script>

    <!-- Content-Security-Policy -->
    <meta http-equiv="Content-Security-Policy"
    content="default-src 'self'; script-src 'self' 'sha256-...'; object-src 'none';">

    @include('consulter.partials.script')
</body>

</html>
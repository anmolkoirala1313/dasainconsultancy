<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{ucwords(@$setting_data->meta_description ?? '')}}"/>
    <meta name="keywords" content=" {{@$setting_data->meta_tags ?? ''}}">
    <link rel="canonical" href="https://s.com.np" />

    @if (\Request::is('/'))
        <title> {{ucwords($setting_data->title ?? '')}}</title>
    @else
        <title>@yield('title') |  {{ucwords($setting_data->title ?? '')}} </title>
    @endif

    <meta property="og:title" content="{{ucwords(@$setting_data->meta_title ?? '')}}" />
    <meta property="og:type" content="Consultancy" />
    <meta property="og:url" content="https://s.com.np" />
    <meta property="og:site_name" content="{{ucwords($setting_data->title ?? '')}}" />
    <meta property="og:description" content="{{ucwords(@$setting_data->meta_description ?? '')}}" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting_data->favicon ?  asset(imagePath($setting_data->favicon)) : ''}}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bixola-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/timepicker/timePicker.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bixola.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bixola-responsive.css') }}" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>

    @yield('css')
    @stack('styles')
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header-three">
            <div class="main-header-three__top">
                <div class="container">
                    <div class="main-header-three__top-inner">
                        <div class="main-header-three__top-left">
                            <ul class="list-unstyled main-header-three__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:{{ $setting_data->phone ?? $setting_data->mobile }}">{{ $setting_data->phone ?? $setting_data->mobile }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:{{ $setting_data->email ?? '' }}">{{ $setting_data->email ?? '' }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-location-1"></i>
                                    </div>
                                    <div class="text">
                                        <p>{{ $setting_data->address ?? '' }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header-three__top-text-and-social">
                            {{--                        <div class="main-header-three__top-text">--}}
                            {{--                            <p><span class="icon-three-o-clock-clock"></span> Monday - Friday / 8AM - 11PM</p>--}}
                            {{--                        </div>--}}
                            <div class="main-header-three__top-social">
                                @if(@$setting_data->facebook)
                                    <a href="{{$setting_data->facebook}}"><i class="fab fa-facebook"></i></a>
                                @endif
                                @if(@$setting_data->instagram)
                                    <a href="{{$setting_data->instagram}}"><i class="fab fa-instagram"></i></a>
                                @endif
                                @if(@$setting_data->youtube)
                                    <a href="{{$setting_data->youtube}}"><i class="fab fa-youtube"></i></a>
                                @endif
                                @if(@$setting_data->linkedin)
                                    <a href="{{$setting_data->linkedin}}"><i class="fab fa-linkedin"></i></a>
                                @endif
                                @if(!empty(@$setting_data->ticktock))
                                    <a href="{{$setting_data->ticktock}}"><i class="fab fa-tiktok"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="container">
                        <div class="main-menu-three__wrapper-inner">
                            <div class="main-menu-three__logo">
                                <a href="/"><img src="{{ $setting_data->logo_white ?  asset(imagePath($setting_data->logo_white)) : asset(imagePath($setting_data->logo))}}" style="max-width: 230px;" alt=""></a>
                            </div>
                            <div class="main-menu-three__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current megamenu">
                                        <a href="/">Home </a>
                                        <ul>
                                            <li>
                                                <section class="home-showcase">
                                                    <div class="container">
                                                        <div class="home-showcase__inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-1-1.jpg"
                                                                                 alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index-2.html"
                                                                                   class="thm-btn home-showcase__buttons__item">Multi
                                                                                    Page</a>
                                                                                <a href="index-one-page.html"
                                                                                   class="thm-btn home-showcase__buttons__item">One
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div><!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">Home Page 01
                                                                        </h3>
                                                                        <!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                                <div class="col-lg-2">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-1-2.jpg"
                                                                                 alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index2.html"
                                                                                   class="thm-btn home-showcase__buttons__item">Multi
                                                                                    Page</a>
                                                                                <a href="index2-one-page.html"
                                                                                   class="thm-btn home-showcase__buttons__item">One
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div><!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">Home
                                                                            Page
                                                                            02
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                                <div class="col-lg-2">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-1-3.jpg"
                                                                                 alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index3.html"
                                                                                   class="thm-btn home-showcase__buttons__item">Multi
                                                                                    Page</a>
                                                                                <a href="index3-one-page.html"
                                                                                   class="thm-btn home-showcase__buttons__item">One
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div><!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">Home
                                                                            Page
                                                                            03
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                                <div class="col-lg-2">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-1-4.jpg"
                                                                                 alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index4.html"
                                                                                   class="thm-btn home-showcase__buttons__item">Multi
                                                                                    Page</a>
                                                                                <a href="index4-one-page.html"
                                                                                   class="thm-btn home-showcase__buttons__item">One
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div><!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">Home
                                                                            Page
                                                                            04
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                                <div class="col-lg-2">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-1-5.jpg"
                                                                                 alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index5.html"
                                                                                   class="thm-btn home-showcase__buttons__item">Multi
                                                                                    Page</a>
                                                                                <a href="index5-one-page.html"
                                                                                   class="thm-btn home-showcase__buttons__item">One
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div><!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">Home
                                                                            Page
                                                                            05
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                                <div class="col-lg-2">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-1-6.jpg"
                                                                                 alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index-dark.html"
                                                                                   class="thm-btn home-showcase__buttons__item">View
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div><!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">Home
                                                                            Page
                                                                            06
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.home-showcase__inner -->

                                                    </div><!-- /.container -->
                                                </section>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-carousel.html">Services Carousel</a></li>
                                            <li><a href="business-audit.html">Business Audit</a></li>
                                            <li><a href="business-planning.html">Business Planning</a></li>
                                            <li><a href="financial-advices.html">Financial Advices</a></li>
                                            <li><a href="tax-strategy.html">Tax Strategy</a></li>
                                            <li><a href="insurance-strategy.html">Insurance Strategy</a></li>
                                            <li><a href="start-ups.html">Start Ups</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-carousel.html">Team Carousel</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="testimonials-carousel.html">Testimonial Carousel</a></li>
                                            <li><a href="price.html">Pricing</a></li>
                                            <li><a href="price-carousel.html">Pricing Carousel</a></li>
                                            <li><a href="appointment.html">Appointment</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">News</a>
                                        <ul class="sub-menu">
                                            <li class="dropdown">
                                                <a href="#">News Grid</a>
                                                <ul>
                                                    <li><a href="news.html">No Sidebar</a></li>
                                                    <li><a href="news-left.html">Left Sidebar</a></li>
                                                    <li><a href="news-right.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">News List One</a>
                                                <ul>
                                                    <li><a href="news-list-1.html">No Sidebar</a></li>
                                                    <li><a href="news-list-one-left.html">Left Sidebar</a></li>
                                                    <li><a href="news-list-one-right.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">News List Two</a>
                                                <ul>
                                                    <li><a href="news-list-2.html">No Sidebar</a></li>
                                                    <li><a href="news-list-two-left.html">Left Sidebar</a></li>
                                                    <li><a href="news-list-two-right.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">News List Three</a>
                                                <ul>
                                                    <li><a href="news-list-3.html">No Sidebar</a></li>
                                                    <li><a href="news-list-three-left.html">Left Sidebar</a></li>
                                                    <li><a href="news-list-three-right.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="news-carousel.html">News Carousel</a></li>
                                            <li><a href="news-details.html">News details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu-three__right">
                                <div class="main-menu-three__search-box">
                                    <a href="#"
                                       class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu-three__btn-box">
                                    <a href="contact.html" class="thm-btn main-menu-three__btn thm-btn">Get
                                        Consulting</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


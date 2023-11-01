@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')

    <section class="main-slider">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
             data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            @foreach($data['sliders']  as $index=>$slider)
                <div class="item main-slider__slide-{{$index+1}}">
                    <div class="main-slider__bg"
                         style="background-image: url( {{ asset(imagePath($slider->image)) }});">
                    </div><!-- /.slider-one__bg -->

                    <div class="main-slider__shape-1 rotate-me">
                        <img src="{{ asset('assets/frontend/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-2 float-bob-x">
                        <img src="{{ asset('assets/frontend/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>

                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">{{ $slider->subtitle ?? '' }}</p>
                            <h2 class="main-slider__title">{{ $slider->title ?? '' }}</h2>
                            @if($slider->link)
                                <div class="main-slider__btn-and-video-box">
                                    <div class="main-slider__btn-box">
                                        <a href="{{ $slider->link ?? '' }}" class="thm-btn main-slider__btn-{{ $loop->even ? '1':'2'}}">{{ $slider->link ?? 'View More' }}</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--Main Sllider Start -->

    @if($data['homepage']->mission)
        <section class="feature-two">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 d-flex align-items-stretch wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-business-advice"></span>
                            </div>
                            <h3 class="feature-two__title"><a>Mission</a></h3>
                            <p class="feature-two__text">{{ $data['homepage']->mission ?? '' }}</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 d-flex align-items-stretch wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-icon-start-ups"></span>
                            </div>
                            <h3 class="feature-two__title"><a>Vision</a></h3>
                            <p class="feature-two__text">{{ $data['homepage']->vision ?? '' }}</p>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 d-flex align-items-stretch wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-risk-management"></span>
                            </div>
                            <h3 class="feature-two__title"><a>Value</a></h3>
                            <p class="feature-two__text">{{ $data['homepage']->value ?? '' }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

    @if($data['homepage']->description)
        <section class="about-two">
            <div class="about-three__shape-5">
                <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/about-three-shape-5.png') }}" alt="">
            </div>
            <div class="about-two__shape-2 zoominout">
                <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/about-two-shape-2.png') }}" alt="">
            </div>
            <div class="about-two__shape-3 float-bob-y">
                <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/about-two-shape-3.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-two__left {{ $data['homepage']->image_position == 'left' ? 'custom_left':'' }}">
                            @if($data['homepage']->image_position == 'left')
                                @include($module.'partials.welcome_image')
                            @else
                                @include($module.'partials.welcome_description')
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-two__right {{ $data['homepage']->image_position == 'left' ? 'custom_right':'' }}">
                            @if($data['homepage']->image_position == 'right')
                                @include($module.'partials.welcome_image')
                            @else
                                @include($module.'partials.welcome_description')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($data['homepage']->action_title)
        <section class="cta-one">
            <div class="cta-one__shape-1 float-bob-x">
                <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/cta-one-shape-1.png') }}" alt="">
            </div>
            <div class="cta-one__shape-2 float-bob-y">
                <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/cta-one-shape-2.png') }}" alt="">
            </div>
            <div class="cta-one__shape-3 shape-mover">
                <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/cta-one-shape-3.png') }}" alt="">
            </div>
            <div class="cta-one__shape-4 img-bounce">
                <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/cta-one-shape-4.png') }}" alt="">
            </div>
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__title-box">
                        <p class="cta-one__text">{{ $data['homepage']->action_subtitle ?? '' }}</p>
                        <h3 class="cta-one__title">{{ $data['homepage']->action_title ?? '' }}</h3>
                    </div>
                    <div class="cta-one__btn-box">
                        <a href="{{ $data['homepage']->action_link ?? '/contact-us' }}" class="cta-one__btn thm-btn">{{ $data['homepage']->action_button ?? 'Start Here' }}</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['jobs']) > 1)
        <section class="news-three">
            <div class="news-three__shape-1 img-bounce">
                <img src="{{ asset('assets/frontend/images/shapes/news-three-shape-1.png') }}" alt="">
            </div>
            <div class="news-three__shape-2 float-bob-y">
                <img src="{{ asset('assets/frontend/images/shapes/news-three-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="section-title-three text-center">
                    <div class="section-title-three__tagline-box">
                        <p class="section-title-three__tagline">Current demands</p>
                    </div>
                    <h2 class="section-title-three__title">Learn more about our latest<br> jobs</h2>
                </div>
                <div class="row">
                    @foreach($data['jobs'] as $index=>$job)
                        <div class="col-xl-6 col-lg-6">
                            <div class="news-page-three__single wow fadeInUp" data-wow-delay="{{$index+1}}00ms">
                                <div class="news-page-three__img">
                                    <img src="{{ asset(imagePath($job->image)) }}" alt="">
                                </div>
                                <div class="news-page-three__content news-page-three__content_padding">
                                    <ul class="list-unstyled news-page-three__meta">
                                        <li><a href="#"> <span class="icon-date11"></span>
                                                @if(@$job->end_date >= date('Y-m-d'))
                                                    {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                                @else
                                                    Expired
                                                @endif
                                            </a></li>
                                    </ul>
                                    <div class="news-page-three__title-box">
                                        <h3><a href="{{ route('frontend.job.show', $job->slug) }}">{{ $job->title ?? '' }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="portfolio-one__btn-box">
                        <a href="{{ route('frontend.job.index') }}" class="portfolio-one__btn thm-btn">See All Jobs</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['services']) > 0)
        <section class="portfolio-one">
            <div class="portfolio-one__shape-1 float-bob-x">
                <img src="assets/images/shapes/portfolio-one-shape-1.png" alt="">
            </div>
            <div class="portfolio-one__shape-2 rotate-me">
                <img src="assets/images/shapes/portfolio-one-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <p class="section-title__tagline">Latest CASE STUDIES</p>
                    </div>
                    <h2 class="section-title__title">We Are Specialist For Many <br> Consulting Cases</h2>
                </div>
                <div class="row">
                    @foreach($data['services'] as $index=>$service)
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{$index+1}}00ms">
                            <div class="portfolio-one__single">
                                <div class="portfolio-one__img-box">
                                    <div class="portfolio-one__img">
                                        <img src="{{ asset(thumbnailImagePath($service->image)) }}" alt="">
                                    </div>
                                    <div class="portfolio-one__content">
{{--                                        <p class="portfolio-one__sub-title">Business Audit</p>--}}
                                        <h3 class="portfolio-one__title">
                                            <a href="{{ route('frontend.service.show', $service->key) }}">{{ $service->title ?? '' }}</a></h3>
                                    </div>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ route('frontend.service.show', $service->key) }}" class=""><span
                                                class="icon-top-right-1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="portfolio-one__btn-box">
                    <a href="portfolio.html" class="portfolio-one__btn thm-btn">See All Project</a>
                </div>
            </div>
        </section>
    @endif

        <!--Why Choose Two Start -->
    <section class="why-choose-two">
        <div class="why-choose-two__shape-3 img-bounce">
            <img src="assets/images/shapes/why-choose-two-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two__left">
                        <div class="section-title-three text-left">
                            <div class="section-title-three__tagline-box">
                                <p class="section-title-three__tagline">Why Choose Us</p>
                            </div>
                            <h2 class="section-title-three__title">We are awards winning <br> business consulting
                                firms</h2>
                        </div>
                        <p class="why-choose-two__text">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        <ul class="why-choose-two__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-solution"></span>
                                </div>
                                <div class="content">
                                    <h3>Client - Focused Solutions</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                                        industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-diversity"></span>
                                </div>
                                <div class="content">
                                    <h3>Diversity & Inclusion</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                                        industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-woman"></span>
                                </div>
                                <div class="content">
                                    <h3>Women’s Empowerment</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                                        industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two__right">
                        <div class="why-choose-two__img wow slideInRight" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <img src="assets/images/resources/why-choose-two-img-1.jpg" alt="">
                            <div class="why-choose-two__shape-1 float-bob-y">
                                <img src="assets/images/shapes/why-choose-two-shape-1.png" alt="">
                            </div>
                            <div class="why-choose-two__shape-2 zoominout">
                                <img src="assets/images/shapes/why-choose-two-shape-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Two End -->

    <!--Services Three Start -->
    <section class="services-three">
        <div class="services-three__shape-1 float-bob-y">
            <img src="assets/images/shapes/services-three-shape-1.png" alt="">
        </div>
        <div class="services-three__shape-2 zoominout">
            <img src="assets/images/shapes/services-three-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="section-title-three text-center">
                <div class="section-title-three__tagline-box">
                    <p class="section-title-three__tagline">What We Do</p>
                </div>
                <h2 class="section-title-three__title">What Services we Provide for <br> Our Customers Business</h2>
            </div>
            <div class="row">
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-three__single">
                        <h3 class="services-three__title"><a href="business-audit.html">Business Audit</a></h3>
                        <div class="services-three__icon">
                            <span class="icon-report"></span>
                        </div>
                        <p class="services-three__text">Lorem Ipsum is simply dummy text of the printing industry.
                            The industry's standard dummy</p>
                        <div class="services-three__btn">
                            <a href="business-audit.html">Learn More<span class="icon-right-arrow1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay="200ms">
                    <div class="services-three__single">
                        <h3 class="services-three__title"><a href="business-planning.html">Business Planning</a>
                        </h3>
                        <div class="services-three__icon">
                            <span class="icon-planning"></span>
                        </div>
                        <p class="services-three__text">Lorem Ipsum is simply dummy text of the printing industry.
                            The industry's standard dummy</p>
                        <div class="services-three__btn">
                            <a href="business-planning.html">Learn More<span class="icon-right-arrow1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-three__single">
                        <h3 class="services-three__title"><a href="financial-advices.html">Financial Advices</a>
                        </h3>
                        <div class="services-three__icon">
                            <span class="icon-financial-advices11"></span>
                        </div>
                        <p class="services-three__text">Lorem Ipsum is simply dummy text of the printing industry.
                            The industry's standard dummy</p>
                        <div class="services-three__btn">
                            <a href="financial-advices.html">Learn More<span class="icon-right-arrow1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
                <!--Services Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay="400ms">
                    <div class="services-three__single">
                        <h3 class="services-three__title"><a href="tax-strategy.html">Tax Strategy</a></h3>
                        <div class="services-three__icon">
                            <span class="icon-tax-strategy11"></span>
                        </div>
                        <p class="services-three__text">Lorem Ipsum is simply dummy text of the printing industry.
                            The industry's standard dummy</p>
                        <div class="services-three__btn">
                            <a href="tax-strategy.html">Learn More<span class="icon-right-arrow1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End-->
            </div>
            <p class="services-three__bottom-text">You Can Also <a href="services.html" class="all-services">See All
                    Business<span class="icon-right-arrow-11"></span></a> <a href="services.html"
                                                                             class="">Services</a></p>
        </div>
    </section>
    <!--Services Three End -->

    <!--Portfolio Three Start -->
    <section class="portfolio-three">
        <div class="portfolio-three__shape-1 zoominout">
            <img src="assets/images/shapes/portfolio-three-shape-1.png" alt="">
        </div>
        <div class="portfolio-three__shape-2 float-bob-y">
            <img src="assets/images/shapes/portfolio-three-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="section-title-three text-center">
                <div class="section-title-three__tagline-box">
                    <p class="section-title-three__tagline">RECENT CASE STUDIES</p>
                </div>
                <h2 class="section-title-three__title">We Are Specialist For Many <br>Consulting Cases</h2>
            </div>
            <div class="portfolio-three__filter-box">
                <ul class="portfolio-three__filter style1 post-filter list-unstyled clearfix">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span>
                    </li>
                    <li data-filter=".business"><span class="filter-text">Business Strategy</span></li>
                    <li data-filter=".financial"><span class="filter-text">Financial</span></li>
                    <li data-filter=".planning"><span class="filter-text">Planning</span></li>
                    <li data-filter=".tax"><span class="filter-text">Tax Strategy</span></li>
                    <li data-filter=".investment"><span class="filter-text">Investment</span></li>
                </ul>
            </div>
            <div class="row filter-layout">
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item business investment tax">
                    <div class="portfolio-three__single">
                        <div class="portfolio-three__img-box">
                            <div class="portfolio-three__img">
                                <img src="assets/images/project/portfolio-3-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="portfolio-three__content">
                            <p class="portfolio-three__sub-title">Business Audit</p>
                            <h3 class="portfolio-three__title"><a href="portfolio-details.html">Our Business
                                    Growth</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item financial investment">
                    <div class="portfolio-three__single">
                        <div class="portfolio-three__img-box">
                            <div class="portfolio-three__img">
                                <img src="assets/images/project/portfolio-3-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="portfolio-three__content">
                            <p class="portfolio-three__sub-title">Business Audit</p>
                            <h3 class="portfolio-three__title"><a href="portfolio-details.html">Our Women’s
                                    Empowerment</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item business planning tax">
                    <div class="portfolio-three__single">
                        <div class="portfolio-three__img-box">
                            <div class="portfolio-three__img">
                                <img src="assets/images/project/portfolio-3-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="portfolio-three__content">
                            <p class="portfolio-three__sub-title">Business Audit</p>
                            <h3 class="portfolio-three__title"><a href="portfolio-details.html">Our Business
                                    Audit</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item financial">
                    <div class="portfolio-three__single">
                        <div class="portfolio-three__img-box">
                            <div class="portfolio-three__img">
                                <img src="assets/images/project/portfolio-3-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="portfolio-three__content">
                            <p class="portfolio-three__sub-title">Business Audit</p>
                            <h3 class="portfolio-three__title"><a href="portfolio-details.html">Our Business
                                    Planning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item business investment tax">
                    <div class="portfolio-three__single">
                        <div class="portfolio-three__img-box">
                            <div class="portfolio-three__img">
                                <img src="assets/images/project/portfolio-3-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="portfolio-three__content">
                            <p class="portfolio-three__sub-title">Business Audit</p>
                            <h3 class="portfolio-three__title"><a href="portfolio-details.html">Our Financial
                                    Advices</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item tax financial planning">
                    <div class="portfolio-three__single">
                        <div class="portfolio-three__img-box">
                            <div class="portfolio-three__img">
                                <img src="assets/images/project/portfolio-3-6.jpg" alt="">
                            </div>
                        </div>
                        <div class="portfolio-three__content">
                            <p class="portfolio-three__sub-title">Business Audit</p>
                            <h3 class="portfolio-three__title"><a href="portfolio-details.html">Our Tax Strategy</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio Three End -->

    <!--CTA Three Start -->
    <section class="cta-three">
        <div class="cta-three__shape-2 float-bob-x">
            <img src="assets/images/shapes/cta-three-shape-2.png" alt="">
        </div>
        <div class="cta-three__shape-3 float-bob-y">
            <img src="assets/images/shapes/cta-three-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="cta-three__left">
                        <h3 class="cta-three__title">Request a Schedule For
                            <br> Free Consultation</h3>
                        <div class="cta-three__btn">
                            <a href="about.html">Request a Scheduel<span class="icon-right-arrow-11"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="cta-three__right">
                        <div class="cta-three__img">
                            <img src="assets/images/resources/cta-three-img-1.png" alt="">
                            <div class="cta-three__img-2">
                                <img src="assets/images/resources/cta-three-img-2.png" alt="">
                            </div>
                            <div class="cta-three__shape-1 shape-mover">
                                <img src="assets/images/shapes/cta-three-shape-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Three End -->

    <!--Team Three Start -->
    <section class="team-three">
        <div class="team-three__shape-1 img-bounce">
            <img src="assets/images/shapes/team-three-shape-1.png" alt="">
        </div>
        <div class="team-three__shape-2 float-bob-y">
            <img src="assets/images/shapes/team-three-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="section-title-three text-center">
                <div class="section-title-three__tagline-box">
                    <p class="section-title-three__tagline">TEAM MEMBERS</p>
                </div>
                <h2 class="section-title-three__title">Meet Our Experts</h2>
            </div>
            <div class="row">
                <!--Team Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="team-three__single">
                        <div class="team-three__img-box">
                            <div class="team-three__img">
                                <img src="assets/images/team/team-3-1.jpg" alt="">
                            </div>
                            <div class="team-three__social">
                                <a href="team-details.html"><span class="fab fa-facebook"></span></a>
                                <a href="team-details.html"><span class="fab fa-twitter"></span></a>
                                <a href="team-details.html"><span class="fab fa-instagram"></span></a>
                                <a href="team-details.html"><span class="fab fa-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__title"><a href="team-details.html">Susan Sarandom</a></h3>
                            <p class="team-three__sub-title">Founder and CEO</p>
                        </div>
                    </div>
                </div>
                <!--Team Three Single End-->
                <!--Team Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-three__single">
                        <div class="team-three__img-box">
                            <div class="team-three__img">
                                <img src="assets/images/team/team-3-2.jpg" alt="">
                            </div>
                            <div class="team-three__social">
                                <a href="team-details.html"><span class="fab fa-facebook"></span></a>
                                <a href="team-details.html"><span class="fab fa-twitter"></span></a>
                                <a href="team-details.html"><span class="fab fa-instagram"></span></a>
                                <a href="team-details.html"><span class="fab fa-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__title"><a href="team-details.html">Ralph Edwards</a></h3>
                            <p class="team-three__sub-title">Founder and CEO</p>
                        </div>
                    </div>
                </div>
                <!--Team Three Single End-->
                <!--Team Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay="300ms">
                    <div class="team-three__single">
                        <div class="team-three__img-box">
                            <div class="team-three__img">
                                <img src="assets/images/team/team-3-3.jpg" alt="">
                            </div>
                            <div class="team-three__social">
                                <a href="team-details.html"><span class="fab fa-facebook"></span></a>
                                <a href="team-details.html"><span class="fab fa-twitter"></span></a>
                                <a href="team-details.html"><span class="fab fa-instagram"></span></a>
                                <a href="team-details.html"><span class="fab fa-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__title"><a href="team-details.html">Savannah Nguyen</a></h3>
                            <p class="team-three__sub-title">Founder and CEO</p>
                        </div>
                    </div>
                </div>
                <!--Team Three Single End-->
                <!--Team Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="team-three__single">
                        <div class="team-three__img-box">
                            <div class="team-three__img">
                                <img src="assets/images/team/team-3-4.jpg" alt="">
                            </div>
                            <div class="team-three__social">
                                <a href="team-details.html"><span class="fab fa-facebook"></span></a>
                                <a href="team-details.html"><span class="fab fa-twitter"></span></a>
                                <a href="team-details.html"><span class="fab fa-instagram"></span></a>
                                <a href="team-details.html"><span class="fab fa-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="team-three__content">
                            <h3 class="team-three__title"><a href="team-details.html">Theresa Webb</a></h3>
                            <p class="team-three__sub-title">Founder and CEO</p>
                        </div>
                    </div>
                </div>
                <!--Team Three Single End-->
            </div>
            <div class="team-three__btn-box">
                <div class="team-three__btn">
                    <a href="team.html">View All<span class="icon-right-arrow1"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--Team Three End -->

    <!--Testimonial Three STart -->
    <section class="testimonial-three">
        <div class="testimonial-three__shape-1 float-bob-x">
            <img src="assets/images/shapes/testimonial-three-shape-1.png" alt="">
        </div>
        <div class="testimonial-three__shape-2 float-bob-x">
            <img src="assets/images/shapes/testimonial-three-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="section-title-three text-center">
                <div class="section-title-three__tagline-box">
                    <p class="section-title-three__tagline">Testimonials</p>
                </div>
                <h2 class="section-title-three__title">What our client's says <br> about our work.</h2>
            </div>
            <div class="testimonial-three__bottom">
                <div class="testimonial-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 70,
                        "nav": false,
                        "dots": true,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 2
                            },
                            "1200": {
                                "items": 3
                            }
                        }
                    }'>
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>Micle Deno</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>Jerome Bell</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>Kristin Watson</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>Nikolo Vali</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>Harbert Spen</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>David Kapor</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>Alisha Martin</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>Harbi Shaien</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                    <!--Testimonial Three Single Start -->
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__quote">
                            <span class="icon-quote11"></span>
                        </div>
                        <p class="testimonial-three__text">Divided by arches into stiff sections. The bedding
                            was
                            hardly able to cover it and seemed ready to slide off any momentMagazine and
                            housed in a
                            nice, gilded frame.</p>
                        <div class="testimonial-three__client-info">
                            <h3>Jena Armi</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                    <!--Testimonial Three Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Three End -->

    <!--News Three Start -->
    <section class="news-three">
        <div class="news-three__shape-1 img-bounce">
            <img src="assets/images/shapes/news-three-shape-1.png" alt="">
        </div>
        <div class="news-three__shape-2 float-bob-y">
            <img src="assets/images/shapes/news-three-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="section-title-three text-center">
                <div class="section-title-three__tagline-box">
                    <p class="section-title-three__tagline">Latest Blog</p>
                </div>
                <h2 class="section-title-three__title">Learn about our latest<br> news from blog.</h2>
            </div>
            <div class="row">
                <!--News Three Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="news-three__single">
                        <div class="news-three__img-box">
                            <div class="news-three__img">
                                <img src="assets/images/blog/news-3-1.jpg" alt="">
                            </div>
                            <div class="news-three__date">
                                <p>24 </p>
                                <span>Sep 22</span>
                            </div>
                        </div>
                        <div class="news-three__content">
                            <ul class="news-three__meta list-unstyled">
                                <li>
                                    <p><span class="icon-user"></span>Admin</p>
                                </li>
                                <li>
                                    <p><span class="icon-chat"></span>8 Comments</p>
                                </li>
                            </ul>
                            <h3 class="news-three__title"><a href="news-details.html">We would love to share a
                                    similar experience</a></h3>
                            <p class="news-three__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="news-three__btn">
                                <a href="news-details.html">Learn More<span class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News Three Single End-->
                <!--News Three Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="news-three__single">
                        <div class="news-three__img-box">
                            <div class="news-three__img">
                                <img src="assets/images/blog/news-3-2.jpg" alt="">
                            </div>
                            <div class="news-three__date">
                                <p>24 </p>
                                <span>Sep 22</span>
                            </div>
                        </div>
                        <div class="news-three__content">
                            <ul class="news-three__meta list-unstyled">
                                <li>
                                    <p><span class="icon-user"></span>Admin</p>
                                </li>
                                <li>
                                    <p><span class="icon-chat"></span>8 Comments</p>
                                </li>
                            </ul>
                            <h3 class="news-three__title"><a href="news-details.html">Ipsum is simply dummy text of
                                    the printing</a></h3>
                            <p class="news-three__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="news-three__btn">
                                <a href="news-details.html">Learn More<span class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News Three Single End-->
                <!--News Three Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="news-three__single">
                        <div class="news-three__img-box">
                            <div class="news-three__img">
                                <img src="assets/images/blog/news-3-3.jpg" alt="">
                            </div>
                            <div class="news-three__date">
                                <p>24 </p>
                                <span>Sep 22</span>
                            </div>
                        </div>
                        <div class="news-three__content">
                            <ul class="news-three__meta list-unstyled">
                                <li>
                                    <p><span class="icon-user"></span>Admin</p>
                                </li>
                                <li>
                                    <p><span class="icon-chat"></span>8 Comments</p>
                                </li>
                            </ul>
                            <h3 class="news-three__title"><a href="news-details.html">Simply dummy text of the
                                    printing and
                                    typesetting</a></h3>
                            <p class="news-three__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="news-three__btn">
                                <a href="news-details.html">Learn More<span class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News Three Single End-->
            </div>
        </div>
    </section>
    <!--News Three End -->

    <!--Brand Three Start-->
    <section class="brand-one brand-three">
        <div class="container">
            <div class="brand-one__inner">
                <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":3
                            },
                            "992":{
                                "items": 4
                            },
                            "1200":{
                                "items": 5
                            }
                        }
                    }'>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="assets/images/brand/brand-3-1.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="assets/images/brand/brand-3-2.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="assets/images/brand/brand-3-3.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="assets/images/brand/brand-3-4.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="assets/images/brand/brand-3-5.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                </div>
                <!-- If we need navigation buttons -->
            </div>
        </div>
    </section>
    <!--Brand Three End-->
@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection

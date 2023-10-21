@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')

    <div class="body_content_wrapper">

        <div class="banner-wrapper position-relative">
            <section class="thumbimg-countnumber-carousel owl-theme owl-carousel p-0">
                @foreach($data['sliders']  as $slider)
                    <div class="item" >
                        <div class="slider-slide-item" style="background-image: url({{ asset(imagePath($slider->image)) }});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-11 mx-auto">
                                        <div class="inner-banner-style1 text-center">
                                            <h6 class="hero-sub-title animate-up-1">{{ $slider->subtitle ?? '' }}</h6>
                                            <h2 class="hero-title animate-up-2">{{ $slider->title ?? '' }}</h2>
                                            @if($slider->link)
                                                <p class="hero-text fz15 animate-up-3">
                                                    <a href="{{ $slider->link ?? '' }}" class="ud-btn btn-white slider-btn"> {{ $slider->link ?? 'View More' }} <i class="fal fa-arrow-right-long"></i></a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
{{--            <div class="carousel-control-block d-flex d-md-none">--}}
{{--                <div class="carousel-btn-block slider-navigation-btn"> <span class="carousel-btn left-btn"><i class="fa fa-angle-up"></i></span> <span class="carousel-btn right-btn"><i class="fa fa-angle-down"></i></span> </div>--}}
{{--                <div class="slider-number-count"></div>--}}
{{--            </div>--}}
        </div>

        <section class="pt-0 pb0 bgc-f7 pb50-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="advance-style4 at-home5 mt-100 mt50-lg mb10 mx-auto animate-up-2">
                            <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                        Flight
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        Tour
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    @include($module.'includes.flight_tab')
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @include($module.'includes.tour_tab')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if(count($data['all_packages'])>0)
            <section class="bgc-f7">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms">
                    <div class="col-lg-9">
                        <div class="main-title2">
                            <h2 class="title">Our Top Tour</h2>
                            <p class="paragraph">
                                We have wide variety of tours and travel packages for your selection
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-start text-lg-end mb-3">
                            <a class="ud-btn2" href="{{ route('frontend.activity.index') }}">See All Properties<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-listing-slider navi_pagi_bottom_center slider-dib-sm row">
                            @foreach($data['all_packages'] as $package)
                                <div class="col-md-4 item">
                                    <div class="listing-style1">
                                        <div class="list-thumb">
                                            <img class="w-100 lazy" data-src="{{ asset(imagePath($package->image)) }}" alt="">
                                            @if($package->package_ribbon_id)
                                                <div class="list-tag fz12 {{$package->packageRibbon->key ?? ''}}"><span class="flaticon-electricity me-2"></span>{{$package->packageRibbon->title ?? ''}}</div>
                                            @endif
                                            <div class="list-price">
                                                <a href="{{ route('frontend.activity.category', $package->packageCategory->slug) }}">
                                                    {{ $package->packageCategory->title }} {{ $package->price ?  ' / ' . $package->price:''}}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <p class="list-text">
                                                <i class="fal fa-earth mr-1"></i>
                                                {{ $package->country->title }}
                                            </p>
                                            <h6 class="list-title">
                                                <a href="{{ route('frontend.activity.show',$package->slug) }}">
                                                    {{ $package->title ?? '' }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <section class="cta-banner4 d-flex align-items-center" data-stellar-background-ratio="0.1" style="background-position: 50% 4.84063px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="cta-style4 position-relative text-center">
                            <h6 class="sub-title fw400 text-white">Explore more with us</h6>
                            <h1 class="cta-title mb30 text-white">Start your amazing journey right here us ! Book your first trip here.</h1>
                            <div class="d-block d-sm-flex justify-content-center">
                                <a href="{{ route($module.'activity.index') }}" class="ud-btn btn-white">Our Activity <i class="fal fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @if(count($data['services'])>0)
            <section class="pb30 pb30-md">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="300ms">
                        <div class="col-lg-6 mx-auto">
                            <div class="main-title2 text-center">
                                <p class="paragraph">Explore</p>
                                <h2 class="title">Our Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay="300ms">
                        @foreach($data['services'] as $service)
                            <div class="col-lg-4">
                                <div class="feature-style1 mb30">
                                    <div class="feature-img">
                                        <img class="w-100 lazy" data-src="{{ asset(imagePath($service->image))}}" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <div class="top-area">
                                            <h5 class="title mb-1">{{ $service->title }}</h5>
                                        </div>
                                        <div class="bottom-area">
                                            <a class="ud-btn2 text">
                                                {{ $service->description ? elipsis($service->description,20):'' }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        @if(count($data['countries'])>0)
            <section class="pb30 pb30-md bgc-f7">
                <div class="container">
                    <div class="row align-items-md-center wow fadeInUp" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="col-lg-9">
                            <div class="main-title2">
                                <h2 class="title">Properties by Cities</h2>
                                <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                            </div>
                        </div>
    {{--                    <div class="col-lg-3">--}}
    {{--                        <div class="text-start text-lg-end mb-3">--}}
    {{--                            <a class="ud-btn2" href="#">See All Properties<i class="fal fa-arrow-right-long dark-color"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        @foreach($data['countries'] as $country)
                            <div class="col-sm-6 col-lg-4">
                                <div class="home9-city-style position-relative mb30 mb20-md mb0-sm d-flex align-items-center">
                                    <div class="city-img flex-shrink-0">
                                        <img class="lazy" data-src="{{ asset(imagePath($country->image))}}" alt="">
                                    </div>
                                    <div class="flex-shrink-1 ms-3">
                                        <h6 class="mb-1">{{ $country->title }}</h6>
                                        <p class="mb-0">{{ $country->packages_count }} Activities</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        @if(count($data['testimonials'])>0)
            <section class="our-testimonial p-0 bgc-dark">
                <div class="cta-banner2 bgc-f7 maxw1600 mx-auto pt60 pt40-md pb110 pb60-md bdrs12 position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="300ms">
                                <div class="main-title text-center">
                                    <h2 class="text-grey">Our Testimonials</h2>
                                    <p class="paragraph text-grey">See what people say about us</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 m-auto wow fadeInUp" data-wow-delay="500ms">
                                <div class="testimonial-style2">
                                    <div class="tab-content" id="pills-tabContent">
                                        @foreach($data['testimonials'] as $index=>$testimonial)
                                            <div class="tab-pane fade {{ $loop->first ? 'show active':'' }}" id="pills-{{$index}}" role="tabpanel" aria-labelledby="pills-{{$index}}-tab">
                                                <div class="testi-content text-center">
                                                    <span class="icon fas fa-quote-left"></span>
                                                    <h4 class="testi-text text-grey">
                                                        {{ $testimonial->description }}
                                                    </h4>
                                                    <h5 class="name text-grey">{{ $testimonial->title ?? '' }}</h5>
                                                    <p class="design text-grey">{{ $testimonial->position ?? '' }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="tab-list position-relative">
                                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                            @foreach($data['testimonials'] as $index=>$testimonial)
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link {{ $loop->first ? 'active':'' }}" id="pills-{{$index}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$index}}" type="button" role="tab" aria-controls="pills-{{$index}}">
                                                        <img src="{{ asset(imagePath($testimonial->image))}}" style="border-radius: 55px;" alt=""></button>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="our-cta pt0" style="padding-bottom: 0px">
            <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pt60-md pb120 pb60-md bdrs12 position-relative mx20-lg">
                <div class="img-box-5">
                    <img class="img-1 spin-right" src="{{ asset('assets/frontend/images/about/element-1.png') }}" alt="">
                </div>
                <div class="img-box-6">
                    <img class="img-1 spin-left" src="{{ asset('assets/frontend/images/about/element-1.png') }}" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-6 wow fadeInLeft">
                            <div class="cta-style1">
                                <h2 class="cta-title"> Enjoy Your Holiday with Your loved ones</h2>
                                <p class="cta-text mb-0">
                                    Enjoy best offers on different tours all over the world
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                            <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                                <a href="{{ route('frontend.contact-us') }}" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i class="fal fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @if(count($data['blogs'])>0)
            <section class="pb90 pb20-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="00ms">
                        <div class="main-title2 text-start text-md-center">
                            <h2 class="title">From Our Blog</h2>
                            <p class="paragraph">Read our recent news and articles</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="300ms">
                    @foreach($data['blogs'] as $blog)
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-style1">
                                <div class="blog-img">
                                    <img class="w-100" src="{{ asset(imagePath($blog->image))}}" alt="">
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <span class="day">{{date('d', strtotime($blog->created_at))}}</span>
                                        <span class="month">{{date('M Y', strtotime($blog->created_at))}}</span>
                                    </div>
                                    <a class="tag" href="{{ route('frontend.blog.category', $blog->blogCategory->slug) }}">{{ $blog->blogCategory->title ?? '' }}</a>
                                    <h6 class="title mt-1">
                                        <a href="{{ route('frontend.blog.show', $blog->slug) }}">
                                            {{ $blog->title ?? '' }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @include($view_path.'includes.book-flight')
@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    @include($view_path.'includes.script')
@endsection

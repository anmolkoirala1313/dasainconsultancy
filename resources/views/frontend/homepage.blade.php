@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')
<main id="content">
    <section>
        <div class="slick-slider mx-0 custom-arrow-center" data-slick-options='{"slidesToShow": 1, "autoplay":true,"autoplaySpeed": 9000,"responsive":[{"breakpoint": 2900,"settings": {"slidesToShow":1,"arrows":false,"dots":false}},{"breakpoint": 992,"settings": {"slidesToShow":1,"arrows":false,"dots":false}},{"breakpoint": 768,"settings": {"slidesToShow": 1,"arrows":false,"dots":false}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":false}}]}'>
            @foreach($data['sliders']  as $slider)
                <div class="box px-0 d-flex flex-column">
                    <div style="background-image: linear-gradient(180deg, rgba(24, 26, 32, 0) 0%, #181A20 100%), url({{ asset(imagePath($slider->image)) }});" class="py-lg-14 py-11 bg-cover">
                        <div class="container mt-lg-9 zoomIn animated text-center" data-animate="zoomIn">
                            <p class="mb-1 text-white text-center fs-md-22 fs-16 font-weight-600">{{ $slider->subtitle ?? '' }}</p>
                            <h2 class="text-white text-center display-2 font-weight-light mb-4">{{ $slider->title ?? '' }}</h2>
                            @if($slider->link)
                                <a href="{{ $slider->link ?? '' }}" class="btn btn-lg btn-primary font-weight-600 rounded-lg mb-8 zoomIn animated" data-animate="zoomIn">
                                    {{ $slider->link ?? 'View More' }} <i class="far fa-long-arrow-right ml-2"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <div class="container">
            <div class="mt-n12 px-6 py-3 rounded-lg form-search-02 position-relative z-index-3">
                <section class="col-lg-12">
                    <div class="collapse-tabs">
                        <ul class="nav nav-tabs tabs-04 d-md-flex d-none" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-16 active" data-toggle="tab" href="#details" role="tab">
                                    Flight</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-16" data-toggle="tab" href="#facts" role="tab">Tour</a>
                            </li>
                        </ul>
                        <div class="tab-content  bg-white px-6 py-3 shadow-sm-4 form-search-02 position-relative z-index-3">
                            <div id="collapse-tabs-accordion-01">
                                <div class="tab-pane tab-pane-parent fade show active mb-md-0 mb-2" id="details" role="tabpanel">
                                    @include($module.'includes.flight_tab')
                                </div>
                                <div class="tab-pane tab-pane-parent fade" id="facts" role="tabpanel">
                                    @include($module.'includes.tour_tab')
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    @if(count($data['all_packages'])>0)
        <section class="pt-lg-12 pb-lg-10 py-11">
            <div class="container container-xxl">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-heading">Best Properties For Sale</h2>
                        <span class="heading-divider"></span>
                        <p class="mb-6">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="{{ route('frontend.activity.index') }}" class="btn fs-14 text-secondary btn-accent py-3 lh-15 px-7 mb-6 mb-lg-0">
                            View All Activities
                            <i class="far fa-long-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    @foreach($data['all_packages'] as $package)
                        <div class="col-lg-4 box pb-7 pt-2">
                            <div class="card shadow-hover-2" data-animate="zoomIn">
                                <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img class="lazy" data-src="{{ asset(imagePath($package->image)) }}" alt="Home in Metric Way">
                                    <div class="card-img-overlay p-2 d-flex flex-column">
                                        @if($package->package_ribbon_id)
                                            <div>
                                               <span class="badge mr-2 badge-orange {{$package->packageRibbon->key ?? ''}}">{{$package->packageRibbon->title ?? ''}}</span>
                                            </div>
                                        @endif
                                        <ul class="list-inline mb-0 mt-auto hover-image">
                                            @if(count( $package->packageGalleries ) !== 0)
                                                <li class="list-inline-item mr-2" data-toggle="tooltip" title="{{count( $package->packageGalleries )}} Images">
                                                    <a href="#" class="text-white hover-primary">
                                                        <i class="far fa-images"></i><span class="pl-1">
                                                            {{ count( $package->packageGalleries ) }}
                                                        </span>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($package->video)
                                                <li class="list-inline-item" data-toggle="tooltip" title="1 Video">
                                                    <a href="{{ route('frontend.activity.show',$package->slug) }}" class="text-white hover-primary">
                                                        <i class="far fa-play-circle"></i><span class="pl-1">1</span>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body pt-3">
                                    <h2 class="card-title fs-16 lh-2 mb-0">
                                        <a href="{{ route('frontend.activity.show',$package->slug) }}" class="text-dark hover-primary">
                                            {{ $package->title ?? '' }}
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                    <a class="fs-16 font-weight-bold text-heading mb-0" href="{{ route('frontend.activity.category', $package->packageCategory->slug) }}">
                                        {{ $package->packageCategory->title }} {{ $package->price ?  ' / ' . $package->price:''}}
                                    </a>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent" data-toggle="tooltip" title="{{ $package->country->title }}">
                                                <i class="fas fa-globe"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="bg-single-image-02 bg-accent py-lg-11 py-11" data-animated-id="12">
        <div class="container">
            <div class="row">
                <div class="col-ld-6 col-sm-7 fadeInLeft animated" data-animate="fadeInLeft">
                    <div class="pl-6 border-4x border-left border-primary">
                        <h2 class="text-heading lh-15 fs-md-32 fs-25">Explore more with us, <span class="text-primary"> get in touch</span></h2>
                        <p class="lh-2 fs-md-15 mb-0">Amazing new offers, beautiful location and packages, trusted by a community of thousands of travellers.</p>
                    </div>
                </div>
                <div class="col-ld-6 col-sm-5 text-center mt-sm-0 mt-8 fadeInRight animated" data-animate="fadeInRight">
                    <a href="{{ route($module.'activity.index') }}" class="btn btn-lg btn-primary mt-2 px-10">Our Activity</a>
                </div>
            </div>
        </div>
    </section>

    @if(count($data['countries'])>0)
        <section class="pb-lg-13 bg-single-image-03 pt-11 pb-11">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 pr-xl-14" data-animate="fadeInLeft">
                        <h2 class="text-heading lh-163 mt-md-4">Explore Our Locations</h2>
                        <p class="mb-6">Find the best activity suited for you based on our locations</p>
    {{--                    <a href="" class="btn btn-lg text-secondary btn-accent rounded-lg mb-md-0 mb-8">Explore all--}}
    {{--                        <i class="far fa-long-arrow-right ml-1"></i>--}}
    {{--                    </a>--}}
                    </div>
                    <div class="col-md-8" data-animate="fadeInRight">
                        <div class="slick-slider custom-arrow-spacing-30" data-slick-options='{"slidesToShow": 3, "autoplay":true,"arrows":true,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false,"autoplay":true}},{"breakpoint": 768,"settings": {"slidesToShow": 3,"arrows":false,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
                            @foreach($data['countries'] as $country)
                                <div class="card border-0">
                                    <a href="#" class="hover-zoom-in d-block">
                                        <img class="card-img" src="{{ asset(imagePath($country->image))}}" alt="">
                                    </a>
                                    <div class="card-body p-0 mt-2">
                                        <h2 class="mb-0"><a href="#" class="text-dark hover-primary fs-16 lh-2 ">{{ $country->title }}</a></h2>
                                        <p class="font-weight-500 text-gray-light mb-0">{{ $country->packages_count }} Activities</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['services'])>0)
        <section class="bg-gray-02 pt-9 pb-9 pb-lg-11">
        <div class="container">
            <h2 class="text-center text-dark line-height-base">
                Our Best Services For You
            </h2>
            <span class="heading-divider mx-auto"></span>
            <div class="row custom-arrow-spacing-30">
                @foreach($data['services'] as $service)
                    <div class="col-lg-4 mt-2 fadeInLeft animated" data-animate="fadeInLeft">
                        <div class="card bg-overlay-gradient-4 rounded-0 border-0 bg-overlay-opacity-74">
                            <img src="{{ asset(imagePath($service->image))}}" class="card-img rounded-0" alt="Tommy Wolfe">
                            <div class="card-img-overlay d-flex flex-column justify-content-end p-6 position-relative-sm">
                                <div class="border-white-opacity-03 border-bottom">
                                    <h2 class="mb-1"><a class="fs-22 text-white">{{ $service->title }}</a></h2>
                                    <p class="text-lighter mb-4"> {{ $service->description ? elipsis($service->description,20):'' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if(count($data['testimonials'])>0)
        <section class="pt-lg-10 pb-lg-9 mt-lg-1 py-11">
            <div class="container container-xxl">
                <p class="text-primary font-weight-500 letter-spacing-263 text-center text-uppercase mb-2 fadeInLeft animated" data-animate="fadeInLeft">Our Testimonials</p>
                <h2 class="text-dark text-center mb-4 pb-lg-1 fadeInLeft animated" data-animate="fadeInLeft">Hear from our clients</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-accent px-3 pl-md-11 pr-md-10 pt-6 pb-7" data-animate="fadeInRight">
                            <div class="slick-slider custom-slider-1 mx-0" data-slick-options='{"slidesToShow": 1, "autoplay":true,"dots":true}'>
                                @foreach($data['testimonials'] as $index=>$testimonial)
                                    <div class="box px-0">
                                        <div class="card border-0 bg-transparent">
                                            <div class="card-body p-0">
                                                <div class="d-flex mb-6 align-items-end">
                                                    <div class="ml-auto opacity-2">
                                                        <img src="{{ asset('assets/frontend/images/quote.png') }}" alt="quote">
                                                    </div>
                                                </div>
                                                <p class="card-text fs-18 lh-2 text-heading mb-5">
                                                    {{ $testimonial->description }}
                                                </p>
                                                <div class="media align-items-center">
                                                    <div class="rounded-circle mr-4 bg-white w-70px h-70 d-flex align-items-end justify-content-center">
                                                        <img src="{{ asset(imagePath($testimonial->image))}}" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="fs-17 lh-1 text-heading font-weight-600 mb-2">{{ $testimonial->title ?? '' }}</p>
                                                        <p class="fs-15 lh-12 mb-0">{{ $testimonial->position ?? '' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['blogs'])>0)
        <section class="pt-10 pb-9">
            <div class="container">
                <p class="text-primary letter-spacing-263 text-uppercase lh-186 text-center mb-0">new & articles</p>
                <h2 class="text-center lh-1625 text-dark pb-1">
                    Check Out Recent News & Articles
                </h2>
                <div class="mx-n2">
                    <div class="slick-slider mt-6 mx-n1 slick-dots-mt-0" data-slick-options='{"slidesToShow": 3, "autoplay":false,"arrows":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
                        @foreach($data['blogs'] as $blog)
                            <div class="item py-4" data-animate="fadeInUp">
                                <div class="card border-0 shadow-xxs-3" data-animate="fadeInUp">
                                    <div class="position-relative d-flex align-items-end card-img-top">
                                        <a href="{{ route('frontend.blog.show', $blog->slug) }}" class="hover-shine">
                                            <img src="{{ asset(imagePath($blog->image))}}" alt="">
                                        </a>
                                        <a href="{{ route('frontend.blog.category', $blog->blogCategory->slug) }}" class="badge text-white bg-dark-opacity-04 fs-13 font-weight-500 bg-hover-primary hover-white mx-2 my-4 position-absolute pos-fixed-bottom">
                                            {{ $blog->blogCategory->title ?? '' }}
                                        </a>
                                    </div>
                                    <div class="card-body px-5 pt-3 pb-5">
                                        <p class="mb-1 fs-13">{{date('d M Y', strtotime($blog->created_at))}}</p>
                                        <h3 class="fs-18 text-heading lh-194 mb-1">
                                            <a href="{{ route('frontend.blog.show', $blog->slug) }}" class="text-heading hover-primary">
                                                {{ $blog->title ?? '' }}
                                            </a>
                                        </h3>
                                        <a class="text-heading font-weight-500" href="{{ route('frontend.blog.show', $blog->slug) }}">Learn more <i class="far fa-long-arrow-right text-primary ml-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
</main>
@include($view_path.'includes.book-flight')
@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    @include($view_path.'includes.script')
@endsection

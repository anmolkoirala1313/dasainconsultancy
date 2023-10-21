@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'bread-bg8.jpeg'])

    <section class="our-blog">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-8">
                    <img class="w-100 bdrs12 lazy mb15" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="">
                    <h2 class="blog-title">{{ $data['row']->title ?? '' }}</h2>
                    <div class="blog-single-meta">
                        <div class="post-author d-sm-flex align-items-center">
                            <a class="pr15 bdrr1" href="#">{{ $data['row']->blogCategory->title ?? ''}}</a>
                            <a class="ml15" href="#">{{date('d M Y', strtotime($data['row']->created_at))}}</a>
                        </div>
                    </div>
                    <div class="ui-content mt40 mb60">
                        <div class="mb25 ff-heading custom-description">
                            {!!  $data['row']->description !!}
                        </div>
                    </div>
                    <div class="bdrt1 bdrb1 d-block d-sm-flex justify-content-between pt50 pt30-sm pb50 pb30-sm">
                        <div class="blog_post_share d-flex align-items-center mb10-sm">
                            <span class="mr30">Share this post</span>
                            <a class="mr20" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mr20" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mr20" href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="bsp_tags d-flex">
                            <a class="mr10" href="#">Figma</a>
                            <a class="mr10" href="#">Sketch</a>
                            <a href="#">HTML5</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script>
        function fbShare(url) {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function twitShare(url, title) {
            window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function whatsappShare(url, title) {
            message = title + " " + url;
            window.open("https://api.whatsapp.com/send?text=" + message);
        }
        $( document ).ready(function() {
            let selector = $('.custom-description').find('table').length;
            if(selector>0){
                $('.custom-description').find('table').addClass('table table-bordered table-responsive');
            }
        });
    </script>
@endsection

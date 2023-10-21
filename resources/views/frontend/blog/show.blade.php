@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'bread-bg8.jpeg'])

    <section class="pt-13 pb-12">
        <div class="container">
            <div class="row ml-xl-0 mr-xl-n6">
                <div class="col-lg-8 mb-6 mb-lg-0 pr-xl-6 pl-xl-0">
                    <div class="position-relative">
                        <img class="rounded-lg d-block w-100 lazy" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="">
                        <a href="{{ route('frontend.blog.category', $data['row']->blogCategory->slug)}}" class="badge text-white bg-dark-opacity-04 fs-13 font-weight-500 bg-hover-primary hover-white m-2 position-absolute letter-spacing-1 pos-fixed-bottom">
                            {{ $data['row']->blogCategory->title ?? ''}}
                        </a>
                    </div>
                    <ul class="list-inline mt-4">
                        <li class="list-inline-item mr-4"><i class="far fa-calendar mr-1"></i> {{date('d M Y', strtotime($data['row']->created_at))}}</li>
                    </ul>
                    <h3 class="fs-md-32 text-heading lh-141 mb-2">
                        {{ $data['row']->title ?? '' }}
                    </h3>
                    <div class="lh-214 mb-9 custom-description">
                        {!!  $data['row']->description !!}
                    </div>
                </div>
                <div class="col-lg-4 pl-xl-6 pr-xl-0 primary-sidebar sidebar-sticky" id="sidebar">
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

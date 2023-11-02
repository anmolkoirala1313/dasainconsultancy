@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'page-header-bg.jpg'])

    <section class="news-page news-list-one-right">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-page__left">
                        <div class="row">
                            @foreach( $data['rows']  as $index=>$row)
                                <div class="col-lg-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="{{$index+1}}00ms">
                                   ` <div class="news-three__single">
                                        <div class="news-three__img-box">
                                            <div class="news-three__img">
                                                <img class="lazy" data-src="{{ asset(imagePath($row->image))}}" alt="">
                                            </div>
                                            <div class="news-three__date">
                                                <p>{{date('d', strtotime($row->created_at))}}</p>
                                                <span>{{date('M Y', strtotime($row->created_at))}}</span>
                                            </div>
                                        </div>
                                        <div class="news-three__content">
                                            <ul class="news-three__meta list-unstyled">
                                                <li>
                                                    <p><span class="icon-report"></span>  {{ $row->blogCategory->title ?? '' }}</p>
                                                </li>
                                            </ul>
                                            <h3 class="news-three__title"><a href="{{ route('frontend.blog.show', $row->slug) }}">
                                                    {{ $row->title ?? '' }}</a></h3>

                                            <div class="news-three__btn">
                                                <a href="{{ route('frontend.blog.show', $row->slug) }}">Learn More<span
                                                        class="icon-right-arrow1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="portfolio-page__pagination">
                            {{ $data['rows']->links('vendor.pagination.default') }}
{{--                            <ul class="pg-pagination list-unstyled">--}}
{{--                                <li class="prev">--}}
{{--                                    <a href="portfolio-details.html" aria-label="Prev"><i--}}
{{--                                            class="fa fa-angle-left"></i></a>--}}
{{--                                </li>--}}
{{--                                <li class="count"><a href="portfolio-details.html">1</a></li>--}}
{{--                                <li class="count"><a href="portfolio-details.html">2</a></li>--}}
{{--                                <li class="count"><a href="portfolio-details.html">3</a></li>--}}
{{--                                <li class="next">--}}
{{--                                    <a href="portfolio-details.html" aria-label="Next"><i--}}
{{--                                            class="fa fa-angle-right"></i></a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    @include($view_path.'includes.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection

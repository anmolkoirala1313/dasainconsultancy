@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpeg'])

    <section class="pt-11 pb-13">
        <div class="container">
            <div class="row ml-xl-0 mr-xl-n6">
                <div class="col-lg-8 mb-8 mb-lg-0 pr-xl-6 pl-xl-0">
                    <div class="row">
                        @foreach( $data['rows']  as $row)
                            <div class="col-md-6 mb-6">
                                <div class="card border-0 shadow-xxs-3" data-animate="fadeInUp">
                                    <div class="position-relative d-flex align-items-end card-img-top">
                                        <a href="{{ route('frontend.blog.show', $row->slug) }}" class="hover-shine">
                                            <img src="{{ asset(imagePath($row->image))}}" alt="">
                                        </a>
                                        <a href="{{ route('frontend.blog.category', $row->blogCategory->slug) }}" class="badge text-white bg-dark-opacity-04 fs-13 font-weight-500 bg-hover-primary hover-white mx-2 my-4 position-absolute pos-fixed-bottom">
                                            {{ $row->blogCategory->title ?? '' }}
                                        </a>
                                    </div>
                                    <div class="card-body px-5 pt-3 pb-5">
                                        <p class="mb-1 fs-13">{{date('d M Y', strtotime($row->created_at))}}</p>
                                        <h3 class="fs-18 text-heading lh-194 mb-1">
                                            <a href="{{ route('frontend.blog.show', $row->slug) }}" class="text-heading hover-primary">
                                                {{ $row->title ?? '' }}
                                            </a>
                                        </h3>
                                        <a class="text-heading font-weight-500" href="{{ route('frontend.blog.show', $row->slug) }}">Learn more <i class="far fa-long-arrow-right text-primary ml-1"></i></a>
                                    </div>
                                    dropdownParent: $('#my_amazing_modal')
                            </div>
                        @endforeach
                    </div>
                    <nav class="pt-4">
                        {{ $data['rows']->links('vendor.pagination.default') }}
                    </nav>
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
@endsection

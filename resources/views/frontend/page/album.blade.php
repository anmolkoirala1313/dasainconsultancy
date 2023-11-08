@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'image-2.png'])

    <section class="portfolio-page">
        <div class="container">
            <div class="row filter-layout">
                @foreach($data['rows'] as $row)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img class="lazy" data-src="{{ asset(imagePath($row->image)) }}" alt="">
                                </div>
                            </div>
                            <div class="portfolio-three__content">
                                <p class="portfolio-three__sub-title">Images: ({{ $row->album_gallery_count }})</p>
                                <h3 class="portfolio-three__title">
                                    <a href="{{ route('frontend.page.album_gallery',$row->slug) }}">{{ $row->title ?? '' }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="portfolio-page__pagination">
                {{ $data['rows']->links('vendor.pagination.default') }}
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection

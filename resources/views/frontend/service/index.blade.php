@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpeg'])

    <section class="pt-8 pb-13">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-heading fs-22 lh-15 mb-5">Services Offered</h2>
                    <div class="row mb-8">
                        @foreach( $data['rows']  as $row)
                            <div class="col-sm-6 col-md-4 mb-6 mt-3">
                                <div class="card border-0">
                                    <div class="hover-flash card-img-top">
                                        <img class="lazy" data-src="{{ asset(imagePath($row->image))}}" alt="Property Management">
                                    </div>
                                    <div class="card-body px-0 pt-2 pb-0">
                                        <h4 class="card-title fs-18 lh-17 text-dark mb-0">{{ $row->title }}</h4>
                                        <p class="card-text">
                                            {{ $row->description ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <nav class="pt-6">
                            {{ $data['rows']->links('vendor.pagination.default') }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection

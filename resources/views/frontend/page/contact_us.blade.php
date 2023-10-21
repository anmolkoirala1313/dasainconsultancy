@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'bread-bg8.jpeg'])


    <section class="mb-2">
        <div class="container">
            <div class="card border-0 mt-n10 z-index-3 pb-8 pt-10">
                <div class="card-body p-0 shadow-sm-4">
                    <h2 class="text-heading mb-2 fs-22 fs-md-32 text-center lh-16">We're always eager to hear from
                        you!</h2>
                    <p class="text-center mxw-670 mb-8">
                        Send us a message or ask a question and we will get back to you as soon as possible
                    </p>
                    {!! Form::open(['route' => $module.'contact-us.store', 'method'=>'POST', 'class'=>'mxw-751 px-md-5 submit_form']) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control form-control-lg border-0" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Phone" name="phone" class="form-control form-control-lg border-0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input placeholder="Your Email" class="form-control form-control-lg border-0" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" name="subject" class="form-control form-control-lg border-0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <textarea class="form-control border-0" placeholder="Message" name="message" rows="5"></textarea>
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-lg btn-primary px-9">Submit</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-6 mb-lg-0">
                    <a href="mailto:{{@$data['setting_data']->email ?? ''}}" class="card border-0 shadow-2 px-7 py-5 h-100 shadow-hover-lg-1">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <img src="{{asset('assets/frontend/images/icon-box-5.png')}}" alt="Meet our agents">
                        </div>
                        <div class="card-body px-0 pt-2 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-186 text-dark hover-primary"> {{$data['setting_data']->address ?? ''}}</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6 mb-lg-0">
                    <a href="tel:{{$data['setting_data']->phone ?? $data['setting_data']->mobile ?? $data['setting_data']->whatsapp ?? $data['setting_data']->viber ?? ''}}" class="card border-0 shadow-2 px-7 py-5 h-100 shadow-hover-lg-1">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <img src="{{asset('assets/frontend/images/icon-box-4.png')}}" alt="Sell your home">
                        </div>
                        <div class="card-body px-0 pt-2 pb-0 text-center">
                            <h4 class="card-title fs-16 lh-186 text-dark hover-primary">
                                {{$data['setting_data']->phone ?? $data['setting_data']->mobile ?? $data['setting_data']->whatsapp ?? $data['setting_data']->viber ?? ''}}
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6 mb-lg-0">
                    <a href="mailto:{{@$data['setting_data']->email ?? ''}}" class="card border-0 shadow-2 px-7 py-5 h-100 shadow-hover-lg-1">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <img src="{{asset('assets/frontend/images/icon-box-7.png')}}" alt="Contact us">
                        </div>
                        <div class="card-body px-0 pt-2 text-center pb-0">
                            <h4 class="card-title fs-16 lh-186 text-dark hover-primary">{{$data['setting_data']->email ?? ''}}</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @if($data['setting_data'] && $data['setting_data']->google_map)
        <section class="mt-5">
            <div id="map" class="mapbox-gl map-point-animate">
                <iframe class="home8-map contact-page" src="{{ $data['setting_data']->google_map }}" style="border:0;width: 100%;height: 400px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    @endif
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection

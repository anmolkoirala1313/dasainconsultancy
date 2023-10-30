<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ucwords(@$setting_data->meta_description ?? '')}}"/>
    <meta name="keywords" content=" {{@$setting_data->meta_tags ?? 'Travel, Tours, Trips, Nepal Tour, Hiking, Trekking, International Tours, Twins Travels'}}">
    <link rel="canonical" href="https://s.com.np" />

    @if (\Request::is('/'))
        <title> {{ucwords($setting_data->title ?? '')}}</title>
    @else
        <title>@yield('title') |  {{ucwords($setting_data->title ?? '')}} </title>
    @endif

    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting_data->favicon ?  asset(imagePath($setting_data->favicon)) : ''}}">

    <meta property="og:title" content="{{ucwords(@$setting_data->meta_title ?? '')}}" />
    <meta property="og:type" content="Tour and Travel" />
    <meta property="og:url" content="https://s.com.np" />
    <meta property="og:site_name" content="Twins Travel" />
    <meta property="og:description" content="{{ucwords(@$setting_data->meta_description ?? '')}}" />

    {{--    <script src="https://templates.g5plus.net/cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>--}}
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/fontawesome-pro-5/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/slick/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/dropzone/css/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/mapbox-gl/mapbox-gl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/dataTables/jquery.dataTables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/themes.css') }}">

    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>

    @yield('css')
    @stack('styles')
</head>
<body>
<header class="main-header navbar-light header-sticky header-sticky-smart header-mobile-lg">
    <div class="sticky-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg px-0">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : ''}}" alt="HomeID" class="d-none d-lg-inline-block"
                         style="height: 80px;">
                    <img src="{{ $setting_data->logo_white ?  asset(imagePath($setting_data->logo_white)) : asset(imagePath($setting_data->logo))}}" alt="HomeID" class="d-inline-block d-lg-none" style="height: 80px;">
                </a>
                <div class="d-flex d-lg-none ml-auto">
                    <a class="mr-4 position-relative text-white p-2" href="#">
                        <i class="fal fa-heart fs-large-4"></i>
                        <span class="badge badge-primary badge-circle badge-absolute">1</span>
                    </a>
                    <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse" data-target="#primaryMenu01" aria-controls="primaryMenu01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse mt-3 mt-lg-0 mx-auto flex-grow-0" id="primaryMenu01">
                    <ul class="navbar-nav hover-menu main-menu px-0 mx-lg-n4">
                        <li id="navbar-item-home" class="nav-item py-2 py-lg-5 px-0 px-lg-4">
                            <a class="nav-link p-0" href="/">
                                Home
                            </a>
                        </li>
                        @if(!empty($top_nav_data))
                            @foreach($top_nav_data as $nav)
                                @if(!empty($nav->children[0]))
                                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-4">
                                        <a class="nav-link dropdown-toggle p-0" href="#" data-toggle="dropdown">
                                            {{ @$nav->name ?? @$nav->title }}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pt-3 pb-0 pb-lg-3" aria-labelledby="navbar-item-pages">
                                            @foreach($nav->children[0] as $childNav)
                                                <li class="dropdown-item dropdown dropright">
                                                    <a id="navbar-link-news" class="{{ !empty($childNav->children[0]) ? 'dropdown-link dropdown-toggle':'' }}" href="{{get_menu_url($childNav->type, $childNav)}}" data-toggle="{{ !empty($childNav->children[0]) ? 'dropdown':'' }}">
                                                        {{ @$childNav->name ?? @$childNav->title ??''}}
                                                    </a>
                                                    @if(!empty($childNav->children[0]))
                                                        <ul class="dropdown-menu dropdown-submenu pt-3 pb-0 pb-lg-3" aria-labelledby="navbar-link-news">
                                                            @foreach($childNav->children[0] as $key => $lastchild)
                                                                <li class="dropdown-item">
                                                                    <a class="dropdown-link" href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                        {{ @$lastchild->name ?? @$lastchild->title ?? ''}}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li id="navbar-item-home" class="nav-item py-2 py-lg-5 px-0 px-lg-4">
                                        <a class="nav-link p-0" href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                            {{ @$nav->name ?? @$nav->title ??''}}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                    <div class="d-block d-lg-none">
                        <ul class="navbar-nav flex-row justify-content-lg-end d-flex flex-wrap py-2">
                            <li class="nav-item ml-auto w-100 w-sm-auto">
                                <a class="btn btn-primary btn-lg" href="{{route('frontend.contact-us')}}">
                                    Add listing
                                    <i class="fal fa-arrow-right-long"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <ul class="navbar-nav flex-row justify-content-lg-end d-flex flex-wrap text-body py-2">
                        <li class="nav-item ml-auto w-100 w-sm-auto">
                            <a class="btn btn-primary btn-lg" href="{{route('frontend.contact-us')}}">
                                Reach Out
                                <i class="fal fa-arrow-right-long"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

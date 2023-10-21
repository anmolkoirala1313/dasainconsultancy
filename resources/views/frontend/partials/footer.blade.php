<footer class="bg-dark pt-8 pb-6 footer text-muted">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                <a class="d-block mb-2" href="#">
                    <img src="{{ $setting_data->logo_white ?  asset(imagePath($setting_data->logo_white)) : asset(imagePath($setting_data->logo))}}" alt="" style="height: 90px;">
                </a>
                <p class="mb-0">{{ $setting_data->description ?? '' }}</p>
                @if(!empty(@$setting_data->facebook) || !empty(@$setting_data->youtube) || !empty(@$setting_data->instagram) || !empty(@$setting_data->linkedin) || !empty(@$setting_data->ticktock))
                    <h4 class="text-white fs-16 my-4 font-weight-500">Follow us on</h4>
                    <ul class="list-inline mb-0">
                        @if(@$setting_data->facebook)
                            <li class="list-inline-item mr-0">
                                <a href="{{@$setting_data->facebook}}" class="text-white opacity-3 fs-25 px-4 opacity-hover-10" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        @endif
                        @if(@$setting_data->youtube)
                            <li class="list-inline-item mr-0">
                                <a href="{{@$setting_data->youtube}}" class="text-white opacity-3 fs-25 px-4 opacity-hover-10" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        @endif
                        @if(@$setting_data->instagram)
                            <li class="list-inline-item mr-0">
                                <a href="{{@$setting_data->instagram}}" class="text-white opacity-3 fs-25 px-4 opacity-hover-10" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        @endif
                        @if(@$setting_data->linkedin)
                            <li class="list-inline-item mr-0">
                                <a href="{{@$setting_data->linkedin}}" class="text-white opacity-3 fs-25 px-4 opacity-hover-10" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        @endif
                        @if(!empty(@$setting_data->ticktock))
                            <li class="list-inline-item mr-0">
                                <a href="{{@$setting_data->ticktock}}" class="text-white opacity-3 fs-25 px-4 opacity-hover-10" target="_blank">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                @endif
            </div>
            <div class="col-md-6 col-lg-2 mb-6 mb-md-0">
                @if($footer_nav_data1!==null)
                    <h4 class="text-white fs-16 my-4 font-weight-500">{{ $footer_nav_title1 ?? ''}}</h4>
                    <ul class="list-group list-group-flush list-group-no-border mt-2">
                        @foreach(@$footer_nav_data1 as $nav)
                            @if(empty(@$nav->children[0]))
                                <li class="list-group-item bg-transparent p-0">
                                    <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}" class="text-muted lh-26 font-weight-500 hover-white">
                                        {{ @$nav->name ?? @$nav->title ?? ''}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="col-md-6 col-lg-2 mb-6 mb-md-0">
                @if($footer_nav_data2!==null)
                    <h4 class="text-white fs-16 my-4 font-weight-500">
                        {{ $footer_nav_title2 ?? ''}}
                    </h4>
                    <ul class="list-group list-group-flush list-group-no-border">
                        @foreach(@$footer_nav_data2 as $nav)
                            @if(empty(@$nav->children[0]))
                                <li class="list-group-item bg-transparent p-0">
                                    <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}" class="text-muted lh-26 font-weight-500 hover-white">  {{ @$nav->name ?? @$nav->title ?? ''}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                <h4 class="text-white fs-16 my-4 font-weight-500">Our Information</h4>
                <div class="lh-26 font-weight-500">
                    <a class="d-block text-muted hover-white" href="mailto:{{@$setting_data->email ?? ''}}">
                        {{@$setting_data->email ?? ''}}
                    </a>
                    <a class="d-block text-lighter font-weight-bold fs-15 hover-white" href="tel:{{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}">
                        {{$setting_data->phone ?? $setting_data->mobile ?? $setting_data->whatsapp ?? $setting_data->viber ?? ''}}
                    </a>
                    <a class="d-block text-muted hover-white" href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->address ?? ''}}</a>
                </div>

            </div>
        </div>
        <div class="mt-0 mt-md-10 row">
            <ul class="list-inline mb-0 col-md-6 mr-auto">
                @foreach($footerTopNav as $pageNav)
                    <li class="list-inline-item mr-6">
                        <a href="{{$pageNav}}" class="text-muted lh-26 font-weight-500 hover-white">
                            {{ ucfirst(str_replace('-',' ',$pageNav)) }} {{ $loop->last ? '':'·' }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <p class="col-md-auto mb-0 text-muted">
                © 2023 {{$setting_data->title ?? 'Twins Travels'}} <a href="https://www.canosoft.com.np/" class="text-white" target="_blank">Canosoft Techonology</a>  - All rights reserved
            </p>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/frontend/vendors/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/counter/countUp.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/dropzone/js/dropzone.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/hc-sticky/hc-sticky.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jparallax/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/mapbox-gl/mapbox-gl.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/dataTables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/common/lazyload.js') }}"></script>
<script src="{{ asset('assets/frontend/js/theme.js') }}"></script>
@yield('js')
@stack('scripts')
</body>
</html>


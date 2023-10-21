<div class="cta-banner mx-auto maxw1600 pt10 bdrs12 position-relative mx20-lg px20-sm">
    <div class="container">
        <div class="row align-items-start align-items-xl-center">
            <div class="col-md-10 col-lg-7 col-xl-5">
                <div class="position-relative mb40 mb0-sm wow fadeInRight" data-wow-delay="300ms">
                    @if($setting_data && $setting_data->google_map)
                            <iframe src="{{ $setting_data->google_map }}" style="border:0;width: 600px;height: 500px;" allowfullscreen="" loading="lazy" class="pt40 pl50"></iframe>
                    @endif
                </div>
            </div>
            <div class="col-md-8 col-lg-5 col-xl-6 offset-xl-1">
                <div class="about-box-1 pe-4 mt10 mt0-lg mb30-lg wow fadeInLeft main-title2" data-wow-delay="300ms" style="margin-bottom: 0px;">
                    <h2 class="title">{{ $element->first()->title ?? '' }}</h2>
                    <p class="paragraph">{{ $element->first()->subtitle ?? '' }}</p>
                    <div class="text mb25 mb10-md fz16 text-justify">
                        {{ $element->first()->description ?? '' }}
                    </div>
                    @if($element->first()->button_link)
                        <a href="{{$element->first()->button_link}}" class="ud-btn btn-dark">{{ $element->first()->button ?? 'Explore more' }}<i class="fal fa-arrow-right-long"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


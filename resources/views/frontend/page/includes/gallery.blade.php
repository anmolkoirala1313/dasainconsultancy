{{--<section class="gallery-area section--padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-heading text-center">--}}
{{--                    <h4 class="font-size-16 pb-2">{{ $element->list_number_2 ?? '' }}</h4>--}}
{{--                    <h2 class="sec__title">{{ $element->list_number_1 ?? '' }}</h2>--}}
{{--                </div>--}}
{{--            </div><!-- end col-lg-12 -->--}}
{{--        </div><!-- end row -->--}}
{{--        <div class="row padding-top-50px">--}}
{{--            @foreach($element->pageSectionGalleries as $gallery)--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="gallery-card">--}}
{{--                        <a class="d-block" data-fancybox="gallery" href="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" data-caption="Showing image 1">--}}
{{--                            <img class="custom_gallery_size lazy" data-src="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="pt60 pb90 bgc-f8">
    <div class="container">
        <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title2 text-start text-md-center">
                <h2 class="title">{{ $element->list_number_1 ?? '' }}</h2>
                <p class="paragraph">{{ $element->list_number_2 ?? '' }}</p>
            </div>
        </div>
        <div class="row mb30 mt10 wow fadeInUp" data-wow-delay="300ms">
            @foreach($element->pageSectionGalleries as $gallery)
                <div class="item col-md-4">
                    <div class="sp-img-content">
                        <a class="popup-img preview-img-2 sp-img mb30" href="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" style="width: 400px;height: 300px;border-radius: 12px;">
                            <img class="w-100" src="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" alt="" style="object-fit: cover;">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

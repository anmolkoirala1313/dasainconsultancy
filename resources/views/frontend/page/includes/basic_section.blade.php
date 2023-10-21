<section class="pb-lg-13 bg-single-image-03 pt-11 pb-11" data-animated-id="5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 border border-2x mb-6 mb-md-0 h-100">
                <div class="py-0">
                    <img src="{{ asset(imagePath($element->first()->image)) }}" alt="">
                </div>
            </div>
            <div class="col-md-7 h-100">
                <div class="pl-md-10 pr-md-8">
                    <div class="col-md-9">
                        <h2 class="text-heading">{{ $element->first()->title ?? '' }}</h2>
                        <span class="heading-divider"></span>
                    </div>
                    <div class="mb-4 fs-16 custom-description">
                        {!! $element->first()->description ?? '' !!}
                    </div>
                    @if($element->first()->button_link)
                        <a href="{{$element->first()->button_link}}" class="btn btn-lg btn-primary mt-2 px-10">
                            {{ $element->first()->button ?? 'Explore more' }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

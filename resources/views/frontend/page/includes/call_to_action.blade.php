<section class="pt-11 pb-13 bg-cover bg-white-overlay" style="background-image:linear-gradient(360deg, rgba(24, 26, 48, 0) 0%, #3a3b3e 100%),url({{ asset('assets/frontend/images/bread-bg8.jpeg') }})" data-animated-id="9">
    <div class="container">
        <form class="text-center fadeInUp animated" data-animate="fadeInUp">
            <p class="text-primary font-weight-500 letter-spacing-263 text-center text-uppercase mb-3">{{ $element->first()->subtitle ?? '' }}</p>
            <h2 class="fs-34 font-weight-normal lh-141 text-white mxw-840">
                {{ $element->first()->title ?? '' }}
            </h2>
            @if($element->first()->button_link)
                <a href="{{ $element->first()->button_link }}"  class="btn btn-lg btn-primary mt-2 px-10">{{ $element->first()->button ?? 'Learn More' }}<i class="fal fa-arrow-right-long"></i></a>
            @endif
        </form>
    </div>
</section>

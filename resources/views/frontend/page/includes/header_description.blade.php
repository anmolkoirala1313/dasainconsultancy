<section class="pb-12" data-animated-id="2">
    <div class="container">
        <div class="row ml-xl-0 mr-xl-n6">
            <div class="col-lg-12 mb-6 mb-lg-0 pr-xl-6 pl-xl-0">
                @if($element->first()->subtitle)
                <h3 class="fs-md-32 text-heading lh-141 mb-2">
                    {{$element->first()->subtitle ?? '' }}
                </h3>
                @endif
                <div class="lh-214 mb-9 custom-description">
                    {!! $element->first()->description ?? '' !!}
                </div>
            </div>
        </div>
    </div>
</section>

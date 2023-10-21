<section class="bg-patten-03 bg-gray-01 pt-10 pb-13" data-animated-id="3">
    <div class="container">
        <p class="letter-spacing-263 text-uppercase text-primary mb-2 font-weight-500 text-center">{{ $element->first()->subtitle ?? '' }}</p>
        <h2 class="text-heading text-center">{{ $element->first()->title ?? '' }}</h2>
        <span class="heading-divider mx-auto"></span>
        <div class="row mt-8">
            @foreach($element as $index=>$row)

                <div class="col-md-4 mb-6 mb-lg-0">
                    <div class="card shadow-2 px-7 pb-6 pt-4 h-100 border-0">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
{{--                            @if($index==0)--}}
{{--                                <span class="far fa-font-awesome-flag"></span>--}}
{{--                            @elseif($index==1)--}}
{{--                                <span class="far fa-eye"></span>--}}
{{--                            @else--}}
{{--                                <i class="icon flaticon-favourite"></i>--}}
{{--                            @endif--}}
                        </div>
                        <div class="card-body px-0 pt-6 pb-0 text-center">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">{{$row->list_title ?? ''}}</h4>
                            <p class="card-text px-2">
                                {{$row->list_description ?? ''}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

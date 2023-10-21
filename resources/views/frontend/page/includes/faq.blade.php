

<section class="pb-lg-13 bg-single-image-03 pt-11 pb-11" data-animated-id="5">
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-6">
                <h2 class="text-heading">{{ $element->first()->title ?? '' }}</h2>
                @if($element->first()->title)
                    <span class="heading-divider"></span>
                @endif
            </div>
        </div>
        <div id="accordion-style-01" class="accordion accordion-01 row my-7 my-md-0 mx-3 mx-md-0">
            <div class="col-md-12 pt-md-0 pt-6 pl-0">
                @foreach($element as $index=>$row)
                    <div class="card border-0 shadow-xxs-2 mb-6 rounded-top overflow-hidden">
                        <div class="card-header border-0 p-0 rounded-top" id="heading_{{$index}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-500 pl-6 pr-7 py-3 fs-16 position-relative w-100 text-left rounded-0 {{$loop->first ? '':'collapsed'}}" data-toggle="collapse"
                                        data-target="#collapse_{{$index}}" aria-expanded="true" aria-controls="collapse_{{$index}}">
                                    {{ $row->list_title ?? '' }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapse_{{$index}}" class="collapse {{$loop->first ? 'show':''}}" aria-labelledby="heading_{{$index}}" data-parent="#accordion-style-01" style="">
                            <div class="card-body fs-15 lh-2 pl-6 pr-7 pb-6">
                                {{ $row->list_description ?? '' }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

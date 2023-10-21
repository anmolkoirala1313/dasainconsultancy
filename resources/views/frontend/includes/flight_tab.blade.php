
{!! Form::open(['route' => $module.'activity.search', 'method'=>'POST', 'class'=>'d-none row d-md-flex flex-wrap align-items-center search_tour_form']) !!}
<div class="col-md-10 mb-3 mb-md-0">
    <div class="row">
        <div class="form-group mb-3 mb-md-0 col-md-3">
            <label for="language" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Destination</label>
            {!! Form::select('travel_destination', ['1'=>'national','0'=>'international'] , 1,['class'=>'form-control pl-0 rounded-0 bg-white selectpicker text-capitalize','id'=>'travel_destination','placeholder'=>'Select Destination','data-style'=>'bg-white pl-0 text-dark rounded-0']) !!}
            <span class="text-danger flight-required" id="destination-prompt"></span>
        </div>
        <div class="col-md-6"  id="for-destination">
            <div class="row">
                <div class="form-group mb-3 mb-md-0 col-md-6">
                    <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">From</label>
                    {!! Form::select('from', $data['flight_list'], null,['class'=>'form-control pl-0 rounded-0 bg-white selectpicker','id'=>'from','placeholder'=>'Select From']) !!}
                    <span class="text-danger" id="from-prompt"></span>
                </div>
                <div class="form-group mb-3 mb-md-0 col-md-6">
                    <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">To</label>
                    {!! Form::select('to', $data['flight_list'], null,['class'=>'form-control pl-0 rounded-0 bg-white selectpicker','id'=>'to','placeholder'=>'Select To']) !!}
                    <span class="text-danger" id="to-prompt"></span>
                </div>
            </div>
        </div>
        <div class="form-group mb-3 mb-md-0 col-md-3">
            <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Date</label>
            {!! Form::date('travel_date', now(),['class'=>'form-control pl-0 rounded-0 bg-white','id'=>'travel_date','placeholder'=>'Select date']) !!}
            <span class="text-danger flight-required" id="date-prompt"></span>
        </div>
        <div class="form-group mb-3 mt-2 mb-md-0 col-md-4">
            <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Adult</label>
            {!! Form::number('adult_number', null,['class'=>'form-control pl-0 rounded-0 bg-white','id'=>'adult_number','min'=>'0','placeholder'=>'Number of adults']) !!}
            <span class="text-danger flight-required" id="adult-number-prompt"></span>
        </div>
        <div class="form-group mb-3 mt-2 mb-md-0 col-md-4">
            <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Kids</label>
            {!! Form::number('kids_number', null,['class'=>'form-control pl-0 rounded-0 bg-white','id'=>'kids_number','min'=>'0','placeholder'=>'Number of kids']) !!}
        </div>
        <div class="form-group mb-3 mt-2 mb-md-0 col-md-4">
            <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Type</label>
            {!! Form::select('travel_type', ['1'=>'one way','0'=>'return'] , 1,['class'=>'form-control pl-0 rounded-0 bg-white','id'=>'travel_type','placeholder'=>'Select type']) !!}
            <span class="text-danger flight-required" id="type-prompt"></span>
        </div>
    </div>
</div>
<div class="col-md-2 pl-0">
    <button type="button" class="btn btn-primary btn-lg btn-block" id="book-flight">
        Search
    </button>
</div>
{!! Form::close() !!}

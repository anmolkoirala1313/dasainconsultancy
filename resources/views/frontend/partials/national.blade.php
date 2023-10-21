<div class="row">
    <div class="form-group mb-3 mb-md-0 col-md-6">
        <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">From</label>
        {!! Form::select('from', $data['flight_list'], null,['class'=>'form-control pl-0 rounded-0 bg-white','id'=>'from','placeholder'=>'Select From']) !!}
        <span class="text-danger" id="from-prompt"></span>
    </div>
    <div class="form-group mb-3 mb-md-0 col-md-6">
        <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">To</label>
        {!! Form::select('to', $data['flight_list'], null,['class'=>'form-control pl-0 rounded-0 bg-white','id'=>'to','placeholder'=>'Select To']) !!}
        <span class="text-danger" id="to-prompt"></span>
    </div>
</div>

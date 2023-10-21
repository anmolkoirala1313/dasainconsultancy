{!! Form::open(['route' => $module.'activity.search', 'method'=>'POST', 'class'=>'d-none row d-md-flex flex-wrap align-items-center search_tour_form']) !!}
    <div class="col-md-5 mb-3 mb-md-0">
        <div class="row">
            <div class="form-group mb-3 mb-md-0 col-md-6">
                <label for="language" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Language</label>
                {!! Form::select('package_category_id', $data['search_categories'] , null,['class'=>'form-control form-control-sm font-weight-600  shadow-0 bg-white selectpicker','id'=>'package_category_id','placeholder'=>'Select category','data-style'=>'bg-white pl-0 text-dark rounded-0']) !!}
            </div>
            <div class="form-group mb-3 mb-md-0 col-md-6">
                <label for="region" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Region</label>
                {!! Form::select('country_id', $data['search_countries'] , null,['class'=>'form-control font-weight-600 pl-0 bg-white selectpicker form-control-sm','id'=>'country_id','placeholder'=>'Select country','data-style'=>'bg-white pl-0 text-dark rounded-0']) !!}
            </div>
        </div>
    </div>
    <div class="form-group mb-3 mb-lg-0 col-md-5">
        <label for="search" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Search</label>
        <div class="input-group input-group-sm">
            {!! Form::text('title', null,['class'=>'form-control pl-0 rounded-0 bg-white','id'=>'title','placeholder'=>'Name of activity..']) !!}
            <div class="input-group-append ml-0">
                <span class="fs-18 input-group-text bg-white rounded-0"><i class="fal fa-search"></i></span>
            </div>
        </div>
    </div>
    <div class="col-md-2 pl-0">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            Search
        </button>
    </div>
{!! Form::close() !!}

{!! Form::open(['route' => $module.'activity.search', 'method'=>'POST', 'class'=>'d-block d-md-none search_tour_form']) !!}
    <div class="d-flex align-items-center">
        <a class="text-body hover-primary d-inline-block fs-24 lh-1 mr-5" data-toggle="collapse" href="#collapseMobileSearch" role="button" aria-expanded="false" aria-controls="collapseMobileSearch">
            <i class="fal fa-cog"></i>
        </a>
        <div class="input-group">
            {!! Form::text('title', null,['class'=>'form-control pl-0 rounded-0 bg-white','id'=>'title','placeholder'=>'Name of activity..']) !!}
            <div class="input-group-append ml-0">
                <span class="fs-18 input-group-text bg-white rounded-0"><i class="fal fa-search"></i></span>
            </div>
        </div>
    </div>
    <div class="collapse" id="collapseMobileSearch">
        <div class="card card-body border-0 px-0">
            <div class="form-group mb-3">
                <label class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Category</label>
                {!! Form::select('package_category_id', $data['search_categories'] , null,['class'=>'form-control form-control-sm font-weight-600  shadow-0 bg-white selectpicker','id'=>'package_category_id','placeholder'=>'Select category','data-style'=>'bg-white pl-0 text-dark rounded-0']) !!}

            </div>
            <div class="form-group mb-3">
                <label class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Country</label>
                {!! Form::select('country_id', $data['search_countries'] , null,['class'=>'form-control font-weight-600 pl-0 bg-white selectpicker form-control-sm','id'=>'country_id','placeholder'=>'Select country','data-style'=>'bg-white pl-0 text-dark rounded-0']) !!}
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                Search
            </button>
        </div>
    </div>
{!! Form::close() !!}



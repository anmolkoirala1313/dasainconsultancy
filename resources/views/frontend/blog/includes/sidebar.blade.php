<div class="primary-sidebar-inner">
    <div class="card mb-4">
        <div class="card-body px-6 pt-5 pb-6">
            <h4 class="card-title fs-16 lh-2 text-dark mb-3">Search</h4>
            {!! Form::open(['route' => $base_route.'search', 'method'=>'GET', 'class'=>'search_blog_form']) !!}
                <div class="position-relative">
                    <input type="text" id="search02" class="form-control form-control-lg border-0 shadow-none"  name="for" placeholder="Type your keywords..."">
                    <div class="position-absolute pos-fixed-center-right">
                        <button type="submit" class="btn fs-15 text-dark shadow-none"><i class="fal fa-search"></i></button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    @if(count( $data['categories']) > 0)
        <div class="card mb-4">
            <div class="card-body px-6 pt-5 pb-6">
                <h4 class="card-title fs-16 lh-2 text-dark mb-3">Categories</h4>
                <ul class="list-group list-group-no-border">
                    @foreach($data['categories'] as $category)
                        <li class="list-group-item p-0">
                            <a href="{{ route($base_route.'category',$category->slug) }}" class="d-flex text-body hover-primary">
                                <span class="lh-29">{{$category->title}} </span>
                                <span class="d-block ml-auto">({{$category->blogs_count}})</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if(count( $data['latest']) > 0)
        <div class="card mb-4">
            <div class="card-body px-6 pt-5 pb-6">
                <h4 class="card-title fs-16 lh-2 text-dark mb-3">Latest Posts</h4>
                <ul class="list-group list-group-flush">
                    @foreach($data['latest'] as $latest)
                        <li class="list-group-item px-0 pt-3 pb-3">
                            <div class="media">
                                <div class="position-relative mr-3">
                                    <a href="{{ route($module.'blog.show',$latest->slug) }}" class="d-block w-100px rounded pt-11 bg-img-cover-center" style="background-image: url({{ asset(imagePath($latest->image)) }})">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="fs-14 lh-186 mb-1">
                                        <a href="{{ route($module.'blog.show',$latest->slug) }}" class="text-dark hover-primary">
                                            {{ $latest->title }}
                                        </a>
                                    </h4>
                                    <div class="text-gray-light">
                                        {{date('d M Y', strtotime($latest->created_at))}}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>

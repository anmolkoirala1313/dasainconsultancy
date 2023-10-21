<section class="pt-2 pb-13 page-title bg-img-cover-center bg-white-overlay" style="background-image:url({{ isset($page_image) && $page_image  ? asset(imagePath($page_image)) : asset('assets/frontend/images/'.$breadcrumb_image) }});">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                @if($page_method !=='index')
                    <li class="breadcrumb-item text-white" aria-current="page">
                        <a href="{{route($base_route.'index')}}">{{ $page }}</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="{{ $page_title }}">
                        {{ $page_title }}
                    </li>
                @else
                    <li class="breadcrumb-item active text-white" aria-current="  {{ $page }}">
                        {{ $page }}
                    </li>
                @endif
            </ol>
        </nav>
        <h1 class="fs-30 lh-15 mb-0 text-white font-weight-500 text-center pt-10" data-animate="fadeInDown">
            {{ $data['row']->title ?? $page_title ?? '' }}
        </h1>
    </div>
</section>

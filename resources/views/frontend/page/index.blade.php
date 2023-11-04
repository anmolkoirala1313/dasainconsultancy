@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}" />
<style>
    .image-dimension{
        height: 270px;
        object-fit: cover;
    }
</style>
@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action.jpeg', 'page_image'=> $data['row']->image])

    @foreach($data['section_elements'] as $index=>$element)
        @if($index == 'basic_section' && count($element)>0)
            @include($base_route.'includes.basic_section')
        @endif
        @if($index == 'background_image_section' && count($element)>0)
            @include($base_route.'includes.background_image_section')
        @endif
        @if($index == 'call_to_action' && count($element)>0)
            @include($base_route.'includes.call_to_action')
        @endif
        @if($index == 'map_and_description' && count($element)>0)
            @include($base_route.'includes.map_and_description')
        @endif
        @if($index == 'gallery')
            @include($base_route.'includes.gallery')
        @endif
    @endforeach
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection

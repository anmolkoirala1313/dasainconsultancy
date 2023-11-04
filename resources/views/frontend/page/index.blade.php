@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'background_action.jpeg'])

    @foreach($data['section_elements'] as $index=>$element)
        @if($index == 'basic_section' && count($element)>0)
            @include($base_route.'includes.basic_section')
        @endif
    @endforeach
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection

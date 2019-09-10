@extends('layout.layout')
@section('title','Summer Camp')

@section('css')
@stop

@section('content')
<div id="summer-camp">
    <div id="banner-main-block" class="section position-relative">
        <img id="banner-bg" class="w-100 position-relative" src="{{asset('images/about_us/bg-gallery.png')}}" alt="image">
        <img id="banner-main" class="position-absolute" src="{{asset('images/feature/banner-main-feature.png')}}" alt="banner">

        <div class="info-slide-block">

        </div>
    </div>
    @include('layout._congratulation')
</div>
@stop

@section('js')
@stop
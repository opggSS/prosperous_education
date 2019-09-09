@extends('layout.layout')
@section('title','Application')
@section('css')

<link rel="stylesheet" href="{{asset('css/application.css')}}" type="text/css" >

@stop

@section('content')
<div id="banner-main-block" class="section position-relative" >
    {{-- <img id="banner-bg" class="w-100 position-relative" src="../images/about_us/bg-gallery.png" alt="image"> --}}
    <div class="container">
        <img width="100%" src="../images/about_us/banner-main.png" alt="banner" center>
        <div class="center-center">
            <img src="../images/logo.png" alt="" width="100">
            <div class="divider"></div>
            <h2>学龄前留学到硕博申请</h2>
            <div class="divider"></div>
        </div>
    </div>
    <div class="info-slide-block">
    </div>
</div>




@stop
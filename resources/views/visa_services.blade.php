@extends('layout.layout')
@section('title','Visa Services')
@section('css')
<link rel="stylesheet" href="../css/visa.css">
@stop

@section('content')
<div id="banner-main-block" class="section position-relative">
  <img id="banner-bg" class="w-100 position-relative" src="../images/visa/bg-gallery.png" alt="image">
  <img id="banner-main" class="position-absolute" src="../images/visa/banner-main-visa.png" alt="banner">

  <div class="info-slide-block">

  </div>
</div>
@include('layout._congratulation')

<div id="banner-1-block" class="section">
  <div class="container text-center">
    <div class="tit public w-100 d-block">
      <span class="tit-y d-inline-block pl-4">
        企业文化
        <span class="tit-g d-inline-block py-2 px-4">ENTERPRISE CULTURE</span>
      </span>
    </div>
  </div>
</div>

@stop

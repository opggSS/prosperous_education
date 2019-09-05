@extends('layout.layout')
@section('title','Home')

@section('content')
<div id="home">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{asset('images/home/banner1.png')}}" alt="banner1"></div>
            <div class="swiper-slide"><img src="{{asset('images/home/banner2.png')}}" alt="banner1"></div>
            <div class="swiper-slide"><img src="{{asset('images/home/banner3.png')}}" alt="banner1"></div>
            <div class="swiper-slide"><img src="{{asset('images/home/banner4.png')}}" alt="banner1"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
@stop


@section('js')
<script>
    var swiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>
@stop
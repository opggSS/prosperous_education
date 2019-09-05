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
    <div class="congratulation-container text-center">
        <h4>Congratulations</h4>
        <h4>恭喜 Gao Yawen 同学被西安大略 (UWO) 工程和科学系录取</h4>
    </div>
    <div class="prosperous-services-container">
        <div class="prosperous-services-title text-center">
            <h1>成就梦想 大展宏图</h1>
            <h5>/ REALIZE YOUR AMBITION /</h5>
            <div class="prosperous-services-title-wrap"><h4>PROSPEROUS</h4></div>
        </div>
        <div class="prosperous-services-box row no-gutters">
            <div class="prosperous-services-box-wrap col-offset-1 col-md-10">
                <div class="row">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
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
    $(window).on('load',function () {
        let smallestImageSize = 10000;
        for(let i=0;i<$('.swiper-slide img').length; i++){
            let height = $('.swiper-slide img')[i].height;
            height<smallestImageSize ? smallestImageSize = height : smallestImageSize;
        }
        $('.swiper-container').css('height', smallestImageSize);
    })

    $(window).on('resize', function () {
        let smallestImageSize = 10000;
        for(let i=0;i<$('.swiper-slide img').length; i++){
            let height = $('.swiper-slide img')[i].height;
            height<smallestImageSize ? smallestImageSize = height : smallestImageSize;
        }
        $('.swiper-container').css('height', smallestImageSize);
    })
</script>
@stop
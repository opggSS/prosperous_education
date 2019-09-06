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
            <div class="prosperous-services-box-wrap offset-md-1 col-md-10">
                <div class="row prosperous-services-top-warp">
                    <div class="col-md-8 p-0 prosperous-services-lefttop-box">
                        <img src="{{asset('images/home/1.png')}}" width="100%">
                    </div>
                    <div class="col-md-4 p-0 prosperous-services-righttop-box">
                        <a href="{{url('/application?type=kid')}}">
                            <div>
                                <h6><span>低龄</span>留学</h6><br>
                                <p> &#8227; learn more </p>
                            </div>
                        </a>
                        <a href="{{url('/application?type=secondary')}}">
                            <div>
                                <h6><span>高中</span>留学</h6><br>
                                <p> &#8227; learn more </p>
                            </div>
                        </a>
                        <a href="{{url('/application?type=bachelor')}}">
                            <div>
                                <h6><span>本科</span>留学</h6><br>
                                <p> &#8227; learn more </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row prosperous-services-buttom-box">
                    <div class="col-md-8 p-0 prosperous-services-leftbot-box">
                        <a href="{{url('/application?type=elite')}}">
                            <div>
                                <h6><span>菁英</span>计划</h6><br>
                                <p> &#8227; learn more </p>
                                <span id="elite-service-description">宏图菁英计划通过VIP升学规划、语培、学科全方位
                                    辅导、背景提升，为菁英学子提供全程个性化定
                                    制教育服务，旨在“名校申请”和“学生成长”。</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 p-0 prosperous-services-rightbot-box">
                        <a href="{{url('/application?type=master')}}">
                            <div>
                                <h6><span>研究生</span>留学</h6><br>
                                <p> &#8227; learn more </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="steward-title-container text-center">
        <h1>一站式“菁英教育留学”服务商</h1>
        <h4>宏图教育经过15年一站式“菁英教育留学”服务经验累积，拥有完备的教育留学服务体系，
            包括了留学申请、升学规划、语言培训、学科辅导、课外活动、职业培训、签证服务等丰富的产品线，可满足学员的不同需求。
            宏图教育“菁英计划”以加拿大名校申请为基本出发点，在更全面维度上关注孩子的素质提升和健康成长。</h4>
    </div>
    <div class="steward-service-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/sample-icon.png')}}" width="100%"></div>
                    <h5>留学申请</h5>
                    <p><i class="fas fa-star"></i> 低龄留学申请</p>
                    <p><i class="fas fa-star"></i> 高中留学申请辅导</p>
                    <p><i class="fas fa-star"></i> 本科留学申请</p>
                    <p><i class="fas fa-star"></i> 硕士留学申请</p>
                    <p><i class="fas fa-star"></i> 宏图菁英计划</p>
                </div>
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/sample-icon.png')}}" width="100%"></div>
                    <h5>升学规划</h5>
                    <p><i class="fas fa-star"></i> 低龄留学申请</p>
                    <p><i class="fas fa-star"></i> 高中留学申请辅导</p>
                    <p><i class="fas fa-star"></i> 本科留学申请</p>
                    <p><i class="fas fa-star"></i> 硕士留学申请</p>
                    <p><i class="fas fa-star"></i> 宏图菁英计划</p>
                </div>
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/sample-icon.png')}}" width="100%"></div>
                    <h5>签证服务</h5>
                    <p><i class="fas fa-star"></i> 低龄留学申请</p>
                    <p><i class="fas fa-star"></i> 高中留学申请辅导</p>
                    <p><i class="fas fa-star"></i> 本科留学申请</p>
                    <p><i class="fas fa-star"></i> 硕士留学申请</p>
                    <p><i class="fas fa-star"></i> 宏图菁英计划</p>
                </div>
            </div>
            <div class="row">
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
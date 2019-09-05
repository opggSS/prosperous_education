<!doctype html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta tags reserved for SEO -->
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords"  content="" />

    <!-- Bootstrap CSS & CSS Plugin -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    @yield('css')
    <title>
        @yield('title') | Prosperous Education
    </title>
</head>
<body>

{{--****************************************** Menu Content **************************************************--}}
<div id="menu" class="row sticky-top">
    <div class="row text-right" id="contact-bar">
        <span>加拿大服务热线：604-957-5877</span>
        <span id="subscribe-wechat"><img src="{{asset('images/wechat-logo.png')}}">关注微信</span>
        <span id="contact-top-bar"><img src="{{asset('images/address-pin.png')}}">联系我们</span>
    </div>
    <div class="row" id="menu-bar">
        <div class="offset-md-1 col-md-3" id="menu-logo">
            <a href="{{url('/')}}"><img src="{{url('/images/logo.png')}}" alt="logo" width="150"></a>
        </div>
        <div class="col-md-8">
                <ul class="nav">
                    <li><a class="{{Request::is('/') ? 'active' : ''}}" href="{{url('/')}}">首页</a></li>
                    <li><a class="{{Request::is('about_us') ? 'active' : ''}}" href="{{url('/about_us')}}">关于我们</a></li>
                    <li><a class="{{Request::is('application') ? 'active' : ''}}" href="{{url('/application')}}">留学申请</a></li>
                    <li><a class="{{Request::is('education_planning') ? 'active' : ''}}" href="{{url('/education_planning')}}">升学规划</a></li>
                    <li><a class="{{Request::is('visa_services') ? 'active' : ''}}" href="{{url('/visa_services')}}">签证服务</a></li>
                    <li><a class="{{Request::is('overseas_services') ? 'active' : ''}}" href="{{url('/overseas_services')}}">境外服务</a></li>
                    <li><a class="{{Request::is('career_training') ? 'active' : ''}}" href="{{url('/career_training')}}">职业培训</a></li>
                    <li><a class="{{Request::is('summer_camp') ? 'active' : ''}}" href="{{url('/summer_camp')}}">特色夏令营</a></li>
                </ul>
        </div>
    </div>
</div>

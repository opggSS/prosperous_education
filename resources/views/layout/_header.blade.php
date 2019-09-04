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

{{--****************************************** Content **************************************************--}}
<div id="menubar" class="row">
    <div class="col-2 mt-2 mt-sm-0" id="menu-logo">
        <a href="{{url('/')}}"><img src="{{url('/images/foundation-logo.png')}}" alt="logo" width="150"></a>
    </div>
    <div class="col-10 d-none d-lg-inline-block">
            <ul class="nav nav-tabs">
                <li><a class="{{Request::is('home') ? 'active' : ''}}" href="{{url('/')}}">HOME</a></li>
                <li class="dropdown"><a class="{{Request::is('about_us') ? 'active' : ''}}" data-toggle="dropdown" href="#" onclick="switchActive(this)">ABOUT US</a>
                    <ul class="dropdown-menu">
                        <li class="mt-2"><a href="{{url('/about_us')}}">OUR JOURNEY</a></li>
                        <li class="mt-2"><a href="{{url('/about_us')}}">CONTACT US</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a data-toggle="dropdown" href="#" onclick="switchActive(this)">PROJECTS</a>
                    <ul class="dropdown-menu">
                        <li class="mt-2"><a href="{{url('/projects')}}">SCHOOL</a></li>
                        <li class="mt-2"><a href="{{url('/projects')}}">COMMUNITY</a></li>
                        <li class="mt-2"><a href="{{url('/newslist')}}">News</a></li>
                    </ul>
                </li>
                <li><a class="{{Request::is('gallery') ? 'active' : ''}}" href="{{url('/gallery')}}">GALLERY</a></li>
                <li><a class="{{Request::is('public_info') ? 'active' : ''}}" href="{{url('/public_info')}}">PUBLIC INFO</a></li>
                <li><a id="menu-donate" href="{{url('/donate')}}">DONATE</a></li>
            </ul>
    </div>
</div>

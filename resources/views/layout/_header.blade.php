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
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    @yield('css')
    <title>
        @yield('title') | Prosperous Education
    </title>
</head>
<body>

{{--****************************************** Menu Content **************************************************--}}
<div id="menu" class="row no-gutters sticky-top">
    <div class="row no-gutters text-right" id="contact-bar">
        <span>加拿大服务热线：604-957-5877</span>
        <span id="subscribe-wechat" class="d-none d-md-inline-block"><img src="{{asset('images/wechat-logo.png')}}">关注微信</span>
        <span id="contact-top-bar" class="d-none d-md-inline-block"><img src="{{asset('images/address-pin.png')}}">联系我们</span>
    </div>
    <div class="row" id="menu-bar">
        <div class="offset-lg-1 col-lg-2 col-4 col-md-2 offset-1" id="menu-logo">
            <a href="{{url('/')}}"><img src="{{url('/images/logo.png')}}" alt="logo"></a>
        </div>
        <div class="offset-lg-1 col-lg-7 col-9 d-none d-md-block">
                <ul class="nav">
                    <li><a class="{{Request::is('/') ? 'active' : ''}}" href="{{url('/')}}">首页</a></li>
                    <li><div class="border-left"></div><a class="{{Request::is('about_us') ? 'active' : ''}} menu-about-us" href="{{url('/about_us')}}">关于我们</a></li>
                    <li><div class="border-left"></div><a class="{{Request::is('application') ? 'active' : ''}} menu-application" href="{{url('/application')}}">留学申请</a></li>
                    <li><div class="border-left"></div><a class="{{Request::is('education_planning') ? 'active' : ''}} menu-planning" href="{{url('/education_planning')}}">升学规划</a></li>
                    <li><div class="border-left"></div><a class="{{Request::is('visa_services') ? 'active' : ''}} menu-visa" href="{{url('/visa_services')}}">签证服务</a></li>
                    <li><div class="border-left"></div><a class="{{Request::is('overseas_services') ? 'active' : ''}} menu-overseas" href="{{url('/overseas_services')}}">境外服务</a></li>
                    <li><div class="border-left"></div><a class="{{Request::is('career_training') ? 'active' : ''}} menu-job" href="{{url('/career_training')}}">职业培训</a></li>
                    <li><div class="border-left"></div><a class="{{Request::is('summer_camp') ? 'active' : ''}} menu-summer" href="{{url('/summer_camp')}}">特色夏令营</a></li>
                </ul>
        </div>
        <div class="col-2 offset-4 text-right d-block d-md-none">
            <button class="hamburger-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                            class="fas fa-bars fa-1x"></i></span></button>
        </div>
    </div>
    <nav class="navbar navbar-light light-blue lighten-4 d-block d-md-none">
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="{{Request::is('/') ? 'active' : ''}} nav-link" href="{{url('/')}}">首页</a>
                </li>
                <li class="nav-item">
                    <a class="{{Request::is('about_us') ? 'active' : ''}} nav-link" href="{{url('/about_us')}}">关于我们</a>
                </li>
                <li class="nav-item">
                    <a class="{{Request::is('application') ? 'active' : ''}} nav-link" href="{{url('/application')}}">留学申请</a>
                </li>
                <li class="nav-item">
                    <a class="{{Request::is('education_planning') ? 'active' : ''}} nav-link" href="{{url('/education_planning')}}">升学规划</a>
                </li>
                <li class="nav-item">
                    <a class="{{Request::is('visa_services') ? 'active' : ''}} nav-link" href="{{url('/visa_services')}}">签证服务</a>
                </li>
                <li class="nav-item">
                    <a class="{{Request::is('overseas_services') ? 'active' : ''}} nav-link" href="{{url('/overseas_services')}}">境外服务</a>
                </li>
                <li class="nav-item">
                    <a class="{{Request::is('career_training') ? 'active' : ''}} nav-link" href="{{url('/career_training')}}">职业培训</a>
                </li>
                <li class="nav-item">
                    <a class="{{Request::is('summer_camp') ? 'active' : ''}} nav-link" href="{{url('/summer_camp')}}">特色夏令营</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="menu-hover-detail">
        <div id="hover-about-us" hidden>
            <h5 id="eng-title">ABOUT US</h5><img class="ml-4" src="{{asset('images/icon-about.png')}}" width="30px">
            <h6 class="mt-3">宏图教育 - 通向加拿大菁英教育之门</h6>
            <h6>一站式 "留学管家" 服务商</h6>
            <p> </p>
        </div>
        <div id="hover-application" hidden>
            <h5 id="eng-title">STUDY ABROAD</h5><img class="ml-4" src="{{asset('images/icon-study.png')}}" width="30px">
            <h6 class="mt-3">宏图教育15年来专注加拿大菁英留学申请，</h6>
            <h6>可提供从低龄留学到硕博申请全阶段申请服务。</h6>
            <p><i class="fab fa-canadian-maple-leaf"></i>低龄留学</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>高中留学</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>大学留学</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>硕博留学</p>
        </div>
        <div id="hover-planning" hidden>
            <h5 id="eng-title">ENTRANCE PLANNING</h5><img class="ml-4" src="{{asset('images/icon-plan.png')}}" width="30px">
            <h6 class="mt-3">宏图教育升学规划，旨在因材施教，帮助学生，</h6>
            <h6>有效的提升个人核心竞争力，顺利完成学业，考取理想的大学。</h6>
            <p><i class="fab fa-canadian-maple-leaf"></i>贵族私校</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>菁英教育</p>
        </div>
        <div id="hover-visa" hidden>
            <h5 id="eng-title">VISA SERVICES</h5><img class="ml-4" src="{{asset('images/icon-visa.png')}}" width="30px">
            <h6 class="mt-3">宏图签证办理团队具有成熟高效的工作流程，</h6>
            <h6>确保学生整套签证材料的逻辑性、完整性和精确性。</h6>
            <p><i class="fab fa-canadian-maple-leaf"></i>学习签证</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>探亲签证</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>毕业工签</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>旅游签证</p>
        </div>
        <div id="hover-overseas" hidden>
            <h5 id="eng-title">OVERSEAS SERVICES</h5><img class="ml-4" src="{{asset('images/icon-oversea.png')}}" width="30px">
            <h6 class="mt-3">宏图教育境外服务体系确保学生从家门到校门，</h6>
            <h6>从生活到学习的方方面面都有宏图的保驾护航！</h6>
            <p><i class="fab fa-canadian-maple-leaf"></i>行前指导</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>落地协助</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>监护服务</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>家长服务</p>
        </div>
        <div id="hover-job" hidden>
            <h5 id="eng-title">CAREER TRAINING</h5><img class="ml-4" src="{{asset('images/icon-training.png')}}" width="30px">
            <h6 class="mt-3">宏图教育职业培训立足职业技能强化训练，旨在挖掘学术的潜力，</h6>
            <h6>延伸职业张力，激活职业生涯设计养成，成就学生职业梦想。</h6>
            <p><i class="fab fa-canadian-maple-leaf"></i>职业知识</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>职业技能</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>职业态度</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>职业道德</p>
        </div>
        <div id="hover-summer" hidden>
            <h5 id="eng-title">SUMMER CAMP</h5><img class="ml-4" src="{{asset('images/icon-camp.png')}}" width="30px">
            <h6 class="mt-3">宏图教育精品夏令营旨在为世界各地的学子打造独具特色、</h6>
            <h6>安全实效的个性化国际游学平台。</h6>
            <p><i class="fab fa-canadian-maple-leaf"></i>特色夏令营</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>学术夏令营</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>雅思训练营</p>
            <p><i class="fab fa-canadian-maple-leaf"></i>世界行者</p>
        </div>
    </div>
</div>

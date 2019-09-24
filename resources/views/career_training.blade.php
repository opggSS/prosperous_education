@extends('layout.layout')
@section('title','Career Training')

@section('css')
@stop

@section('content')
<div id="career-training">
    <div id="banner-main-block" class="section position-relative">
        <img id="banner-bg" class="w-100 position-relative" src="{{asset('images/about_us/bg-gallery.png')}}" alt="image">
        <img id="banner-main" class="position-absolute" src="{{asset('images/training/banner-main-training.png')}}" alt="banner">

        <div class="info-slide-block">

        </div>
    </div>
    @include('layout._congratulation')
    <div class="training-intro mb-5">
        <div class="training-title text-center mb-4">
            <h3>职业培训 <span>CAREER TRAINING</span></h3>
        </div>
        <div class="camp-intro-detail container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <p>宏图教育职业培训立足职业技能强化训练，旨在挖掘学生的职业潜力，延伸职业张力，激活职业生漄设计养成，成就学生职业梦想。</p>
                    <p>宏图教育培训专家拥有加拿大社会各行业的用人信息，随时接受学员查询，指导学员就业，同时对毕业学员进行跟踪调查，以获得用人单位的反馈信息，进一步调整和改进职业培训工作。</p>
                    <p>宏图职业教育学院还直接与企业联合办学，利用各自的优势共同开设企业需要的专业培训。专业课程由企业决定，毕业学生由企业接受，顺利地完成由培训到就业的转移过程。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="four-steps-control text-center mb-3">
        <div class="four-steps-button fs1"><img src="{{asset('images/training/arrow-tranning.png')}}">培训内容<div class="cro_right"></div></div>
        <div class="four-steps-button fs2"><img src="{{asset('images/training/arrow-tranning.png')}}">培训形式<div class="cro_right"></div></div>
        <div class="four-steps-button fs3"><img src="{{asset('images/training/arrow-tranning.png')}}">培训对象<div class="cro_right"></div></div>
        <div class="four-steps-button fs4"><img src="{{asset('images/training/arrow-tranning.png')}}">资源优势</div>
    </div>
    <div class="training-four-steps mb-5">
        <div class="swiper-container container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 offset-md-2 col-sm-5 offset-sm-1">
                                <h3>培训内容</h3>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <button>Learn More</button>
                            </div>
                            <div class="col-md-4 col-sm-4 offset-sm-1">
                                <img src="{{asset('images/training/four-step-1.png')}}" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 offset-md-2 col-sm-5 offset-sm-1">
                                <h3>培训内容</h3>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <button>Learn More</button>
                            </div>
                            <div class="col-md-4 col-sm-4 offset-sm-1">
                                <img src="{{asset('images/training/four-step-1.png')}}" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 offset-md-2 col-sm-5 offset-sm-1">
                                <h3>培训内容</h3>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <button>Learn More</button>
                            </div>
                            <div class="col-md-4 col-sm-4 offset-sm-1">
                                <img src="{{asset('images/training/four-step-1.png')}}" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 offset-md-2 col-sm-5 offset-sm-1">
                                <h3>培训内容</h3>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <p><i class="fab fa-canadian-maple-leaf"></i>Job Market</p>
                                <button>Learn More</button>
                            </div>
                            <div class="col-md-4 col-sm-4 offset-sm-1">
                                <img src="{{asset('images/training/four-step-1.png')}}" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-2 col-4">
                <img src="{{asset('images/training/six-banner-1.png')}}" alt="" width="100%">
            </div>
            <div class="col-md-2 col-4">
                <img src="{{asset('images/training/six-banner-2.png')}}" alt="" width="100%">
            </div>
            <div class="col-md-2 col-4">
                <img src="{{asset('images/training/six-banner-3.png')}}" alt="" width="100%">
            </div>
            <div class="col-md-2 col-4">
                <img src="{{asset('images/training/six-banner-4.png')}}" alt="" width="100%">
            </div>
            <div class="col-md-2 col-4">
                <img src="{{asset('images/training/six-banner-5.png')}}" alt="" width="100%">
            </div>
            <div class="col-md-2 col-4">
                <img src="{{asset('images/training/six-banner-6.png')}}" alt="" width="100%">
            </div>
        </div>
    </div>

    @include('layout._contact_form')
</div>
@stop

@section('js')

    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
            },
        });

        document.querySelector('.fs1').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.slideTo(0, 700);
        });
        document.querySelector('.fs2').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.slideTo(1, 700);
        });
        document.querySelector('.fs3').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.slideTo(2, 700);
        });
        document.querySelector('.fs4').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.slideTo(3, 700);
        });
    </script>
@stop
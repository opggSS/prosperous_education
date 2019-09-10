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
    <div class="summer-camp-intro mb-4">
        <div class="camp-intro-title text-center mb-4">
            <h3>特色夏令营 <span>SUMMER CAMP</span></h3>
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
    <div id="banner-2-block" class="section py-5">
        <div class="s1 swiper-container mt-4">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col col-4">
                                <div class="board container p-3">
                                    <h3>加拿大入境签证申请</h3>
                                    <div class="content mt-3">
                                        <p>小签（RE-ENTRY VISA）或出入境VISA，可用于在一定时期内多次出入加拿大国境；
                                            小签过期将无法正常出入境加拿大国境。对于小签的续签，成绩单和出勤率很重要，
                                            太多门功课F（不及格）或者出勤率不够，都会影响续签。只要正常学习、正常考试，续签都不会出现问题。</p>
                                    </div>

                                    <div class="img-container">
                                        <img class="w-100" src="../images/visa/banner-2-visa.png" alt="">
                                    </div>
                                    <div class="container text-center mt-3">
                                        <a href="javascript:;">Learn More ></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col col-4">
                                <div class="board container p-3">
                                    <h3>加拿大入境签证申请</h3>
                                    <div class="content mt-3">
                                        <p>大签（Study Permit）或学习签证，就是你合法居留在加拿大的一个身份凭证（即学生身份），
                                            也是学校给你入（学）籍的依据（一张A4左右的大纸）。
                                            需要注意的是：这张纸不能当进入加拿大国境的许可凭证。
                                            大签的续签，成绩单和出勤率很重要，太多门功课F（不及格）或者出勤率不够，都会影响续签。
                                            只要正常学习、正常考试，续签都不会出现问题。</p>
                                    </div>

                                    <div class="img-container">
                                        <img class="w-100" src="../images/visa/banner-3-visa.png" alt="">
                                    </div>
                                    <div class="container text-center mt-3">
                                        <a href="javascript:;">Learn More ></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col col-4">
                                <div class="board container p-3">
                                    <h3>加拿大入境签证申请</h3>
                                    <div class="content mt-3">
                                        <p>毕业工签（Post Graduate Work Permit）是指在加拿大获得公立专科及所有获得本科、
                                            研究生或博士学位的学生持学签即可拿到8个月到3年的工签，
                                            是openwork permit的一种，是属于不限制雇主的一种工作许可。
                                            这对于留学生来说是个非常利好的政策，也对将来移民申请有非常大的帮助。</p>
                                    </div>

                                    <div class="img-container">
                                        <img class="w-100" src="../images/visa/banner-4-visa.png" alt="">
                                    </div>
                                    <div class="container text-center mt-3">
                                        <a href="javascript:;">Learn More ></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-switch w-100 text-center">
            <div class="swiper-prev"><i class="fas fa-caret-square-left"></i></div>
            <div class="swiper-next"><i class="fas fa-caret-square-right"></i></div>
        </div>
    </div>
    @include('layout._contact_form')
</div>
@stop

@section('js')
<script>
    var swiper = new Swiper('.s1', {
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
            slidesPerView: 1,
            delay: 1000
        },
    });
</script>
@stop
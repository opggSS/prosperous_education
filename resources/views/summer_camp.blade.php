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
                            <div class="col col-sm-4">
                                <div class="board container p-3">
                                    <h3>雅思训练营</h3>
                                    <div class="content mt-3">
                                        <p><i class="fab fa-canadian-maple-leaf"></i>优质的环境，军事化管理</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>强大师资，正规管理</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>独家研发教材，丰富课程体系</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>浸泡式学习，提高学习兴趣</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>专业、专心、专注</p>
                                    </div>

                                    <div class="img-container">
                                        <img class="w-100" src="{{asset('images/feature/banner-1-feature.png')}}" alt="">
                                    </div>
                                    <div class="container text-center mt-3">
                                        <a href="javascript:;">Learn More ></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col col-sm-4">
                                <div class="board container p-3">
                                    <h3>学术夏令营</h3>
                                    <div class="content mt-3">
                                        <p><i class="fab fa-canadian-maple-leaf"></i>筛选美国、加拿大最优质的夏令营</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>真正 “国际化” 的学习生活环境</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>验最正宗的英式教育</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>统一定价，价格透明，“去中介费” </p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>免费分析对比最适合的夏校项目</p>
                                    </div>

                                    <div class="img-container">
                                        <img class="w-100" src="{{asset('images/feature/banner-2-feature.png')}}" alt="">
                                    </div>
                                    <div class="container text-center mt-3">
                                        <a href="javascript:;">Learn More ></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col col-sm-4">
                                <div class="board container p-3">
                                    <h3>世界行者</h3>
                                    <div class="content mt-3">
                                        <p><i class="fab fa-canadian-maple-leaf"></i>Assesment，测评</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>Discovery，探索工坊</p>
                                        <p><i class="fab fa-canadian-maple-leaf"></i>Planning，综合升学规划</p>
                                    </div>

                                    <div class="img-container">
                                        <img class="w-100" src="{{asset('images/feature/banner-3-feature.png')}}" alt="">
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
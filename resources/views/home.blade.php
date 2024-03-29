@extends('layout.layout')
@section('title','Home')

@section('content')
<div id="home">
    <div class="banner-swiper">
        <div class="swiper-container s1">
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
    @include('layout._congratulation')
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
                        <a href="{{url('/elite_program')}}">
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
        <div class="steward-service-title">
            <h3>管家服务项目 <span>Our Services</span></h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/icon-1.png')}}" width="100%"></div>
                    <h5>留学申请</h5>
                    <div class="card-detail">
                        <p><i class="fas fa-star"></i> 低龄留学申请</p><br>
                        <p><i class="fas fa-star"></i> 高中留学申请辅导</p><br>
                        <p><i class="fas fa-star"></i> 本科留学申请</p><br>
                        <p><i class="fas fa-star"></i> 硕士留学申请</p><br>
                        <p><i class="fas fa-star"></i> 宏图菁英计划</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/icon-2.png')}}" width="100%"></div>
                    <h5>升学规划</h5>
                    <div class="card-detail">
                        <p><i class="fas fa-star"></i> 海外监护 <i class="fas fa-star icon-rightside"></i> 背景提升 </p><br>
                        <p><i class="fas fa-star"></i> 学业规划 <i class="fas fa-star icon-rightside"></i> 留学管家 </p><br>
                        <p><i class="fas fa-star"></i> 学科辅导 <i class="fas fa-star icon-rightside"></i> 贵族私校 (VIP) </p><br>
                        <p><i class="fas fa-star"></i> 语言培训 <i class="fas fa-star icon-rightside"></i> 菁英计划 (VIP) </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/icon-3.png')}}" width="100%"></div>
                    <h5>签证服务</h5>
                    <div class="card-detail">
                        <p><i class="fas fa-star"></i> 入境签证申请</p><br>
                        <p><i class="fas fa-star"></i> 学签申请及学签续签</p><br>
                        <p><i class="fas fa-star"></i> 留学生毕业后工签</p><br>
                        <p><i class="fas fa-star"></i> 留学生家长陪读签证</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/icon-4.png')}}" width="100%"></div>
                    <h5>境外服务</h5>
                    <div class="card-detail">
                        <p><i class="fas fa-star"></i> 行前指导 <i class="fas fa-star icon-rightside"></i> 监护服务 </p><br>
                        <p><i class="fas fa-star"></i> 落地协助 <i class="fas fa-star icon-rightside"></i> 证件办理 </p><br>
                        <p><i class="fas fa-star"></i> 家长服务 <i class="fas fa-star icon-rightside"></i> 寄宿家庭安置 </p><br>
                    </div>
                </div>
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/icon-5.png')}}" width="100%"></div>
                    <h5>职业培训</h5>
                    <div class="card-detail">
                        <p><i class="fas fa-star"></i> 规划职业方向 <i class="fas fa-star icon-rightside"></i> 获得内推机会 </p><br>
                        <p><i class="fas fa-star"></i> 学习商业知识 <i class="fas fa-star icon-rightside"></i> 了解目标公司 </p><br>
                        <p><i class="fas fa-star"></i> 提升求职技能 <i class="fas fa-star icon-rightside"></i> 斩获工作Offer </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div><img src="{{asset('images/home/icon-6.png')}}" width="100%"></div>
                    <h5>特色夏令营</h5>
                    <div class="card-detail">
                        <p><i class="fas fa-star"></i> 少儿科学探秘夏令营</p><br>
                        <p><i class="fas fa-star"></i> UBC大学青少年夏令营</p><br>
                        <p><i class="fas fa-star"></i> 雅思考试提分夏令营</p><br>
                        <p><i class="fas fa-star"></i> 世界名校学术夏令营</p><br>
                        <p><i class="fas fa-star"></i> 世界行者(菁英青年领袖训练营)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="six-level-title-container text-center">
        <h1>“ <span>6</span>极管理体系 ”重新定义菁英教育留学</h1>
        <h5>宏图教育历经15年锻造了一套菁英教育留学“六极管理体系”<br>
            确保服务流程的专业化和质量管理的科学化<br>
            宏图教育每一位学生都将得到“6:1”以上服务团队<br>
            包括留学咨询、留学测评、方案制定、背景提升、个性化课程培训以及招生官审核修正等<br>
            服务模块服务流程的专业化让每个人做最擅长的工作，严格的每日沟通和跟进控制体系保证了团队合作效率<br>
            “六极管理体系”大大提高了名校录取率</h5>
    </div>
    <div class="six-level-swiper">
        <div class="swiper-container s2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row no-gutters text-center">
                            <div class="col-md-3">
                                <h5><span>1</span><span>级</span> 咨询及留学测评</h5>
                                <!-- <div class="img-div"><img src="{{asset('images/home/icon-7.png')}}" width="100%"></div> -->
                                <h4>定位申请学校及专业</h4>
                                <div class="card-detail">
                                    <p><i class="far fa-check-square"></i> 性格测评</p><br>
                                    <p><i class="far fa-check-square"></i> 兴趣测评</p><br>
                                    <p><i class="far fa-check-square"></i> 语言能力评估</p><br>
                                    <p><i class="far fa-check-square"></i> 多元化智能评估</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h5><span>2</span><span>级</span> 留学方案定制</h5>
                                <!-- <div class="img-div"><img src="{{asset('images/home/sample-icon.png')}}" width="100%"></div> -->
                                <h4>一对一方案设计<br>提高申请效率</h4>
                                <div class="card-detail">
                                    <p><i class="far fa-check-square"></i> 加拿大留学方案</p><br>
                                    <p><i class="far fa-check-square"></i> 留学费用预估</p><br>
                                    <p><i class="far fa-check-square"></i> 背景提升</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h5><span>3</span><span>级</span> 留学背景提升</h5>
                                <!-- <div class="img-div"><img src="{{asset('images/home/sample-icon.png')}}" width="100%"></div> -->
                                <h4>提升学术实践软实力背景<br>挖掘自身独特竞争力和价值</h4>
                                <div class="card-detail">
                                    <p><i class="far fa-check-square"></i> 学科竞赛 <i class="far fa-check-square icon-rightside"></i> 学术类夏令营 </p><br>
                                    <p><i class="far fa-check-square"></i> 体育比赛 <i class="far fa-check-square icon-rightside"></i> 社团活动 </p><br>
                                    <p><i class="far fa-check-square"></i> 艺术创作 <i class="far fa-check-square icon-rightside"></i> 工作实习 </p><br>
                                    <p><i class="far fa-check-square"></i> 义工活动 <i class="far fa-check-square icon-rightside"></i> 志愿者活动 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row no-gutters text-center">
                            <div class="col-md-3">
                                <h5><span>4</span><span>级</span> 升学规划陪伴</h5>
                                <!-- <div class="img-div"><img src="{{asset('images/home/sample-icon.png')}}" width="100%"></div> -->
                                <h4>长期规划陪伴学生成长</h4>
                                <div class="card-detail">
                                    <p><i class="far fa-check-square"></i> 专属教育培养计划</p><br>
                                    <p><i class="far fa-check-square"></i> 提高标化考试成绩</p><br>
                                    <p><i class="far fa-check-square"></i> 定制背景提升计划</p><br>
                                    <p><i class="far fa-check-square"></i> 陪伴学生成长</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h5><span>5</span><span>级</span> 个性化课程培训</h5>
                                <!-- <div class="img-div"><img src="{{asset('images/home/sample-icon.png')}}" width="100%"></div> -->
                                <h4>私人定制提高学习成绩</h4>
                                <div class="card-detail">
                                    <p><i class="far fa-check-square"></i> ESL</p><br>
                                    <p><i class="far fa-check-square"></i> 出国语言考试</p><br>
                                    <p><i class="far fa-check-square"></i> 北美中学课程</p><br>
                                    <p><i class="far fa-check-square"></i> 其他</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h5><span>6</span><span>级</span> 招生官审案把关</h5>
                                <!-- <div class="img-div"><img src="{{asset('images/home/sample-icon.png')}}" width="100%"></div> -->
                                <h4>确保100%申请成功率</h4>
                                <div class="card-detail">
                                    <p><i class="far fa-check-square"></i> 丰富的招生官资源</p><br>
                                    <p><i class="far fa-check-square"></i> 熟知高校录取规律</p><br>
                                    <p><i class="far fa-check-square"></i> 最新招生咨询</p><br>
                                    <p><i class="far fa-check-square"></i> 专业升学辅导</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-switch text-center">
                <div class="swiper-prev"><i class="fas fa-caret-square-left"></i></div>
                <div class="swiper-next"><i class="fas fa-caret-square-right"></i></div>
            </div>
        </div>
    </div>
    <div class="process-container text-center">
        <div class="process-title mb-3">
            <h3>服务流程 <span>Our Process</span></h3>
        </div>
        <div class="process-graph">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('images/home/5.png')}}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="promise-container">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <img src="{{asset('images/home/6.png')}}" width="100%">
                </div>
            </div>
        </div>
    </div>

    <div class="partnership-container container">
        <h4 class="text-center">合作伙伴</h4>
        <div class="swiper-container s3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row no-gutters">
                        <div class="col-3 col-md-2">
                            <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" width="100%"></a>
                        </div>
                        <div class="col-3 col-md-2">
                            <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" width="100%"></a>
                        </div>
                        <div class="col-3 col-md-2">
                            <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" width="100%"></a>
                        </div>
                        <div class="col-3 col-md-2">
                            <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" width="100%"></a>
                        </div>
                        <div class="col-3 col-md-2 d-md-block d-none">
                            <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" width="100%"></a>
                        </div>
                        <div class="col-3 col-md-2 d-md-block d-none">
                            <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" width="100%"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('js')
<script>
    var swiper1 = new Swiper('.s1', {
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    var swiper2 = new Swiper('.s2', {
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
    });
    var swiper3 = new Swiper('.s3', {
        autoplay: {
            delay: 8000,
            disableOnInteraction: true,
        },
    });
    $(window).on('load',function () {
        let smallestImageSize = 10000;
        for(let i=0;i<$('.s1 .swiper-slide img').length; i++){
            let height = $('.s1 .swiper-slide img')[i].height;
            height<smallestImageSize ? smallestImageSize = height : smallestImageSize;
        }
        $('.s1').css('height', smallestImageSize);
        console.log(smallestImageSize);
    })

    $(window).on('resize', function () {
        let smallestImageSize = 10000;
        for(let i=0;i<$('.s1 .swiper-slide img').length; i++){
            let height = $('.s1 .swiper-slide img')[i].height;
            height<smallestImageSize ? smallestImageSize = height : smallestImageSize;
        }
        $('.s1').css('height', smallestImageSize);
    })
</script>
@stop

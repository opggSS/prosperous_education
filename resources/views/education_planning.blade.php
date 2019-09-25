@extends('layout.layout')
@section('title','Education Planning')
@section('css')

<link rel="stylesheet" href="{{asset('css/application.css')}}" type="text/css" >

@stop

@section('content')
<div id="banner-main-block" class="section position-relative" >
    {{-- <img id="banner-bg" class="w-100 position-relative" src="../images/about_us/bg-gallery.png" alt="image"> --}}
    <div class="container">
        <img width="100%" src="../images/planning/banner-1-planning.png" alt="banner" center>
        {{-- <div class="center-center">
            <img src="../images/logo.png" alt="" width="100">
            <div class="divider"></div>
            <h2>学龄前留学到硕博申请</h2>
            <div class="divider"></div>
        </div> --}}
    </div>
    <div class="info-slide-block">
    </div>
    @include('layout._congratulation')
</div>


@php
$planning_modules = [
        [
            'title' => '海外监护',
            'para' => '随着留学低龄化成为海外留学的一大趋势，低龄留学生在海外生活和监护成为了许多家长担忧的两个基本方面。作为专业从事国际教育交流的公司，宏图教育充分发挥本地优势，承担起父母在海外的监护责任，构筑连接家长、学生、寄宿家庭及海外院校之间的沟通桥梁，为学生在海外留学生活提供一体式的监护服务。该服务包括学业管理、生活监管、法律监护，全程跟踪孩子海外学业与生活情况，确保学生在加拿大拥有安全、健康、快乐的留学生活品质，为您的孩子在温哥华的留学人生写下光辉的第一篇章。',
            'model' => 'myModal1',
            'image' => '../images/planning/banner-2-planning.png'
        ],

        [
            'title' => '学业规划',
            'para' => '宏图教育学业生涯全程规划服务项目是根据每个学生在加拿大求学阶段的需要进行设立，旨在通过我们专业的规划、指导和培训，帮助赴加读中学的中国留学生在学业上和生活上充分利用加拿大学校资源以及社会资源，有效地提升个人核心竞争力，最终顺利完成学业，并考取理想的大学。',
            'model' => 'myModal2',
            'image' => '../images/planning/banner-3-planning.png'
        ]
    ];

$modules = [
    [
        'title' => '海外监护',
        'image' =>'../images/planning/icon-planning-22.png',
        'classname' => 'c1'
    ],
    [
        'title' => '学业规划',
        'image' =>'../images/planning/icon-planning-23.png',
        'classname' => 'c2'
    ],
    [
        'title' => '学科辅导',
        'image' =>'../images/planning/icon-planning-24.png',
        'classname' => 'c3'
    ],
    [
        'title' => '语言培训',
        'image' =>'../images/planning/icon-planning-25.png',
        'classname' => 'c4'
    ],
    [
        'title' => '背景提升',
        'image' =>'../images/planning/icon-planning-26.png',
        'classname' => 'c5'
    ],
    [
        'title' => '留学管家',
        'image' =>'../images/planning/icon-planning-27.png',
        'classname' => 'c6'
    ],
    [
        'title' => '贵族私校',
        'image' =>'../images/planning/icon-planning-28.png',
        'classname' => 'c7'
    ],
    [
        'title' => '菁英计划',
        'image' =>'../images/planning/icon-planning-29.png',
        'classname' => 'c8'
    ],
]
@endphp



<div class="container text-center study">
    <div class="title-block text-center mb-4">
        <h3>规划模块 <span>MODULE PLANNING</span></h3>
    </div>
    <p>宏图教育学业生涯全程规划服务项目是根据每个学生在加拿大求学阶段的需要进行设立，旨在通过我们专业的规划、指导和培训，帮助赴加读中学的中国留学生在学业上和生活上充分利用加拿大学校资源以及社会资源，有效地提升个人核心竞争力，最终顺利完成学业，并考取理想的大学。</p>

    <div class="row">
        @foreach($modules as $module)
        <div class="col col-special8 col-3 text-center {{$module['classname']}}">
            <img src="{{$module['image']}}"  width="70%" >
            <p>{{$module['title']}}</p>
        </div>
        @endforeach
    </div>

</div>

<div class="application-block text-center mb-5">
    <div class="container">
        <div class="swiper-container s1">
            <div class="swiper-wrapper">
                @foreach($planning_modules as $module )
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col col-special4">
                            <p class="title"><span class="icon-maple" style="padding-left: 27px;"></span>{{$module['title']}}<span class="icon-maple" style="margin-left: 10px; padding-left: 27px"></span></p>
                            <p>{{$module['para']}}</p>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{$module['model']}}">Learn More</button>
                        </div>
                        <div class="col col-special6">
                            <img src="{{$module['image']}}" class="w-100">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        <div class="modal fade text-left" id="myModal1" role="dialog">
            <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h6>宏图教育学业规划的特色</h6>
                    </div>
                    <p>全方位跟踪学业、一站式规划服务，全面的学术指导、个性化的社区实践活动计划、制定战略性的升学申请方案。</p>
                    <div class="text-center">
                        <h6>宏图教育学业规划的宗旨</h6>
                    </div>
                    <p><span class="icon-maple"></span>用我们的专业为每位学生规划成功的海外求学道路。</p>
                    <p><span class="icon-maple"></span>用我们的真心去承担起教书育人责任。</p>
                    <p><span class="icon-maple"></span>用我们的爱去点燃学生心中的智慧阳光。</p>
                    <div class="text-center">
                        <h6>学习规划的适合对象</h6>
                    </div>

                    <p> 8 年级至 12 年级的学生。</p>
                    <div class="text-center">
                        <h6>学习规划的服务内容</h6>
                    </div>
                    <span class="sub-title">
                        <span class="icon-maple"></span>初期服务阶段
                    </span>
                    <ol>
                        <li>前期咨询，初步掌握学生学习情况及背景信息。</li>
                        <li>学生自我认知测评（Self-Awareness Assessment）</li>
                        <li>目标设置评估 (Goal Setting Assessment)</li>
                    </ol>
                    <span class="sub-title">
                        <span class="icon-maple"></span>中期服务阶段
                    </span>
                    <ol>
                        <li>制定规划方案：根据学生学术背景进行评估与定位，量身策划升学规划方案。</li>
                        <li>提供学业指导及课程辅导</li>
                        <li>选课计划方案</li>
                        <li>考试规划指导</li>
                        <li>课外活动背景提升规划</li>
                        <li>兴趣爱好发展计划</li>
                        <li>假期安排提升</li>
                        <li>社区实践活动规划</li>
                        <li>阶段性目标调整</li>
                        <li>青年核心素质培训课程
                            <ul>
                                <li>企业家创新精神</li>
                                <li>团队协作</li>
                                <li>青年领袖力</li>
                                <li>公众演讲技巧</li>
                                <li>世界公民意识大学申请阶段</li>
                            </ul>
                        </li>
                    </ol>

                    <span class="sub-title">
                        <span class="icon-maple"></span>大学申请阶段
                    </span>
                    <ol>
                        <li>全程大学申请规划服务</li>
                        <li>未来职业规划</li>
                    </ol>
                    <p>具体服务内容包括</p>
                    <p>学术评估，考试计划，选课计划方案，学业和课业辅导，活动背景提升，兴趣爱好发展计划，假期安排提升，升学规划，名校申请。</p>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
@include('layout._case_studies')

<div class="sixth text-center">
    <div class="container">
        <div class="tit public w-100 d-block mt-5 mb-3 center">
            <span class="tit-y d-inline-block pl-4">

            <span class="tit-g d-inline-block py-2 px-4"></span>
          </span>
        </div>
        <div class="title-block text-center mb-4">
            <h3>在线预约 <span>RESERVATION</span></h3>
        </div>

    </div>
</div>
@include('layout._contact_form')
@stop


@section('js')
<script>
    var swiper1 = new Swiper('.s1', {
        autoplay: {
            delay: 4000,
            disableOnInteraction: true,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
    });

    @foreach($modules as $key => $module )
    document.querySelector('.{{$module['classname']}}').addEventListener('click', function (e) {
      e.preventDefault();
      swiper1.slideTo({{$key}}, 0);
    });
    @endforeach

</script>
@stop

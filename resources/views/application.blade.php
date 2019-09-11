@extends('layout.layout')
@section('title','Application')
@section('css')

<link rel="stylesheet" href="{{asset('css/application.css')}}" type="text/css" >

@stop

@section('content')
<div id="banner-main-block" class="section position-relative" >
    {{-- <img id="banner-bg" class="w-100 position-relative" src="../images/about_us/bg-gallery.png" alt="image"> --}}
    <div class="container">
        <img width="100%" src="../images/application/bg-main-apply.png" alt="banner" center>
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

<div class="container text-center study">
    <div class="tit public w-100 d-block mt-5 mb-3 center">
      <span class="tit-y d-inline-block pl-4">
        公司介绍
        <span class="tit-g d-inline-block py-2 px-4">COMPANY PROFILE</span>
      </span>
    </div>
    <p>宏图教育 15 年来专注加拿大教育留学申请，开发出独具特色的加拿大名校申请“六极管理体系”，涵盖了从学龄前到硕博留学申请全阶段服务，对不同阶段的学生匹配与之最适合的团队和服务项目，确保每个学生都得到 “6:1” 以上团队的呵护。</p>
    
    <div class="row">
        <div class="col col-special text-center">
            <img src="../images/application/ico-figure.png"  width="70%" >
            <p>低龄留学申请</p>
        </div>
        <div class="col col-special text-center">
            <img src="../images/application/ico-figure.png" width="70%" >
            <p>高中留学申请辅导</p>
        </div>
        <div class="col col-special text-center">
            <img src="../images/application/ico-figure.png" width="70%">
            <p>本科留学申请</p>
        </div>
        <div class="col col-special text-center">
            <img src="../images/application/ico-figure.png" width="70%">
            <p>硕博留学申请</p>
        </div>
        <div class="col col-special text-center">
            <img src="../images/application/ico-figure.png" width="70%">
            <p>宏图菁英计划</p>
        </div>

    </div>

</div>
<div class="third  text-center">
    <div class="container">
        <div class="row">
            <div class="col col-special4">
                <p class="title">低龄留学申请</p>
                <h6 class="sub-title">
                    5-13岁学前及中小学生
                </h6>
                <p>宏图教育致力于帮助低龄学子实现加拿大留学前规划、入学申请及后续生活和学业监管服务。尤其全面关注低龄学生学习、心理和能力成长教育。我们的国际化视野和资源，能够为低龄留学家庭提供充分的支持。</p>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Learn More</button>
            </div>
            <div class="col col-special6">
                <img src="../images/application/bg-1-apply.png" class="w-100">
            </div>

        </div>
        <div class="modal fade text-left" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
{{--                   <h4 class="modal-title">Modal Header</h4>
 --}}                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h6>低龄留学生为何偏爱加拿大</h6>
                    </div>
                    
                    <span class="sub-title">
                        先进教育机制适合孩子成长
                    </span>
                    <p>
                        在加拿大读小学，没有竞争压力，选修课丰富，注意培养学生的兴趣及综合素质，课外活动多样
                    </p>
                    <span class="sub-title">
                        安全的学习生活环境
                    </span>
                    <p>
                        对低龄留学生来说，家长们最关心的就是环境安全。加拿大社会治安非常好，暴力犯罪很少，而且加拿大的警方尤其重视保护青少年的人身安全。
                    </p>
                    <p>加拿大的食品安全世界第一，把控严格，对青少年在成长过程中的营养摄取尤其需要重视。</p>
                    <p>在这里分数不代表一切，个人能力培养才是重点.</p>
                    <span class="sub-title">给孩子一个纯正多元的语言环境</span>
                    <p>越早留学可以为孩子提供一个良好的语言环境，对孩子学习越有利。</p>
                    <p>另外加拿大是英法双语国家，不光英语天天耳濡目染，有语言天赋的小朋友也有良好机会学习纯正法语。</p>
                    <span class="sub-title">
                        家长陪读／移民政策宽松
                    </span>
                    <p>子女赴加留学，家长陪读极其容易获得长 10 年往返”超级签证“。</p>
                    <p>加拿大也是一个移民国家，相对其他欧美国家，移民政策宽松，条件优越。</p>

                    <div class="text-center">
                        <h6>加拿大小学留学方案</h6>
                    </div>
                    <span class="sub-title d-inline-block" >适合人群：</span>
                    <p class="d-inline-block">加拿大各公立幼儿园／小学欢迎 5 周岁或以上的中国学生入读。</p> <br>
                    <span class="sub-title d-inline-block" >留学费用：</span>
                    <p class="d-inline-block">约 30 万人民币／年（包含学生学费及父母陪读生活费）。</p><br>
                    <span class="sub-title d-inline-block" >家长陪读：</span>
                    <p class="d-inline-block">加拿大鼓励中国家长办理十年多次往返陪读签证，与孩子一起生活。家长陪读期间可以在加拿大学习英文或考取学位，家长持学习许可签证期间，子女就读公立学校可免除学费。</p><br>

                    <div class="text-center">
                        <h6>加拿大小学申请流程</h6>
                    </div>
                    <ol>
                        <li>根据自身情况寻找台适教育局，并了解申清要求。</li>
                        <li>开具目标教育局附近的居住证明，并准备其他申请材料。</li>
                        <li>VPEA为学生在对应学区保留学位，获得教育局的录取通知书。</li>
                        <li>家庭准备签证材料，向加拿大签证中心递交签证申请。</li>
                        <li>学生与家长共同学习加拿大生活英语，协助家长完成移居加拿大后续安排。</li>
                    </ol>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
              
            </div>
        </div>
    </div>
</div>   


<div class="fifth text-center">
    <div class="container">
        <div class="row">
            <div class="col-special-center">
                <img src="../images/application/ico-figure.png">
                <p>该生于 2016 年 9 月入读加拿BC省9 年级，成绩一直不太理想。在万分沮丧的时候，家长来远播寻求帮助，我们的老师为她推荐了 20 17 暑假回国读日匕 C 课程，学生在暑期报读了数学 10 学分课，历时 50 课时，最终周同学以 95 ％的优异成绩通过学分课程， 1个月的时间，学生竟然实现了质的飞跃！家长连连称赞，在远播学习是正确的选择！</p>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-1 offset-lg-1 padding-col"></div>
            @for ($i = 0 ; $i<8; $i++)
            <div class="col col-3 col-md-3 col-lg-1">
                <img src="../images/application/ico-figure.png" class="w-100">
            </div>
            @endfor
        </div>

        <div class="row">
            <div class="col col-lg-1 offset-lg-1 padding-col"></div>
            @for ($i = 0 ; $i<8; $i++)
            <div class="col col-3 col-md-3 col-lg-1">
                <img src="../images/application/ico-figure.png" class="w-100">
            </div>
            @endfor
        </div>
    </div>
</div>
<div class="sixth text-center">
    <div class="container">
        <div class="tit public w-100 d-block mt-5 mb-3 center">
            <span class="tit-y d-inline-block pl-4">
                在线预约
            <span class="tit-g d-inline-block py-2 px-4">Online Reservation</span>
          </span>
        </div>
        
    </div>
</div>
@include('layout._contact_form')
@stop
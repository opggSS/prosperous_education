@extends('layout.layout')
@section('title','Overseas Service')

@section('content')
<div id="overseas-service">
    <div id="banner-main-block" class="section position-relative">
      <img id="banner-bg" class="w-100 position-relative" src="../images/about_us/bg-gallery.png" alt="image">
      <img id="banner-main" class="position-absolute" src="../images/oversea/banner-main-abroad.png" alt="banner">

      <div class="info-slide-block">

      </div>
    </div>
    @include('layout._congratulation')

    <div id="intro-block" class="section">
      <div class="text-center mb-2 tit-block">
          <h3>公司介绍 <span>COMPANY PROFILE</span></h3>
      </div>
      <div class="content-block w-100">
        <div class="container py-5">
          <p>宏图教育一站式“留学管家”境外服务，比你想象的还要周到。</p>
          <p>宏图教育专门为即将留学加拿大的学生量身定制了一站式境外服务体系，包含了行前指导、
            落地协助、签证协办、学业监督指导、监护服务、职业培训、家长服务等学生境外可能需要的全面服务。
            学生从国内到国外，从家门到校门，从生活到学习的方方面面都有宏图教育的保驾护航！</p>
          <p>宏图教育境外服务的旨在帮助初入留学生的留学生适应陌生环境、熟悉新生活、快速进入新的学习生活状态。
            同时，为学生提供监护服务和应急情况处理，确保学生与家长信息畅通，为学生减轻负担，为家长免除忧虑。</p>
        </div>
      </div>
      <div class="container pb-5">
        <div class="row">
          <div class="col col-4 col-sm-2 text-center">
            <div class="ico-container p-1 p-md-4">
              <img class="w-100" src="../images/oversea/ico-1-abroad.png" alt="">
            </div>
            <p>行前指导</p>
          </div>
          <div class="col col-4 col-sm-2 text-center">
            <div class="ico-container p-1 p-md-4">
              <img class="w-100" src="../images/oversea/ico-1-abroad.png" alt="">
            </div>
            <p>行前指导</p>
          </div>
          <div class="col col-4 col-sm-2 text-center">
            <div class="ico-container p-1 p-md-4">
              <img class="w-100" src="../images/oversea/ico-1-abroad.png" alt="">
            </div>
            <p>行前指导</p>
          </div>
          <div class="col col-4 col-sm-2 text-center">
            <div class="ico-container p-1 p-md-4">
              <img class="w-100" src="../images/oversea/ico-1-abroad.png" alt="">
            </div>
            <p>行前指导</p>
          </div>
          <div class="col col-4 col-sm-2 text-center">
            <div class="ico-container p-1 p-md-4">
              <img class="w-100" src="../images/oversea/ico-1-abroad.png" alt="">
            </div>
            <p>行前指导</p>
          </div>
          <div class="col col-4 col-sm-2 text-center">
            <div class="ico-container p-1 p-md-4">
              <img class="w-100" src="../images/oversea/ico-1-abroad.png" alt="">
            </div>
            <p>行前指导</p>
          </div>
        </div>
      </div>
    </div>

    <div class="third  text-center">
        <div class="container">
            <div class="row">
                <div class="col col-special4">
                    <p class="title">家长服务</p>
                    <div class="text-left pl-5">
                      <p>家长服务</p>
                      <p>学校/教育局/寄宿家庭拜访预约</p>
                      <p>为家长提供到加拿大看望学生的邀请信</p>
                      <p>提供家长接机</p>
                      <p>为家长提供住宿及行程安排</p>
                      <p>加拿大投资、理财、移民咨询</p>
                    </div>

                    <button type="button" class="btn btn-info btn-lg mt-5" data-toggle="modal" data-target="#myModal">Learn More</button>
                </div>
                <div class="col col-special6">
                    <img src="../images/oversea/banner-1-abroad.png" class="w-100">
                </div>

            </div>
            <div class="modal fade text-left" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
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

    <div id="banner-11-block" class="section py-5">
      <div class="text-center mb-2 tit-block">
         <h3>宏图优势 <span>OUR ADVANTAGES</span></h3>
      </div>
      <div class="container text-center">
        <img class="w-100 mt-5" id="banner-11" src="../images/about_us/banner-11-about.png" alt="">
      </div>
    </div>

    <div id="slider-block" class="section py-5">
      <div class="text-center mb-4 tit-block">
          <h3>专家团队 <span>OUR TEAM</span></h3>
      </div>

      <div class="s3 swiper-container mt-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container">
              <div class="row">
                <div class="col col-3 text-center">
                      <img class="w-100" src="../images/about_us/persona-1-about.png" alt="">
                      <p class="mt-3 mb-0">宏图教育总监</p>
                      <p class="mt-1">Tommy Yao</p>
                </div>

                <div class="col col-3 text-center">
                      <img class="w-100" src="../images/about_us/persona-2-about.png" alt="">
                      <p class="mt-3 mb-0">宏图教育主管</p>
                      <p class="mt-1">Jessica Yen</p>
                </div>

                <div class="col col-3 text-center">
                      <img class="w-100" src="../images/about_us/persona-3-about.png" alt="">
                      <p class="mt-3 mb-0">宏图高级顾问</p>
                      <p class="mt-1">Angel Yeh</p>
                </div>

                <div class="col col-3 text-center">
                      <img class="w-100" src="../images/about_us/persona-4-about.png" alt="">
                      <p class="mt-3 mb-0">宏图高级顾问</p>
                      <p class="mt-1">Vivian Hou</p>
                </div>
              </div>
            </div>
          </div>


          <div class="swiper-slide">
            <div class="container">
              <div class="row">
                <div class="col col-3 text-center">
                      <img class="w-100" src="../images/about_us/persona-1-about.png" alt="">
                      <p class="mt-3 mb-0">宏图教育总监</p>
                      <p class="mt-1">Tommy Yao</p>
                </div>

                <div class="col col-3 text-center">
                      <img class="w-100" src="../images/about_us/persona-2-about.png" alt="">
                      <p class="mt-3 mb-0">宏图教育主管</p>
                      <p class="mt-1">Jessica Yen</p>
                </div>

                <div class="col col-3 text-center">
                      <img class="w-100" src="../images/about_us/persona-3-about.png" alt="">
                      <p class="mt-3 mb-0">宏图高级顾问</p>
                      <p class="mt-1">Angel Yeh</p>
                </div>

                <div class="col col-3 text-center">
                      <img class="w-100" src="../images/about_us/persona-4-about.png" alt="">
                      <p class="mt-3 mb-0">宏图高级顾问</p>
                      <p class="mt-1">Vivian Hou</p>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
</div>
@stop
@section('js')
<script src="../js/swiper.min.js"></script>
<script type="text/javascript">
  $(function(){
    // var height = $(window).height();
    // console.log(height);
    // $('#banner-2-block').height(height);

    var swiper2 = new Swiper('.s3', {
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
            slidesPerView: 1,
            delay: 1000
        },
    });
  });
</script>
@stop

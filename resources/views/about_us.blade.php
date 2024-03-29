@extends('layout.layout')
@section('title','About Us')
@section('css')
<link rel="stylesheet" href="../css/about_us.css">
<link rel="stylesheet" href="../css/swiper.min.css">
<style>
  .congratulation-container {
    margin-bottom: 0;
  }
</style>
@stop

@section('content')
<div id="banner-main-block" class="section position-relative">
  <img id="banner-bg" class="w-100 position-relative" src="../images/about_us/bg-gallery.png" alt="image">
  <img id="banner-main" class="position-absolute" src="../images/about_us/banner-main.png" alt="banner">

  <div class="info-slide-block">

  </div>
</div>
@include('layout._congratulation')

<div id="intro-block" class="section">
  <div class="tit-block container text-center pt-5 position-relative">
    <span class="tit-main d-block">成就梦想 大展宏图</span>
    <span class="tit-sub d-block">/ REALIZE YOUR AMIBITION /</span>
    <h6 class="tit-third d-block mt-3 position-relative">PROSPEROUS</h6>
    <span class="underline d-inline-block w-100 position-absolute"></span>
    <div class="tit public w-100 d-block mt-5 mb-3">
      <span class="tit-y d-inline-block pl-4">
        公司介绍
        <span class="tit-g d-inline-block py-2 px-4">COMPANY PROFILE</span>
      </span>
    </div>
  </div>
  <div class="content-block w-100">
    <div class="container py-5">
      <p>2004年，宏图教育由初创团队在加拿大温哥华发起，后成长为加拿大国际教育领域的专业团队。宏图教育团队专注于加拿大菁英留学教育申请15年，开发出独具特色的加拿大名校申请、规划及培训项目，涵盖了从学龄前到硕博申请全阶段服务。如今形成了以加拿大100余所教育局、名校为优势资源，中外籍员工人数近百人的规模。</p>
      <p>宏图教育历经15年锻造了一套菁英留学“六极管理体系”，确保服务流程的专业化和质量管理的科学化，确保宏图教育每一位学生都将得到“6:1”以上服务团队，包括留学咨询、留学测评、方案制定、背景提升、个性化课程培训以及招生官审核修正等服务模块。宏图教育服务流程的专业化让每个人做最擅长的工作，严格的每日沟通和跟进控制体系保证了团队合作效率，“六极管理体系”大大提高了名校录取率。</p>
      <p>宏图教育拥有完备的教育留学服务体系，包括了留学申请、升学规划、语言培训、实习科研、课外活动、贵族私校、菁英计划等丰富的产品线，可满足学员的不同需求。宏图教育“菁英计划”以加拿大名校申请为基本出发点，在更全面维度上关注孩子的素质提升和健康成长。</p>
      <p>多年的国际名校申请经验让我们坚信，每个学生都有与众不同的亮点，必须坚持因材施教的个性化教育方针。宏图教育以襄助学子“成就菁英梦想，大展职业宏图”为使命，教书育人、发现每个学生的闪光点，挖掘出每个学生的潜力，全力帮助每一位学子进入理想的名校，开启菁英教育之门。</p>
    </div>
  </div>
</div>

<div id="banner-2-block" class="section py-5 position-relative">
  <div class="container">
    <img class="w-100" id="banner-2" src="../images/about_us/banner-2-about.png" alt="">
  </div>
</div>

<div id="banner-3-block" class="section text-center pt-5">
  <div class="container">
    <div class="tit public w-100 d-block mt-5 mb-3">
      <span class="tit-y d-inline-block pl-4">
        企业文化
        <span class="tit-g d-inline-block py-2 px-4">ENTERPRISE CULTURE</span>
      </span>
    </div>
    <img class="w-100" id="banner-3" src="../images/about_us/banner-3-about.png" alt="">
  </div>
</div>

<div id="banner-4-block" class="section">
  <div class="w-100 text-center position-relative w-75">
    <img class="w-100 position-relative" id="banner-2" src="../images/about_us/banner-4-about.jpg" alt="">
    <div class="content position-absolute w-100 text-center">
      <p>“</p>
      <p>做有温度的教育者</p>
      <p>让优秀成为习惯</p>
      <p>”</p>
    </div>
  </div>

  <div id="about-step" class="container w-100 p-0" style="max-width:100%;">

    <div class="row w-100 mx-0">

      <div class="col col-12 col-md-6 col-lg-3 position-relative m-0" style="height:300px;overflow:hidden;">
        <img class="h-100 position-absolute" src="images/about_us/step-1.jpg" alt="">
        <div class="w-100 content px-5 position-relative text-center">
          <h5>.01</h5>
          <h5>MISSON 使命</h5>
          <span>Your Gateway To Elite Education</span>
          <p>通向菁英教育之门</p>
        </div>
      </div>

      <div class="col col-12 col-md-6 col-lg-3 position-relative m-0" style="height:300px;overflow:hidden;">
        <img class="h-100 position-absolute" src="images/about_us/step-2.jpg" alt="">
        <div class="w-100 content px-5 position-relative text-center">
          <h5>.02</h5>
          <h5>VISION 愿景</h5>
          <span>Become a Leading Brand in the North American Education Industry</span>
          <p>成为加拿大教育留学行业领跑者</p>
        </div>
      </div>

      <div class="col col-12 col-md-6 col-lg-3 position-relative m-0" style="height:300px;overflow:hidden;">
        <img class="h-100 position-absolute" src="images/about_us/step-3.jpg" alt="">
        <div class="w-100 content px-5 position-relative text-center">
          <h5>.03</h5>
          <h5>SLOGAN 口号</h5>
          <span>Realize Your Ambition</span>
          <p>成就梦想，大展宏图</p>
        </div>
      </div>

      <div class="col col-12 col-md-6 col-lg-3 position-relative m-0" style="height:300px;overflow:hidden;">
        <img class="h-100 position-absolute" src="images/about_us/step-4.jpg" alt="">
        <div class="w-100 content px-5 position-relative text-center">
          <h5>.04</h5>
          <h5>PRINCIPLE 理念</h5>
          <span>Service Based Price Transparency</span>
          <p>客户为本，价格透明</p>
        </div>
      </div>

    </div>


    <!-- <div class="row mt-5">
      <div class="col col-5 p-0">
        <div class="img-container">
          <img class="w-100 h-100" src="../images/about_us/banner-5-about.png" alt="">
        </div>
      </div>
      <div class="content-block col col-7 p-5">
        <div class="img-container h-100">
          <p><span class="d-inline-block p-2 rounded-circle mr-3">01.</span>MISSON 使命</p>
          <p>Your Gateway To Elite Education</p>
          <p>通向菁英教育之门</p>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="content-block col col-7 p-5">
        <div class="img-container">
          <p><span class="d-inline-block p-2 rounded-circle mr-3">02.</span>VISION 愿景</p>
          <p>Become a Leading Brand in the North American Education Industry</p>
          <p>成为加拿大教育留学行业领跑者</p>
        </div>
      </div>
      <div class="col col-5 p-0">
        <div class="img-container h-100">
          <img class="w-100 h-100" src="../images/about_us/banner-6-about.png" alt="">
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col col-5 p-0">
        <div class="img-container h-100">
          <img class="w-100 h-100" src="../images/about_us/banner-7-about.png" alt="">
        </div>
      </div>
      <div class="content-block col col-7 p-5">
        <div class="img-container">
          <p><span class="d-inline-block p-2 rounded-circle mr-3">03.</span>SLOGAN 口号</p>
          <p>Realize Your Ambition</p>
          <p>成就梦想，大展宏图</p>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="content-block col col-7 p-5">
        <div class="img-container h-100">
          <p><span class="d-inline-block p-2 rounded-circle mr-3">04.</span>PRINCIPLE 理念</p>
          <p>Service Based Price Transparency</p>
          <p>客户为本，价格透明</p>
        </div>
      </div>
      <div class="col col-5 p-0">
        <div class="img-container">
          <img class="w-100 h-100" src="../images/about_us/banner-8-about.png" alt="">
        </div>
      </div>
    </div> -->



  </div>
</div>

<div id="banner-11-block" class="section py-5">
  <div class="container text-center">
    <div class="tit public w-100 d-block mt-5 mb-3">
      <span class="tit-y d-inline-block pl-4">
        宏图优势
        <span class="tit-g d-inline-block py-2 px-4">OUR ADVANTAGE</span>
      </span>
    </div>
    <img class="w-100 mt-5" id="banner-11" src="../images/about_us/banner-11-about.png" alt="">
  </div>
</div>

<div id="hezuo-block" class="section py-5">
  <div class="container text-center">
    <div class="tit public w-100 d-block mt-5 mb-3">
      <span class="tit-y d-inline-block pl-4">
        战略合作
        <span class="tit-g d-inline-block py-2 px-4">STRATEGIC COOPERATION</span>
      </span>
    </div>
  </div>
</div>

<div id="slider-block" class="section py-5">
  <div class="container text-center">
    <div class="tit public w-100 d-block mt-5 mb-3">
      <span class="tit-y d-inline-block pl-4">
        专家团队
        <span class="tit-g d-inline-block py-2 px-4">OUR TEAM</span>
      </span>
    </div>
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


<!-- <div id="map-block" class="section py-5">
  <div class="container text-center">
    <div class="tit public w-100 d-block">
      <span class="tit-y d-inline-block pl-4">
        战略合作
        <span class="tit-g d-inline-block py-2 px-4">STRATEGIC COOPERATION</span>
      </span>
    </div>
  </div>
</div> -->
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

@extends('layout.layout')
@section('title','Visa Services')
@section('css')
<link rel="stylesheet" href="../css/visa.css">
<link rel="stylesheet" href="../css/swiper.min.css">
@stop

@section('content')
<div id="banner-main-block" class="section position-relative">
  <img id="banner-bg" class="w-100 position-relative" src="../images/visa/bg-gallery.png" alt="image">
  <img id="banner-main" class="position-absolute" src="../images/visa/banner-main-visa.png" alt="banner">

  <div class="info-slide-block">

  </div>
</div>
@include('layout._congratulation')

<div id="banner-1-block" class="section py-5">
  <div class="container text-center">
    <div class="tit public w-100 d-block">
      <span class="tit-y d-inline-block pl-4">
        签证服务
        <span class="tit-g d-inline-block py-2 px-4">VISA SERVICES</span>
      </span>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col col-5">
        <img class="w-100" src="../images/visa/banner-1-visa.png" alt="">
      </div>
      <div class="col col-7">
        <ul>
          <li>
            <span>宏图教育签证办理团队经过多年磨练与实践，形成了成熟高效的工作流程，
              人员齐备、分工明确整个团队互相配合，确保学生整套签证材料的逻辑性、完整性和精确性。</span>
          </li>
          <li class="mt-5">
            <strong>学习许可签证：</strong><span>帮助千余名学生办理学习许可签证，通过率为100%。包括最复杂的普通学生签证（适用于K-12年级的学生）以及资金简化通道的学生签证（适用于学院、大学的SPP计划和SDS计划）。</span>
          </li>
          <li>
            <strong>探亲签证：</strong><span>帮助学生家长办理加拿大探亲签证。</span>
          </li>
          <li>
            <strong>入境签证：</strong><span>帮助办理学生及家长办理入境观光签证等。</span>
          </li>
          <li>
            <strong>毕业签证：</strong><span>帮助办理加拿大留学生毕业工作签证。</span>
          </li>
        </ul>

      </div>
    </div>
  </div>
</div>

<div class="tit-block pb-5">
  <div class="container text-center">
    <div class="tit public w-100 d-block">
      <span class="tit-y d-inline-block pl-4">
        签证申请
        <span class="tit-g d-inline-block py-2 px-4">VISA APPLICATION</span>
      </span>
    </div>
  </div>
</div>

<div id="banner-2-block" class="section py-5">

  <div class="s3 swiper-container mt-5">
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

<div id="banner-3-block" class="section py-5">
  <div class="container text-center">
    <div class="tit public w-100 d-block">
      <span class="tit-y d-inline-block pl-4">
        签证办理流程
        <span class="tit-g d-inline-block py-2 px-4">VISA APPLICATION PROCESS</span>
      </span>
    </div>
  </div>

  <div class="container text-center mt-5">
    <div class="row seven-cols">
      <div class="col col-md-1">
        <div class="img-container mb-3">
          <img class="h-50 mt-4" src="../images/visa/ico-1-visa.png" alt="">
        </div>
        <h3>咨询预约</h3>
        <p>面对面或电话咨询，与宏图签证项目经理沟通确认预约办理业务。</p>
      </div>
      <div class="col col-md-1">
        <div class="img-container mb-3">
          <img class="h-50 mt-4" src="../images/visa/ico-2-visa.png" alt="">
        </div>
        <h3>签证启动</h3>
        <p>宏图签证主管对客户签证申请难易程度进行评估，并安排一对一签证专员与客户直接沟通，
          签证办理正式启动。</p>
      </div>
      <div class="col col-md-1">
        <div class="img-container mb-3">
          <img class="h-50 mt-4" src="../images/visa/ico-3-visa.png" alt="">
        </div>
        <h3>材料准备</h3>
        <p>宏图签证专员与客户沟通准备申请材料，并交由签证主管进行指导审核。</p>
      </div>
      <div class="col col-md-1">
        <div class="img-container mb-3">
          <img class="h-50 mt-4" src="../images/visa/ico-4-visa.png" alt="">
        </div>
        <h3>文案准备</h3>
        <p>签证材料准备完善后，由签证文案专员进行文案创作，以及申请表格填写、申请材料翻译。</p>
      </div>
      <div class="col col-md-1">
        <div class="img-container mb-3">
          <img class="h-50 mt-4" src="../images/visa/ico-5-visa.png" alt="">
        </div>
        <h3>审核递表</h3>
        <p>申请文件与材料备齐后，VPEA签证办理专员前往签证中心，提交签证材料。</p>
      </div>
      <div class="col col-md-1">
        <div class="img-container mb-3">
          <img class="h-50 mt-4" src="../images/visa/ico-6-visa.png" alt="">
        </div>
        <h3>等待审批</h3>
        <p>提交签证申请后，宏图签证办理专员会随时跟进签证办理进度，并及时告知客户。</p>
      </div>
      <div class="col col-md-1">
        <div class="img-container mb-3">
          <img class="h-50 mt-4" src="../images/visa/ico-7-visa.png" alt="">
        </div>
        <h3>获得签证</h3>
        <p>审批通过获签后,VPEA将在第一时间将签证邮递给客户。</p>
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

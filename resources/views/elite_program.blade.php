@extends('layout.layout')
@section('title','Elite Program')

@section('css')
@stop

@section('content')
    <div id="elite-program">
        <div id="banner-main-block" class="section position-relative mb-5">
            <img id="banner-bg" class="w-100 position-relative" src="{{asset('images/about_us/bg-gallery.png')}}" alt="image">
            <img id="banner-main" class="position-absolute" src="{{asset('images/elite/banner.png')}}" alt="banner">
        </div>
        <div class="container mb-5">
            <div class="row mb-4">
                <div class="col-md-4 offset-md-4">
                    <img src="{{asset("images/elite/banner-1-elite.png")}}" alt="" width="100%">
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <p>菁英计划汇集宏图教育顶级师资和优选资源，15年世界名校成功申请经验累积，专业陪伴成长培养模式沉淀，全力打造专注于高端家庭留学申请与教育咨询的品牌化服务。</p>
                    <p>菁英计划旨在为追求世纪菁英教育的学生提供校内学习无法触及的全方位个人提升；既包括学校学术课程的辅导、语言考试规划、又包括良好学习习惯培养、性格塑造、为人处事能力培养等方面。</p>
                    <p>菁英计划重视以名校申请为基本出发点，规划学生留学前和留学中的成长关键建议，同时持续诊断学生跨文化核心竞争力的长短版，为学生增强学术、交流、领导、自我认知、规划策略等关键品质，塑造国际化精英气质。</p>
                </div>
            </div>
        </div>
        <div class="project-mission-container">
            <div class="project-mission-title">
                <h3>菁英计划使命 <span>Project Mission</span></h3>
            </div>
            <div class="container-fluid">
                <h2 class="text-center mt-4">培养未来世界级青年菁英</h2>
                <h4 class="text-center mt-2">未来世界菁英具备的8大特质</h4>
                <div class="row mb-5">
                    <div class="icon-div col-lg-1 offset-lg-2 col-sm-2 offset-sm-2 col-4">
                        <img class="h-50 mt-4" src="{{asset('images/visa/ico-1-visa.png')}}" alt="" width="100%">
                        <h6 class="mt-3">世界名牌大学学历</h6>
                    </div>
                    <div class="icon-div col-lg-1 col-sm-2 col-4">
                        <img class="h-50 mt-4" src="{{asset('images/visa/ico-1-visa.png')}}" alt="" width="100%">
                        <h6 class="mt-3">精通三门或更多语言</h6>
                    </div>
                    <div class="icon-div col-lg-1 col-sm-2 col-4">
                        <img class="h-50 mt-4" src="{{asset('images/visa/ico-1-visa.png')}}" alt="" width="100%">
                        <h6 class="mt-3">通行世界的发达国家护照</h6>
                    </div>
                    <div class="icon-div col-lg-1 col-sm-2 col-4">
                        <img class="h-50 mt-4" src="{{asset('images/visa/ico-1-visa.png')}}" alt="" width="100%">
                        <h6 class="mt-3">卓越的领导力</h6>
                    </div>
                    <div class="icon-div col-lg-1 offset-lg-0 col-sm-2 offset-sm-2 col-4">
                        <img class="h-50 mt-4" src="{{asset('images/visa/ico-1-visa.png')}}" alt="" width="100%">
                        <h6 class="mt-3">全球化战略眼光</h6>
                    </div>
                    <div class="icon-div col-lg-1 col-sm-2 col-4">
                        <img class="h-50 mt-4" src="{{asset('images/visa/ico-1-visa.png')}}" alt="" width="100%">
                        <h6 class="mt-3">批判思维和创新能力</h6>
                    </div>
                    <div class="icon-div col-lg-1 col-sm-2 offset-sm-0 col-4 offset-2">
                        <img class="h-50 mt-4" src="{{asset('images/visa/ico-1-visa.png')}}" alt="" width="100%">
                        <h6 class="mt-3">上流社会和菁英圈资源</h6>
                    </div>
                    <div class="icon-div col-lg-1 col-sm-2 col-4">
                        <img class="h-50 mt-4" src="{{asset('images/visa/ico-1-visa.png')}}" alt="" width="100%">
                        <h6 class="mt-3">政商学等领域核心竞争力</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <img src="{{asset('images/elite/banner-3-elite.png')}}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="training-container text-center">
            <div class="training-title mb-5">
                <h3>培养方案 <span>Training Scheme</span></h3>
            </div>
            <div class="info-boxes text-center mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="inner-bg">
                                <h4>知行合一</h4>
                                <h6>Pioneer Plan</h6>
                                <p>锻造优才品质<br>一路陪伴成长</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="inner-bg">
                                <h4>领袖气质</h4>
                                <h6>Chief Plan</h6>
                                <p>养成领袖气质<br>成就卓越伟业</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="inner-bg">
                                <h4>菁英性格</h4>
                                <h6>Elite Plan</h6>
                                <p>学习能力、思辨能力<br>交流能力、领导能力</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-graph">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{asset('images/elite/banner-7-elite.png')}}" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="target-container text-center mb-5">
            <h1 class="mb-3">下个世界菁英就是<span>你</span>！</h1>
            <h5>你有梦想，想去加拿大TOP 10名校追梦！</h5>
            <h5>你在学校表现精彩，完美展现自身优势！</h5>
            <h5>你表现不够全面，但某些方面足够突出！</h5>
            <h5>你不惧挫折，具有较强但执行力！</h5>
        </div>
        <div class="elite-case-container text-center">
            <div class="case-title mb-5">
                <h3>菁英案例 <span>Elite Cases</span></h3>
            </div>
            <div class="case-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 offset-md-1"><img src="{{asset('images/elite/banner-9-elite.png')}}" width="100%" alt=""></div>
                        <div class="col-md-7">
                            <h1>Lorem ipsum dolor sit amet</h1>
                            <p>Nunc malesuada libero ipsum, a semper urna molestie quis. Pellentesque convallis arcu quis vehicula
                                placerat. Donec tellus leo, bibendum eget tellus facilisis, semper vulputate leo. Aliquam dolor magna,
                                lacinia mollis lorem nec, luctus commodo erat. Fusce feugiat at diam sed gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout._contact_form')
@stop


@section('js')
@stop

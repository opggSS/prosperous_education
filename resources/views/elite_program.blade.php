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
    </div>
    @include('layout._contact_form')
@stop


@section('js')
@stop

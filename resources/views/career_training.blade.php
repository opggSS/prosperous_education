@extends('layout.layout')
@section('title','Career Training')

@section('css')
@stop

@section('content')
<div id="career-training">
    <div id="banner-main-block" class="section position-relative">
        <img id="banner-bg" class="w-100 position-relative" src="{{asset('images/about_us/bg-gallery.png')}}" alt="image">
        <img id="banner-main" class="position-absolute" src="{{asset('images/training/banner-main-training.png')}}" alt="banner">

        <div class="info-slide-block">

        </div>
    </div>
    @include('layout._congratulation')
    <div class="training-intro mb-5">
        <div class="training-title text-center mb-4">
            <h3>职业培训 <span>CAREER TRAINING</span></h3>
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
    <div>

    </div>
</div>
@stop

@section('js')
@stop
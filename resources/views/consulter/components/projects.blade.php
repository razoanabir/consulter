@extends('consulter.components.layout')
@section('content')

<!-- page-banner start -->
<section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">Portfolio</div>
                        <div class="page-title">
                            <h1>Our company <span>Projects</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="{{asset($coverPhoto->project_page)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- team-area start -->
    <section class="our-project pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-115 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                <?php $project_data = $project->reverse()?>
                @foreach ($project_data->take(6) as $_data)
                <div class="col-lg-4 col-sm-6">
                    <div class="our-project__item overflow-hidden mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{$_data->image}}" alt="">

                        <div class="content d-flex align-items-center justify-content-between">
                            <div class="text">
                                <span class="fw-500 color-primary d-block mb-10 text-uppercase">Project Is About</span>
                                <h5 class="title color-d_black">{{$_data->title}}</h5>
                            </div>

                            <a href="{{route('project.details',$_data->slug)}}" class="theme-btn"><img src="dist/img/icon/arrow-right-top.svg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </section>
    <!-- team-area end -->

@endsection
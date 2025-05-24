@extends('consulter.components.layout')
@section('content')

<!-- page-banner start -->
<section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">Our Team</div>
                        <div class="page-title">
                            <h1>Company Team <span>Member</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="{{asset($coverPhoto->team_page)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- team-area start -->
    <section class="team pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-115 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                <!-- team-item -->
                <?php $team_data = $team?>
                @foreach ($team_data as $_data) 
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="team-item text-center mb-30 d-block overflow-hidden wow fadeInUp" data-wow-delay=".3s">
                        <div class="media">
                            <img src="{{asset($_data->image)}}" class="img-fluid" alt="">
                        </div>

                        <div class="text d-flex align-items-center justify-content-center">
                            <div class="left">
                                <h5 class="title color-white">{{$_data->name}}</h5>
                                <span class="position color-white font-la fw-500">{{$_data->designation}}</span>
                            </div>
                        </div>

                        <a href="{{route('team.details',$_data->slug)}}" class="theme-btn">View Ddetails <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                @endforeach
                <!-- team-item -->
            <div class="row">
                <div class="col-12">
                    <div class="team__content text-center mt-xs-35 mt-sm-40 mt-md-50 mt-lg-60 mt-80 wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="title fw-500 color-black">Consulting With Our Expert Team Members: <a href="">Schedule Meeting <i class="fab fa-telegram-plane"></i></a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area end -->

@endsection
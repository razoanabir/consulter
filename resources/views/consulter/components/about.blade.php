@extends('consulter.components.layout')
@section('content')

<!-- page-banner start -->
<section class="page-banner pt-xs-60 pt-sm-86 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">About Us</div>
                        <div class="page-title">
                            <h1>know Our About <span>Company</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="{{$coverPhoto->about_page}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- our-company start -->
    <section class="our-company  pt-xs-86 pb-xs-86 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{asset($about->image_1)}}" alt="" class="img-fluid">

                        <div class="years-experience overflow-hidden mt-20 mt-sm-10 mt-xs-10 text-center">
                            <div class="number mb-5 color-white">
                                <span class="counter">{{$about->our_experience}}</span><sup>+</sup>
                            </div>

                            <h5 class="title color-white">Years Experience</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida border-radius wow fadeInUp" data-wow-delay=".5s">
                        <img src="{{asset($about->image_2)}}" alt="" class="img-fluid">

                        <div class="horizental-bar"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35 wow fadeInUp" data-wow-delay=".3s">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Know Our Company</span>
                        <h2 class="title color-d_black mb-20 mb-sm-15 mb-xs-10">Our Company Provide High Quality Idea</h2>

                        <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                            <p>At Consulter, our mission is to empower businesses with the expertise they need to thrive. Our team of experienced professionals is passionate about helping clients achieve their unique goals. We believe in strong partnerships, integrity, and delivering exceptional results. Learn more about our history, our approach, and how we can help you succeed.</p>
                        </div>

                        <div class="client-feedback d-flex flex-column flex-sm-row">
                            <div class="client-feedback__item text-center">
                                <div class="client-feedback__item-header">
                                    <span class="color-primary font-la fw-600 text-uppercase">Success Project</span>
                                </div>

                                <div class="client-feedback__item-body">
                                    <div class="number mb-10 mb-xs-5 color-d_black fw-600">+<span class="counter">{{$about->success_project}}</span>%</div>
                                    <div class="description font-la mb-10 mb-xs-5">
                                        <p>Planning is the key to success.  We'll help you create a roadmap to achieve your objectives</p>
                                    </div>
                                    <div class="starts">
                                        <ul>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="client-feedback__item text-center">
                                <div class="client-feedback__item-header">
                                    <span class="color-primary font-la fw-600 text-uppercase">Customer Review</span>
                                </div>

                                <div class="client-feedback__item-body">
                                    <div class="number mb-10 mb-xs-5 color-d_black fw-600">+<span class="counter">{{number_format($averageRating, 1)}}</span></div>
                                    <div class="description font-la mb-10 mb-xs-5">
                                        <p>Our clients speak for themselves. Explore their success stories and see the impact of Consulter's expertise.</p>
                                    </div>
                                    <div class="starts">
                                        <ul>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                            <li><span></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-company end -->

    <!-- company-skill start -->
    <section class="company-skill pt-xs-86 pb-xs-86 pt-sm-100 pt-md-100 pt-120 pb-100 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="company-skill__content wow fadeInUp" data-wow-delay=".3s">
                        <span class="sub-title d-block fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-20"><img src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt="">Company Skills</span>
                        <h2 class="title color-pd_black mb-25 mb-xs-10 mb-sm-15">Our Company Provide <span>High Quality Idea</span></h2>

                        <div class="description font-la">
                            <p>Consulter brings together a team of experienced professionals with a passion for helping businesses succeed.  Learn more about our expertise and how we can help you navigate the complexities of today's market.</p>
                        </div>

                        <div class="progress-bar__wrapper mt-40 mt-sm-35 mt-xs-30">
                            <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".3s">
                                <h6 class="title color-d_black mb-10">{{$about->skill_1}}</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$about->expertice_at_skill_1}}" aria-valuemin="0" aria-valuemax="100" style="max-width: {{$about->expertice_at_skill_1}}%">
                                        <span class="placeholder" style="left: {{$about->expertice_at_skill_1}}%">{{$about->expertice_at_skill_1}}%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".5s">
                                <h6 class="title color-d_black mb-10">{{$about->skill_2}}</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$about->expertice_at_skill_2}}" aria-valuemin="0" aria-valuemax="100" style="max-width: {{$about->expertice_at_skill_2}}%">
                                        <span class="placeholder" style="left: {{$about->expertice_at_skill_2}}%">{{$about->expertice_at_skill_2}}%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".7s">
                                <h6 class="title color-d_black mb-10">{{$about->skill_3}}</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$about->expertice_at_skill_3}}" aria-valuemin="0" aria-valuemax="100" style="max-width: {{$about->expertice_at_skill_3}}%">
                                        <span class="placeholder" style="left: {{$about->expertice_at_skill_3}}%">{{$about->expertice_at_skill_3}}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="company-skill__media-wrapper d-flex flex-column mt-lg-60 mt-md-50 mt-sm-45 mt-xs-40 align-items-center wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{$about->video_link}}" class="popup-video" data-effect="mfp-move-from-top"><i class="icon-play"></i></a>

                        <div class="company-skill__media">
                            <img src="{{$about->video_thumbnail}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- company-skill end -->

    <!-- counter-area start -->
    <div class="counter-area pb-xs-86 pb-sm-120 pb-md-120 pb-lg-120 pb-xl-140 pb-170 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item d-flex align-items-center wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon color-primary">
                            <i class="icon-process-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">{{$about->successful_project}}</span>+</div>
                            <div class="description font-la">Successful Project</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon color-primary">
                            <i class="icon-support-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">{{$about->expert_consulter}}</span>+</div>
                            <div class="description font-la">Expert Consulter</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item d-flex align-items-center wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon color-primary">
                            <i class="icon-coffee-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">{{$about->cup_of_coffee}}</span>+</div>
                            <div class="description font-la">Cup Of Coffee</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item d-flex align-items-center wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon color-primary">
                            <i class="icon-teamwork-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">{{$about->client_satisfection}}</span>+</div>
                            <div class="description font-la">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area end -->

    <!-- our-team start -->
    <section class="our-team bg-dark_white pb-xs-86 pt-xs-86 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-team__content mb-65 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp" data-wow-delay=".3s">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Our Team</span>
                        <h2 class="title color-d_black">Meet Our Team <span>Member</span></h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
            <!-- team-item -->
            <?php $team_data = $team?>
            @foreach ($team_data as $_data)            
            <div class="col-xxl-3 col-lg-4 col-md-6">
                <a href="{{route('team.details',$_data->slug)}}"
                    class="team-item team-about-item text-center mb-30 d-block overflow-hidden wow fadeInUp"
                    data-wow-delay=".3s">
                    <div class="media">
                        <img src="{{asset($_data->image)}}" class="img-fluid" alt="">
                    </div>

                    <div class="text d-flex align-items-center justify-content-center">
                        <div class="left">
                            <h5 class="title color-white">{{$_data->name}}</h5>
                            <span class="position color-white font-la fw-500">{{$_data->designation}}</span>
                        </div>

                        <div class="right">
                            <div class="icon">
                                <i class="icon-arrow-right-2"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <!-- team-item -->
        </div>

            <div class="row">
                <div class="col-12">
                    <div class="our-team__btn-wrapper text-center mt-70 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{route('team')}}" class="theme-btn">See All Member <i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-team end -->
@endsection

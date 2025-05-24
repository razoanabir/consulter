@extends('consulter.components.layout')
@section('content')

<!-- page-banner start -->
<section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">Details</div>
                        <div class="page-title">
                            <h1>Company Team <span>Details</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Team Details</li>
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

    <!-- team-details-area start -->
    <section class="team-details pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="team-details__media overflow-hidden mb-md-40 mb-sm-35 mb-xs-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="social-profile d-flex flex-column">
                            <span>Follow Me</span>
                            <ul>
                                <li><a href="{{$team->facebook_link}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$team->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{$team->instagram_link}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{$team->linked_in_link}}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                        <img src="{{asset($team->image)}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team-details__content wow fadeInUp" data-wow-delay=".5s">
                        <h6><img src="{{asset('dist/img/team-details/badge-line.svg')}}" alt=""> information</h6>
                        <h2>{{$team->name}}<span>{{$team->designation}}</span></h2>

                        <p>{{$team->work_description}}</p>

                        <div class="contact-info">
                            <ul>
                                <li><span>Phone:</span> <a href="{{$team->contact_number}}">{{$team->contact_number}}</a></li>
                                <li><span>E-mail:</span> <a href="mailto:{{$team->email}}">{{$team->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr class="mt-100 mt-lg-80 mt-md-60 mt-sm-50 mt-xs-40 mb-100 mb-lg-80 mb-md-60 mb-sm-50 mb-xs-40">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="team-details__block wow fadeInUp" data-wow-delay=".3s">
                        <h3>Job Experience</h3>
                        <img src="{{asset('dist/img/team-details/badge-line.svg')}}" alt="">
                        <p>{{$team->job_experience}}</p>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team-details__block mt-xs-30 mt-sm-35 mt-md-40 wow fadeInUp" data-wow-delay=".5s">
                        <h3>Educational Experience</h3>
                        <img src="{{asset('dist/img/team-details/badge-line.svg')}}" alt="">
                        <p>{{$team->educational_experience}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details-area end -->
@endsection
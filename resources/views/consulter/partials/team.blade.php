<!-- our-team start -->
<section
    class="our-team our-team-home-3 pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="our-team__content mb-65 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp"
                    data-wow-delay=".3s">
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                            src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Our Team</span>
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
                <div class="our-team__btn-wrapper text-center mt-70 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp"
                    data-wow-delay=".3s">
                    <a href="{{route('team')}}" class="theme-btn">See All Member <i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our-team end -->
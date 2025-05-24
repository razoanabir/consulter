<!-- page-banner start -->
<section class="banner overflow-hidden" style="background-image: url({{asset($coverPhoto->landing_page)}});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner__content wow fadeInLeft" data-wow-delay=".5s">
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block">Welcome
                        To Consulter</span>
                    <h1 class="title color-d_black mb-sm-10 mb-xs-5 mb-15 wow fadeInUp">
                        {{$landingPage->title}}                    
                    </h1>

                    <div class="description font-la mb-40 mb-lg-35 mb-sm-30 mb-xs-25">
                        <p>{{$landingPage->details}}</p>
                    </div>

                    <a href="{{route('contact')}}" class="theme-btn">Free Consultation <i
                            class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-banner end -->

<!-- employee-friendly start -->
    <section class="employee-friendly pt-xs-80 pt-sm-100 pt-md-100 pt-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                    <div class="employee-friendly__content wow fadeInUp" data-wow-delay=".3s">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Services</span>
                        <h2 class="title color-d_black">Employee Friendly <span>Service</span></h2>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="slider-controls mt-sm-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="slider-arrows d-flex align-content-center justify-content-sm-end"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="employee-friendly__slider mt-65 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp" data-wow-delay=".5s">
                        @foreach ($service as $data)                      
                        <div class="slider-item">
                            <div class="similar-work__item reade-more-hidden d-flex justify-content-between flex-column">
                                <div class="top d-flex align-items-center">
                                    <h4 class="title color-d_black"><a href="{{route('service.details',$data->slug)}}">{{$data->title}}</a></h4>
                                </div>

                                <div class="bottom">
                                    <div class="media overflow-hidden">
                                        <img src="{{asset($data->image)}}" class="img-fluid" alt="">
                                    </div>

                                    <a href="{{route('service.details',$data->slug)}}" class="theme-btn text-center fw-600">Read Details <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- employee-friendly end -->

<!-- competitive-edge start -->
<section class="competitive-edge overflow-hidden">
    <div class="container">
        <div class="row align-items-end mb-minus-30">
            <div class="col-xxl-4 col-lg-6">
                <div class="competitive-edge__item d-flex align-items-center justify-content-between wow fadeInUp"
                    data-wow-delay=".3s">
                    <div class="left d-flex align-items-center">
                        <div class="icon color-primary">
                            <i class="icon-process-1"></i>
                        </div>
                        <h6 class="title text-capitalize color-d_black">Build Your Business With Right Way</h6>
                    </div>

                    <a href="{{route('about')}}" class="arrow-right">
                        <i class="icon-arrow-right-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-xxl-4 col-lg-6">
                <div class="competitive-edge__item d-flex align-items-center justify-content-between wow fadeInUp"
                    data-wow-delay=".5s">
                    <div class="left d-flex align-items-center">
                        <div class="icon color-primary">
                            <i class="like-comment"></i>
                        </div>
                        <h6 class="title text-capitalize color-d_black">We Take Care and Growth Your Business</h6>
                    </div>

                    <a href="{{route('about')}}" class="arrow-right">
                        <i class="icon-arrow-right-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-xxl-4 col-lg-12">
                <div class="competitive-edge__item d-flex competitive-edge__item-video justify-content-between flex-column wow fadeInUp"
                    data-wow-delay=".7s">
                    <div class="left">
                        <h6 class="title text-capitalize color-white mb-10 mb-xs-5">Find A New Competitive Edge</h6>
                        <div class="description font-la color-white">
                            <p>Gain the advantage and achieve sustainable success in your industry.</p>
                        </div>
                    </div>

                    <div class="arrow-right d-flex justify-content-between flex-row align-items-end">
                        <span>Watch Video
                            <!-- <i class="icon-arrow-right"></i> --><img src="/img/icon/arrow-right-big-alt.svg"
                                alt=""></span>
                        <a href="{{$about->video_link}}" class="popup-video"
                            data-effect="mfp-move-from-top"><i class="icon-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- competitive-edge end -->
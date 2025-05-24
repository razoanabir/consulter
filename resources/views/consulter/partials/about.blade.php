    <!-- company-skill start -->
    <section
        class="company-skill company-skill-home-3 pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-90 overflow-hidden">
        <div class="container">
            <a href="{{ $about->video_link }}" class="popup-video" data-effect="mfp-move-from-top"><i
                    class="icon-play"></i></a>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida wow fadeInUp" data-wow-delay=".3s">
                        <img height="330px" width="318px" src="{{$about->image_1}}" alt="" class="img-fluid">

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
                        <img height="500px" width="318px" src="{{$about->image_2}}" alt="" class="img-fluid">

                        <div class="horizental-bar"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="company-skill__content mt-md-50 mt-sm-45 mt-xs-40 ml-auto wow fadeInUp"
                        data-wow-delay=".7s">
                        <span
                            class="sub-title d-block fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-20"><img
                                src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt="">Company
                            Skills</span>
                        <h2 class="title color-pd_black mb-25 mb-xs-10 mb-sm-15">Our Company Provide <span>High Quality
                                Idea</span></h2>

                        <div class="description font-la">
                            <p>At Consulter, our mission is to empower businesses with the expertise they need to thrive. Our team of experienced professionals is passionate about helping clients achieve their unique goals. We believe in strong partnerships, integrity, and delivering exceptional results. Learn more about our history, our approach, and how we can help you succeed.</p>
                        </div>

                        <div class="progress-bar__wrapper mt-40 mt-sm-35 mt-xs-30">
                            <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".3s">
                                <h6 class="title color-d_black mb-10">{{$about->skill_1}}</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$about->expertice_at_skill_1}}" aria-valuemin="0"
                                        aria-valuemax="100" style="max-width: {{$about->expertice_at_skill_1}}%">
                                        <span class="placeholder" style="left: {{$about->expertice_at_skill_1}}%">{{$about->expertice_at_skill_1}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".5s">
                                <h6 class="title color-d_black mb-10">{{$about->skill_2}}</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$about->expertice_at_skill_2}}" aria-valuemin="0"
                                        aria-valuemax="100" style="max-width: {{$about->expertice_at_skill_2}}%">
                                        <span class="placeholder" style="left: {{$about->expertice_at_skill_2}}%">{{$about->expertice_at_skill_2}}%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-progress-bar mb-30 wow fadeInUp" data-wow-delay=".7s">
                                <h6 class="title color-d_black mb-10">{{$about->skill_3}}</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$about->expertice_at_skill_3}}" aria-valuemin="0"
                                        aria-valuemax="100" style="max-width: {{$about->expertice_at_skill_3}}%">
                                        <span class="placeholder" style="left: {{$about->expertice_at_skill_3}}%">{{$about->expertice_at_skill_3}}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- company-skill end -->

    <!-- counter-area start -->
    <div class="counter-area pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
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
                            <div class="description font-la">Cup Of Cofee</div>
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
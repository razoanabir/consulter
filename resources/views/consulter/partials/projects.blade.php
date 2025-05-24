<!-- projects start -->
<section
    class="blog-news bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="blog-news__content wow fadeInUp" data-wow-delay=".3s">
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                            src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Our
                        Portfolio</span>
                    <h2 class="title color-d_black">Amazing Work <span>Showcase</span></h2>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="blog-news__content mt-md-25 mt-sm-15 mt-xs-10 text-start text-lg-end wow fadeInUp"
                    data-wow-delay=".3s">
                    <a href="{{route('projects')}}" class="theme-btn">View All Sowcase <i
                            class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>

        <div class="blog-news__bottom mt-65 mt-sm-50 mt-xs-40">
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
        </div>
    </div>
</section>
<!-- projects end -->
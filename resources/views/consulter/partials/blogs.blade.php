<!-- blog-news start -->
<section class="blog-news pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden"
    style="background-image: url(dist/img/home-3/blog-new-bg.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="blog-news__content wow fadeInUp" data-wow-delay=".3s">
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                            src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Blog &
                        News</span>
                    <h2 class="title color-d_black">Consulter Latest <span>Blog & News</span></h2>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="blog-news__content mt-md-25 mt-sm-15 mt-xs-10 text-start text-lg-end wow fadeInUp"
                    data-wow-delay=".3s">
                    <a href="{{route('blogs')}}" class="theme-btn">View All Blog <i
                            class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>

        <div class="blog-news__bottom mt-65 mt-sm-50 mt-xs-40">
            <div class="row mb-minus-30">
                <?php $blog_data = $blog->reverse()?>
                @foreach ($blog_data->take(4) as $_data)                
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="blog-item mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-50">
                            <div class="media overflow-hidden">
                                <img src="{{asset($_data->image)}}" class="img-fluid" alt="">
                            </div>
                            <div class="date">
                                <span>{{$_data->created_at->format('d')}}</span>
                                <span>{{$_data->created_at->format('M')}}</span>
                                <span>{{$_data->created_at->format('Y')}}</span>
                            </div>
                        </div>

                        <div class="content pr-sm-25 pr-xs-15 pl-xs-15 pl-sm-25 pr-xs-15 pr-30 pb-30 pl-30">
                            <div class="post-author mb-5">
                                <a href="{{route('blog.details',$_data->slug)}}">{{$_data->title}}</a>
                            </div>

                            <h4><a href="{{route('blog.details',$_data->slug)}}">{{Str::limit($_data->details, '100', '....')}}</a></h4>

                            <div class="btn-link-share mt-xs-10 mt-sm-10 mt-15">
                                <a href="{{route('blog.details',$_data->slug)}}" class="theme-btn btn-border">Read More <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- blog-news end -->

<!-- cta start -->
<section class="cta-banner overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div
                    class="cta-banner__content d-flex flex-column flex-lg-row justify-content-between align-items-center pl-xs-20  pr-xs-20 pl-sm-30  pr-sm-30 pl-lg-50 pr-lg-50 pr-85 pl-85 overflow-hidden">
                    <div class="cta-banner__content-text wow fadeInUp" data-wow-delay=".3s">
                        <h3 class="title text-capitalize color-white">Small Business Grow Fast With Our Consulting
                            Services</h3>
                    </div>
                    <div class="cta-banner__content-btn wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{route('contact')}}" class="theme-btn btn-white">Let’s Work Together <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta start -->
<!-- testimonial start -->
<section
    class="testimonial bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp"
                    data-wow-delay=".3s">
                    <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15"><img
                            src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Testimonials
                    </h6>
                    <h2 class="title color-d_black">Consulter <span>Customer Feedback</span></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container container_testimonial">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider wow fadeInUp" data-wow-delay=".5s">

                    <?php $testimonial_data = $testimonial->reverse() ?>
                    @foreach ($testimonial_data as $_data)
                    <div class="slider-item">
                        <div class="testimonial__item">
                            <!-- Header with Image & Name -->
                            <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <!-- Profile Image -->
                                    <div class="media overflow-hidden">
                                        <img src="{{ asset($_data->image) }}" class="img-fluid rounded-circle" style="width: 80px; height: 80px; object-fit: cover;" alt="Client Image">
                                    </div>

                                    <!-- Client Info -->
                                    <div class="meta ms-3">
                                        <h6 class="name fw-bold text-uppercase color-d_black">{{ $_data->name }}</h6>
                                        <span class="position font-la fw-500 color-d_black">{{ $_data->profession }}</span>
                                    </div>
                                </div>

                                <!-- Star Rating -->
                                <div class="right">
                                    <div class="stars d-flex align-items-center">
                                        <span class="mt-2 me-1">{{ $_data->star }}/5</span>
                                        <img height="20px" src="https://img.icons8.com/?size=100&id=85185&format=png&color=228BE6" alt="Star Icon">
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Content: Either Video or Text Review -->
                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                @if($_data->video_url)
                                <!-- Embed Video -->
                                <div class="video-container">
                                    <iframe width="100%" height="200" src="{{ $_data->video_url }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                @else
                                <!-- Display Review Text -->
                                <p>{{ $_data->review }}</p>
                                @endif
                            </div>

                            <!-- Footer with Quote Icon -->
                            <div class="testimonial__item-footer d-flex justify-content-end">
                                <div class="quote color-primary">
                                    <i class="fas fa-quote-right mb-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial end -->

<!-- delivery start -->
<section class="delivery pt-xs-80 pb-sm-100 pt-md-100 pt-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="delivery__content mb-65 mb-md-60 mb-sm-50 mb-xs-40 text-center wow fadeInUp" data-wow-delay=".3s">
                    <h2 class="title">From Strategy to Delivery <span>On Time Every Time</span></h2>
                </div>

                <div class="delivery__media">
                    <img src="{{asset($about->video_thumbnail)}}" class="img-fluid" alt="">

                    <div class="delivery__media-theme-btn-wrapper">
                        <a href="{{$about->video_link}}" class="popup-video" data-effect="mfp-move-from-top"><img src="{{asset('dist/img/icon/play-transparent.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- delivery end -->
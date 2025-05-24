@extends('consulter.components.layout')
@section('content')

<!-- page-banner start -->
<section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                    <div class="transparent-text">Contact</div>
                    <div class="page-title">
                        <h1>Contact <span>With Us</span></h1>
                    </div>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-6">
                <div class="page-banner__media mt-xs-30 mt-sm-40">
                    <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                    <img src="{{$coverPhoto->contact_page}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-banner end -->

<!-- contact-us start -->
<section class="contact-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-us__content wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-15 mb-xs-10 mb-20"><img
                            src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> contact us with
                        Ease</h6>
                    <h2 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">Get in Touch</h2>

                    <div class="description font-la">
                        <p>Have questions about our services or need expert advice? Our team of experienced consultants is ready to assist you. Contact us today for a free consultation and discover how Consulter can help you achieve your business goals.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row contact-us__item-wrapper mt-xs-35 mt-sm-40 mt-md-45">
                    <div class="col-sm-6">
                        <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                <div class="icon mr-10 color-primary">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>

                                <h5 class="title color-d_black">Oue Main Office</h5>
                            </div>

                            <div class="contact-us__item-body font-la">
                                {{$personalInformation->address}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".5s">
                            <div
                                class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                <div class="icon mr-10 color-primary">
                                    <i class="icon-home-location"></i>
                                </div>

                                <h5 class="title color-d_black">Ontario Office</h5>
                            </div>

                            <div class="contact-us__item-body font-la">
                            {{$personalInformation->address}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".7s">
                            <div
                                class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                <div class="icon mr-10 color-primary">
                                    <i class="icon-phone"></i>
                                </div>

                                <h5 class="title color-d_black">Call Us Toll Free</h5>
                            </div>

                            <div class="contact-us__item-body font-la">
                                <ul>
                                    <li><a href="tell:{{$personalInformation->cotact_number}}">{{$personalInformation->cotact_number}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".9s">
                            <div
                                class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                <div class="icon mr-10 color-primary">
                                    <i class="icon-email"></i>
                                </div>

                                <h5 class="title color-d_black">Email Us</h5>
                            </div>

                            <div class="contact-us__item-body font-la">
                                <ul>
                                    <li><a href="mailto:{{$personalInformation->email}}">{{$personalInformation->email}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <hr class="mt-md-45 mt-sm-30 mt-xs-30 mt-60">
            </div>
        </div>
    </div>
</section>
<!-- contact-us end -->

<!-- contact-us form end -->
<section class="contact-form  mb-xs-80 mb-sm-100 mb-md-100 mb-120 overflow-hidden">
    <div id="contact-map" class="mb-sm-30 mb-xs-25">
        <iframe
            src="{{$personalInformation->google_map_location}}"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- contact-map -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85 wow fadeInUp"
                    data-wow-delay=".3s">
                    <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-15"><img
                                src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Need help?
                        </h6>
                        <h3 class="title color-d_black">Contact Us</h3>
                        <!-- success message -->
                        <div class="success-mail">
                            <!-- The message will come from ajax, after the submition -->
                        </div>
                        <!-- error message -->
                        <div class="errors-mail">
                            <!-- The message will come from ajax, after the submition -->
                        </div>
                    </div>

                    <form class="" action="{{route('send.mail')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="single-personal-info">
                            <input type="text" required name="name" id="name"  placeholder="Your Name">
                        </div>
                        <div class="single-personal-info">
                            <input type="email" required name="email" id="email" placeholder="Your e-mail">
                        </div>
                        <div class="single-personal-info">
                            <input type="text" required name="subject" placeholder="Subject">
                        </div>
                        <div class="single-personal-info">
                            <textarea required name="message" id="message" placeholder="Your Message"></textarea>
                        </div>

                        <button type="submit" class="theme-btn send-mail btn-sm">
                            <span class="res-btn">
                            Send <i class="far fa-chevron-double-right"></i>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-us form end -->

@endsection
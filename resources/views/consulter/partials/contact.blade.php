<!-- contact us start -->
<section class="can-help can-help-home-3 bg-dark_white pb-xs-80 mt-5 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="can-help__content  mb-sm-40 mb-xs-40 mb-md-45 mb-lg-50 wow fadeInUp" data-wow-delay=".3s">
                    <h2 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">Experience The Evolution Of Your Business
                    </h2>

                    <div class="description font-la mb-md-25 mb-sm-25 mb-xs-20 mb-lg-30 mb-50">
                        <p>Have questions about our services or need expert advice? Our team of experienced consultants is ready to assist you. Contact us today for a free consultation and discover how Consulter can help you achieve your business goals.</p>
                    </div>

                    <div class="help-text mb-md-25 mb-sm-25 mb-xs-20 mb-lg-25 mb-40">
                        <a href="contact.html"><img src="dist/img/icon/question-comment.svg"
                                class="img-fluid mr-xs-10 mr-20" alt="">Need help? <span>Contact Us</span></a>
                    </div>

                    <div class="can-help__content-btn-group d-flex flex-column flex-sm-row">
                        <a href="tel:{{$personalInformation->contact_number}}"
                            class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                            <div class="icon">
                                <i class="icon-call"></i>
                                <!-- <img src="dist/img/icon/phone-1.svg" alt=""> -->
                            </div>
                            <div class="text">
                                <span class="font-la mb-10 d-block fw-500 color-d_black">Call Us Everyday</span>
                                <h5 class="fw-500 color-d_black">{{$personalInformation->contact_number}}</h5>
                            </div>
                        </a>

                        <a href="mailto:{{$personalInformation->email}}"
                            class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                            <div class="icon">
                                <i class="icon-email-1"></i>
                                <!-- <img src="dist/img/icon/phone-1.svg" alt=""> -->
                            </div>
                            <div class="text">
                                <span class="font-la mb-10 d-block fw-500 color-d_black">Email Drop Us</span>
                                <h5 class="fw-500 color-d_black">{{$personalInformation->email}}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85 wow fadeInUp"
                    data-wow-delay=".5s">
                    <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-15"><img
                                src="dist/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Get In
                            Touch</h6>
                        <h3 class="title color-d_black">Free Consultation</h3>

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
<!-- contact us end -->
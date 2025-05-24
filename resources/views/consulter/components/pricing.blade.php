@extends('consulter.components.layout')
@section('content')

<!-- page-banner start -->
<section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">Services</div>
                        <div class="page-title">
                            <h1>Pricing & <span>Plans</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing Table</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="{{$coverPhoto->pricing_page}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- pricing start -->
    <section class="pricing pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden" style="background-image: url(dist/img/price/testimonial-bg.svg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pricing__content mb-40 mb-xs-30 text-center wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="title color-d_black mb-25 mb-sm-20 mb-xs-15 text-capitalize">Pick a plan that fits your needs</h2>
                    </div>
                </div>
            </div>

            <div class="pricing-item-wraper">
                <div class="row mb-minus-30" id="monthly">
                    @foreach ($pricing as $data)                    
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing__card d-flex flex-column justify-content-between mb-30 overflow-hidden wow fadeInUp" data-wow-delay=".3s">
                            <div class="pricing__card-header">
                                <h3 class="title color-d_black">{{$data->title}}</h3>
                                <h6 class="sub-title font-la fw-600 text-uppercase mb-30 mb-sm-25 mb-xs-15">{{$data->title}} <img src="dist/img/icon/hand-3.svg" class="img-fluid" alt=""></h6>
                                <div class="price color-white mb-30 mb-sm-25 mb-xs-15 overflow-hidden">${{$data->cost}}<span>/Monthly</span></div>
                                <p>The Services You Will Get</p>
                            </div>
                            <div class="pricing__card-body">
                                <ul>
                                    <?php 
                                        $check_box_1 = $data->input_1;
                                        if($check_box_1 == 'include'){
                                            $check_box_1 = 'fal fa-check-square';
                                        }else{
                                            $check_box_1 = 'icon-close-3';
                                        }
                                    ?>
                                    <li><i class="{{$check_box_1}}"></i> Business Solutions</li>
                                    <?php 
                                        $check_box_2 = $data->input_2;
                                        if($check_box_2 == 'include'){
                                            $check_box_2 = 'fal fa-check-square';
                                        }else{
                                            $check_box_2 = 'icon-close-3';
                                        }
                                    ?>
                                    <li><i class="{{$check_box_2}}"></i> Market Growth Solutions</li>
                                    <?php 
                                        $check_box_3 = $data->input_3;
                                        if($check_box_3 == 'include'){
                                            $check_box_3 = 'fal fa-check-square';
                                        }else{
                                            $check_box_3 = 'icon-close-3';
                                        }
                                    ?>
                                    <li><i class="{{$check_box_3}}"></i> Security Management</li>
                                    <?php 
                                        $check_box_4 = $data->input_4;
                                        if($check_box_4 == 'include'){
                                            $check_box_4 = 'fal fa-check-square';
                                        }else{
                                            $check_box_4 = 'icon-close-3';
                                        }
                                    ?>
                                    <li><i class="{{$check_box_4}}"></i> Digital Business Solutions</li>
                                    <?php 
                                        $check_box_5 = $data->input_5;
                                        if($check_box_5 == 'include'){
                                            $check_box_5 = 'fal fa-check-square';
                                        }else{
                                            $check_box_5 = 'icon-close-3';
                                        }
                                    ?>
                                    <li><i class="{{$check_box_5}}"></i> 24/7 System Monitoring</li>
                                </ul>
                                <a href="contact.html" class="theme-btn mt-40 mt-md-35">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- /pricing__card -->
                </div>
            </div>
        </div>
    </section>
    <!-- pricing end -->
@endsection
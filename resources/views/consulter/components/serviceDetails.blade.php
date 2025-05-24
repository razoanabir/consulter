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
                            <h1>Services <span>Details</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services Details</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="{{asset($coverPhoto->service_page)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- team-area start -->
    <section class="services-details pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-115 overflow-hidden">
        <div class="container">
            <div class="row" data-sticky_parent>
                <div class="col-xl-8" data-sticky_column>
                    <div class="media mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                        <img src="{{asset($service->image)}}" alt="">
                    </div>
                    <div class="services-details__content">
                        <h2>{{$service->title}}</h2>
                        <p>{{$service->details}}</p>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area end -->
@endsection
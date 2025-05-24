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
                            <h1>Project <span>Details</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="{{asset($coverPhoto->project_page)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- our-project-details start -->
    <section class="our-project-details pt-xs-80 pt-sm-100 pt-md-100 pt-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="media">
                        <img src="{{asset($project->image)}}" alt="">
                    </div>

                    <div class="our-project-details-meta mr-30 ml-30 pt-sm-30 pt-xs-25 pb-sm-30 pb-xs-25 pt-40 pb-40 mb-80 mb-md-60 mb-sm-30 mb-xs-25 ">
                        <div class="row mb-minus-30">
                            <div class="col-xl-3 col-sm-6">
                                <div class="meta-item d-flex flex-sm-column flex-md-row align-items-center justify-content-center mb-30">
                                    <div class="icon text-center">
                                        <i class="icon-clint"></i>
                                    </div>

                                    <div class="text">
                                        <span class="fw-500 font-la d-block mb-2">Clints:</span>
                                        <h6 class="color-primary">{{$project->client_name}}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="meta-item d-flex flex-sm-column flex-md-row align-items-center justify-content-center mb-30">
                                    <div class="icon text-center">
                                        <i class="fas fa-layer-group"></i>
                                    </div>

                                    <div class="text">
                                        <span class="fw-500 font-la d-block mb-2">Category:</span>
                                        <h6 class="color-primary">{{$project->category->category_name}}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="meta-item d-flex flex-sm-column flex-md-row align-items-center justify-content-center mb-30">
                                    <div class="icon text-center">
                                        <i class="icon-date"></i>
                                    </div>

                                    <div class="text">
                                        <span class="fw-500 font-la d-block mb-2">Date:</span>
                                        <h6 class="color-primary">{{$project->date}}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="meta-item d-flex flex-sm-column flex-md-row align-items-center justify-content-center mb-30">
                                    <div class="icon text-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>

                                    <div class="text">
                                        <span class="fw-500 font-la d-block mb-2">Address:</span>
                                        <h6 class="color-primary">{{$project->address}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="our-project-details__content">
                        <h6>Business, Finance</h6>
                        <h2>Business & Strategy</h2>

                        <p>{{$project->details}}</p>

                        <h2>The Challenge Of Project</h2>

                        <p>{{$project->experience}}</p>

                        <hr>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- our-project-details end -->


@endsection
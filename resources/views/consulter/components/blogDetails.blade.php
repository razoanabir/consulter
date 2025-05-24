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
                            <h1>Blog <span>Details</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="{{asset($coverPhoto->blog_page)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- team-area start -->
    <section class="blog pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row" data-sticky_parent>
                <div class="col-xl-8" data-sticky_column>
                    <div class="blog-item blog-standard blog-post-details">
                        <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-40">
                            <div class="media overflow-hidden">
                                <img src="{{asset($blog->image)}}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="content pr-sm-25 pr-xs-15 pl-xs-15 pl-sm-25 pr-xs-15 pr-30 pl-30 pb-xs-25 pb-sm-30 pb-40">
                            <div class="post-meta mb-10">
                                <a><i class="icon-user"></i>{{$blog->author}}</a>
                                <a><i class="icon-category"></i>{{$blog->category->category_name}}</a>
                                <a><i class="fal fa-clock"></i>{{$blog->created_at->format('d F Y')}}</a>
                            </div>

                            <h3>{{$blog->title}}</h3>

                            <p>{{$blog->details}}</p>

                            <blockquote>
                             <h6>{{$blog->author}}<span>'s Note</span></h6>
                                <p>{{$blog->personal_note}}</p>
                            </blockquote>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area end -->

@endsection
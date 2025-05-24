@extends('consulter.components.layout')
@section('content')


    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">News & Blog</div>
                        <div class="page-title">
                            <h1>Our latest News & <span>Blog Post</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="dist/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="{{ asset($coverPhoto->blog_page)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- team-area start -->
    <section class="blog pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-115 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                <?php $blog_data = $blog->reverse() ?>
                @foreach ($blog_data as $_data)
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="blog-item mb-30">
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
                                <a href="{{route('blog.details',$_data->slug)}}">{{$_data->category->name}}</a>
                            </div>

                            <h4><a href="{{route('blog.details',$_data->slug)}}">{{$_data->title}}</a></h4>

                            <div class="btn-link-share mt-xs-10 mt-sm-10 mt-15">
                                <a href="{{route('blog.details',$_data->slug)}}" class="theme-btn btn-border">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- team-area end -->


@endsection
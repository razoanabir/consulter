@extends('layouts.admin')
@section('content')
<style>
    .video-container {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        overflow: hidden;
        border-radius: 10px;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }
</style>
<div class="container mb-5">
    <div class="row rounded" style="height: 56px; color: #344767; background: white;">

        <!-- Heading for the page -->
        <div class="col-md-12 mt-2">
            <span class="fs-4">Client's Reviews</span>
            <a href="{{ route('admin.dashboard') }}" style="float: right;" type="button" class="btn bg-gradient-secondary">Dashboard</a>
        </div>

        <div class="col-md-12 mt-2">
            <!-- Success message -->
            @if (session('msg'))
            <div class="alert bg-gradient-success alert-dismissible fade show text-white" role="alert">
                {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
    </div>

    <!-- All client's reviews -->
    <div class="row mt-5">
        @foreach ($data as $_data)
        <div class="col-md-4 mt-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <!-- Client's Image -->
                    <img style="height:130px; width:130px; border-radius: 50%; margin-bottom: 10px;" src="{{asset($_data->image)}}" alt="Client Image">

                    <!-- Name & Profession -->
                    <p class="card-title"><span>Name : {{ $_data->name }}</span> </p>
                    <p><span>Profession : {{ $_data->profession }}</span></p>

                    <!-- Star Rating -->
                    <p class="p-2">Rating : {{ $_data->star }}/5 <i class="fa-solid fa-star"></i></p>

                    <!-- Display Review Based on Type -->
                    @if($_data->review)
                    <p>{{ Str::limit($_data->review, 100, '......') }}</p>
                    @elseif($_data->video_url)
                    <div class="video-container mt-3">
                        <iframe src="{{ $_data->video_url }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                    @endif


                    <!-- Edit & Delete Buttons -->
                    <a href="{{route('edit.testimonial',$_data->id)}}" class="btn bg-gradient-info">Edit</a>
                    <a href="{{route('delete.testimonial', $_data->id)}}" class="btn bg-gradient-danger" onclick="return confirm('This data will be deleted permanently')">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
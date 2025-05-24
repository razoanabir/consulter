@extends('layouts.admin')
@section('content')

    <div class="container">
      <!-- success message -->
        @if (session('msg'))
          <div class="alert bg-gradient-success alert-dismissible fade show text-white" role="alert">
                {{ session('msg') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <label aria-hidden="true">&times;</label>
              </button>
          </div>
        @endif
      <!-- Error message -->
        @if ($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert bg-gradient-warning alert-dismissible fade show text-white" role="alert">
                {{ $error }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <label aria-hidden="true">&times;</label>
              </button>
          </div>
          @endforeach
        @endif
        <form action="{{route('store.cover.photo')}}" method="post" enctype="multipart/form-data" class="card card-body mt-4">
          @csrf
            <h4 class="mb-0">Update Cover Photos For Different Pages</h4>

            <hr class="horizontal dark my-3">

            <div class="row">
                <div class="col-md-6">

                    <label for="landing_page" class="form-label">Update Cover Photo For Landing Page</label><br>
                    <img height="150px" width="100%" src="{{asset($data->landing_page)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="landing_page" id="landing_page" type="file">
                
                    <label for="service_page" class="form-label">Update Cover Photo For Service Page</label><br>
                    <img height="150px" width="100%" src="{{asset($data->service_page)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="service_page" id="service_page" type="file">

                    <label for="about_page" class="form-label">Update Cover Photo For About Page</label><br>
                    <img height="150px" width="100%" src="{{asset($data->about_page)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="about_page" id="about_page" type="file">

                    <label for="blog_page" class="form-label">Update Cover Photo For Blog Page</label><br>
                    <img height="150px" width="100%" src="{{asset($data->blog_page)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="blog_page" id="blog_page" type="file">

                </div>

                <div class="col-md-6">
                    
                    <label for="pricing_page" class="form-label">Update Cover Photo For Pricing Page</label><br>
                    <img height="150px" width="100%" src="{{asset($data->pricing_page)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="pricing_page" id="pricing_page" type="file">
                
                    <label for="team_page" class="form-label">Update Cover Photo For </label><br>
                    <img height="150px" width="100%" src="{{asset($data->team_page)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="team_page" id="team_page" type="file">

                    <label for="project_page" class="form-label">Update Cover Photo For Project Page</label><br>
                    <img height="150px" width="100%" src="{{asset($data->project_page)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="project_page" id="project_page" type="file">

                    <label for="contact_page" class="form-label">Update Cover Photo For Contact Page</label><br>
                    <img height="150px" width="100%" src="{{asset($data->contact_page)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="contact_page" id="contact_page" type="file">

                </div>
            </div>
  
            <div class="d-flex justify-content-end mt-4">
              <a href="{{route('admin.dashboard')}}"  class="btn bg-gradient-primary m-0">Cancel</a>
              <button type="submit" class="btn bg-gradient-info m-0 ms-2">Update</button>
            </div>

          </form>
        </div>
    </div>
@endsection
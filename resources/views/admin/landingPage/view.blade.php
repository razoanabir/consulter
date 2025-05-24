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
        <form action="{{route('store.landing.page')}}" method="post" enctype="multipart/form-data" class="card card-body mt-4">
          @csrf
            <h4 class="mb-0">Update Landing Page's Information</h4>

            <hr class="horizontal dark my-3">


            <div class="row">
                <div class="col-md-6">
                    <label for="logo" class="form-label">Update Website's Logo</label><br>
                    <img height="100px" width="150px" src="{{asset($data->logo)}}" alt=""><br><br>
                    <input required class="form-control form-control-lg" name="logo" id="logo" type="file">
                </div>
                <div class="col-md-6">
                    <label for="website_icon" class="form-label">Update Website's Logo</label><br>
                    <img height="100px" width="150px" src="{{asset($data->website_icon)}}" alt=""><br><br>
                    <input required class="form-control form-control-lg" name="website_icon" id="website_icon" type="file">
                </div>
            </div>

            <label for="website_title" class="form-label">Update Website's Title</label>
            <input type="text" class="form-control" name="website_title" value="{{$data->website_title}}" id="website_title"><br>
            
            <label for="title" class="form-label">Update Landing Page's Title</label>
            <input type="text" class="form-control" name="title" value="{{$data->title}}" id="title"><br>
            
            <div class="form-group">
              <label for="details">Update Landing Page's Details</label>
              <textarea required class="form-control" name="details" id="details" rows="3">{{$data->details}}</textarea>
            </div>
  
            <div class="d-flex justify-content-end mt-4">
              <a href="{{route('admin.dashboard')}}"  class="btn bg-gradient-primary m-0">Cancel</a>
              <button type="submit" class="btn bg-gradient-info m-0 ms-2">Update</button>
            </div>

          </form>
        </div>
    </div>
@endsection
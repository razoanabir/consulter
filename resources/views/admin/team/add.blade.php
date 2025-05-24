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
        <form action="{{route('store.team')}}" method="post" enctype="multipart/form-data" class="card card-body mt-4">
          @csrf
            <h4 class="mb-0">Add New Team Member</h4>

            <hr class="horizontal dark my-3">

            <div class="row">
                <div class="col-md-6">
                    <label for="name" class="form-label">New Member's Name</label>
                    <input required type="text" class="form-control" name="name" id="name"><br>
                </div>
                <div class="col-md-6">
                    <label for="designation" class="form-label">New Member's Designation</label>
                    <input required type="text" class="form-control" name="designation" id="designation"><br>
                </div>
            </div>
        
            <label for="image" class="form-label">New Member's Image</label>
            <input required class="form-control form-control-lg" name="image" id="image" type="file">

            <div class="row">
                <div class="col-md-6">

                    <label for="contact_number" class="form-label">New Member's Contact Number</label>
                    <input required type="number" class="form-control" name="contact_number" id="contact_number"><br>

                    <label for="email" class="form-label">New Member's Email Address</label>
                    <input required type="email" class="form-control" name="email" id="email"><br>

                    <label for="facebook_link" class="form-label">New Member's Facebook Account Link</label>
                    <input required type="text" class="form-control" name="facebook_link" id="facebook_link"><br>

                </div>
                <div class="col-md-6">

                    <label for="instagram_link" class="form-label">New Member's Instagram Account Link</label>
                    <input required type="text" class="form-control" name="instagram_link" id="instagram_link"><br>

                    <label for="twitter_link" class="form-label">New Member's Twitter Account Link</label>
                    <input required type="text" class="form-control" name="twitter_link" id="twitter_link"><br>

                    <label for="linked_in_link" class="form-label">New Member's Linked-in Account Link</label>
                    <input required type="text" class="form-control" name="linked_in_link" id="linked_in_link"><br>

                </div>
            </div>

            <div class="form-group">
              <label for="work_description">New Member's Work Description</label>
              <textarea required class="form-control" name="work_description" id="work_description" rows="3"></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="educational_experience">New Member's Educational Experience</label>
                        <textarea required class="form-control" name="educational_experience" id="educational_experience" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="job_experience">New Member's Job Experience</label>
                        <textarea required class="form-control" name="job_experience" id="job_experience" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
              <a href="{{route('admin.dashboard')}}"  class="btn bg-gradient-primary m-0">Cancel</a>
              <button type="submit" class="btn bg-gradient-info m-0 ms-2">Add New Member</button>
            </div>

          </form>
        </div>
    </div>
@endsection
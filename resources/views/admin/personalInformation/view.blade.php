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
        <form action="{{route('store.personal.information')}}" method="post" enctype="multipart/form-data" class="card card-body mt-4">
          @csrf
            <h4 class="mb-0">Update Personal Informations</h4>

            <hr class="horizontal dark my-3">

            <div class="row">
                <div class="col-md-6">

                    <label for="facebook_link" class="form-label">Update Facebook Account Link</label>
                    <input required type="text" class="form-control" value="{{$data->facebook_link}}" name="facebook_link" id="facebook_link"><br>

                    <label for="instagram_link" class="form-label">Update Instagram Account Link</label>
                    <input required type="text" class="form-control" value="{{$data->instagram_link}}" name="instagram_link" id="instagram_link"><br>

                    <label for="twitter_link" class="form-label">Update Twitter Account Link</label>
                    <input required type="text" class="form-control" value="{{$data->twitter_link}}" name="twitter_link" id="twitter_link"><br>

                    <label for="linked_in_link" class="form-label">Update Linked-in Account Link</label>
                    <input required type="text" class="form-control" value="{{$data->linked_in_link}}" name="linked_in_link" id="linked_in_link"><br>

                    <label for="working_time" class="form-label">Update Work Shedulle</label>
                    <input required type="text" class="form-control" value="{{$data->working_time}}" name="working_time" id="working_time"><br>

                </div>
                <div class="col-md-6">

                    <label for="contact_number" class="form-label">Update Contact Number</label>
                    <input required type="number" class="form-control" value="{{$data->contact_number}}" name="contact_number" id="contact_number"><br>


                    <label for="email" class="form-label">Update E-mail Address </label>
                    <input required type="email" class="form-control" value="{{$data->email}}" name="email" id="instagram_link"><br>

                    <label for="address" class="form-label">Update Live Location</label>
                    <input required type="text" class="form-control" value="{{$data->address}}" name="address" id="address"><br>

                    <label for="google_map_location" class="form-label">Update Google Map Location</label>
                    <input required type="text" class="form-control" value="{{$data->google_map_location}}" name="google_map_location" id="google_map_location"><br>

                    <label for="weekly_holiday" class="form-label">Update Weekly Holidy</label>
                    <input required type="text" class="form-control" value="{{$data->weekly_holiday}}" name="weekly_holiday" id="weekly_holiday"><br>

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
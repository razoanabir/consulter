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
        <form action="{{route('store.pricing')}}" method="post" enctype="multipart/form-data" class="card card-body mt-4">
          @csrf
            <h4 class="mb-0">Add New Price Plan</h4>

            <hr class="horizontal dark my-3">
            
            <label for="title" class="form-label">Add Title For The Price Plan</label>
            <input type="text" class="form-control" name="title" id="title"><br>

            <label for="cost" class="form-label">Add Monthely Cost For The Price Plan</label>
            <input type="number" class="form-control" name="cost" id="cost"><br>
            
            <label for="input_1">Business Solutions</label>
              <select class="form-select" name="input_1" id="input_1">
                <option selected>Select Option</option>
                <option value="include">Include</option>
                <option value="exclude">Exclude</option>
              </select><br>

            <label for="input_2">Market Growth Solutions </label>
              <select class="form-select" name="input_2" id="input_2">
                <option selected>Select Option</option>
                <option value="include">Include</option>
                <option value="exclude">Exclude</option>
              </select><br>

              <label for="input_3">Security Management</label>
              <select class="form-select" name="input_3" id="input_3">
                <option selected>Select Option</option>
                <option value="include">Include</option>
                <option value="exclude">Exclude</option>
              </select><br>

              <label for="input_4">Digital Business Solutions</label>
              <select class="form-select" name="input_4" id="input_4">
                <option selected>Select Option</option>
                <option value="include">Include</option>
                <option value="exclude">Exclude</option>
              </select><br>

              <label for="input_5">24/7 System Monitoring</label>
              <select class="form-select" name="input_5" id="input_5">
                <option selected>Select Option</option>
                <option value="include">Include</option>
                <option value="exclude">Exclude</option>
              </select><br>
            

            
            <div class="d-flex justify-content-end mt-4">
              <a href="{{route('admin.dashboard')}}"  class="btn bg-gradient-primary m-0">Cancel</a>
              <button type="submit" class="btn bg-gradient-info m-0 ms-2">Add New Plan</button>
            </div>

          </form>
        </div>
    </div>
@endsection
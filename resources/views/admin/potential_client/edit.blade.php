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
    <form action="{{route('update.potential.client', $data->id)}}" method="post" enctype="multipart/form-data"
        class="card card-body mt-4">
        @csrf
        <h4 class="mb-0">Update Interested Client's Information</h4>
        <hr class="horizontal dark my-3">

        <div class="row">
            <div class="col-md-6">

                <label for="client_name"  class="form-label">Update Client's Name</label>
                <input type="text" required class="form-control" value="{{ $data->client_name }}" name="client_name" id="client_name">

                <label for="email" class="form-label">Update Client's E-mail</label>
                <input type="email" class="form-control" value="{{ $data->email }}" name="email" id="email">

            </div>
            <div class="col-md-6">

                <label for="phone_number" class="form-label">Update Client's Phone Number</label>
                <input type="number" required class="form-control" value="{{ $data->phone_number }}" name="phone_number" id="phone_number">


                <label for="company_name" class="form-label">Update Company's Name</label>
                <input type="text" class="form-control" value="{{ $data->company_name }}" name="company_name" id="company_name">

            </div>
        </div>

        <label for="follow_up_date" class="form-label">Update Follow Up Date To Contact The Client</label>
            <input class="form-control datetimepicker" name="follow_up_date" value="{{ $data->follow_up_date }}" id="follow_up_date" type="text"
                placeholder="Please select start date">

        <div class="form-group">
            <label for="note">Update Note</label>
            <textarea class="form-control" name="note" id="note" rows="3">{{ $data->client_name }}</textarea>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <a href="{{route('admin.dashboard')}}" class="btn bg-gradient-primary m-0">Cancel</a>
            <button type="submit" class="btn bg-gradient-info m-0 ms-2">Update</button>
        </div>
    </form>
</div>
</div>
@endsection
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
    <form action="{{route('store.potential.client')}}" method="post" enctype="multipart/form-data"
        class="card card-body mt-4">
        @csrf
        <h4 class="mb-0">Add Interested Client's Information</h4>
        <hr class="horizontal dark my-3">

        <div class="row">
            <div class="col-md-6">

                <label for="client_name"  class="form-label">Add Client's Name</label>
                <input type="text" required class="form-control" name="client_name" id="client_name">

                <label for="email" class="form-label">Add Client's E-mail</label>
                <input type="email" class="form-control" name="email" id="email">

            </div>
            <div class="col-md-6">

                <label for="phone_number" class="form-label">Add Client's Phone Number</label>
                <input type="number" required class="form-control" name="phone_number" id="phone_number">


                <label for="company_name" class="form-label">Add Company's Name</label>
                <input type="text" class="form-control" name="company_name" id="company_name">

            </div>
        </div>

        <label for="follow_up_date" class="form-label">Add Follow Up Date To Contact The Client</label>
        <input class="form-control" type="datetime-local" name="follow_up_date" id="follow_up_date" required>


        <div class="form-group">
            <label for="note">Add Note</label>
            <textarea class="form-control" name="note" id="note" rows="3"></textarea>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <a href="{{route('admin.dashboard')}}" class="btn bg-gradient-primary m-0">Cancel</a>
            <button type="submit" class="btn bg-gradient-info m-0 ms-2">Save</button>
        </div>
    </form>
</div>
</div>
@endsection
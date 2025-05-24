@extends('layouts.admin')
@section('content')

<div class="container">

    <!-- success message -->
    @if (session('msg'))
    <div class="alert bg-gradient-success alert-dismissible fade show text-white" role="alert">
        {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- Error message -->
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert bg-gradient-warning alert-dismissible fade show text-white" role="alert">
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endforeach
    @endif
    <div class="card card-body mt-4 is-filled">
        <!--the form  is for store the information for project page -->
        <form action="{{ route('store.project') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="mb-0">Add New Project</h4>
            <hr class="horizontal dark my-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="client_name" class="form-label">Client's Name</label>
                    <input type="text" class="form-control" required name="client_name" id="client_name">

                    <label for="address" class="form-label">Client's Address</label>
                    <input type="text" class="form-control" required name="address" id="address">
                </div>
                <div class="col-md-6">
                    <label for="date" class="form-label">Completion Date</label>
                    <input class="form-control datetimepicker" required name="date" id="date" type="text"
                        placeholder="Please select start date">

                    <label for="category_id">Project Category</label>
                    <select class="form-select" required name="category_id" id="category_id">
                        <option selected disabled>Select Option</option>
                        @foreach ($category as $_category)
                        <option value="{{ $_category->id }}">{{ $_category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <label for="title" class="form-label">Project Title</label>
            <input type="text" class="form-control" required name="title" id="title">

            <!-- Primary Image -->
            <label for="image" class="form-label">Main Project Image</label>
            <input class="form-control form-control-lg" required name="image" id="image" type="file">

            <!-- Project Details -->
            <div class="form-group">
                <label for="details">Project Details</label>
                <textarea class="form-control" required name="details" id="details" rows="3"></textarea>
            </div>

            <!-- Experience -->
            <div class="form-group">
                <label for="experience">Experience From This Project</label>
                <textarea class="form-control" name="experience" id="experience" rows="3"></textarea>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{route('admin.dashboard')}}" class="btn bg-gradient-primary m-0">Cancel</a>
                <button type="submit" class="btn bg-gradient-info m-0 ms-2">Add New Blog</button>
            </div>
        </form>

    </div>
</div>
@endsection
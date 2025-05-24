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
        <!--the form  is for update the information for blog page -->
        <form action="{{ route('update.blog',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="mb-0">Update Blog Post</h4>
            <hr class="horizontal dark my-3">

            <label for="image" class="form-label">Update Blog Post's Image</label><br>
            <img height="200px" width="300px" src="{{asset($data->image)}}" alt=""><br><br>
            <input class="form-control form-control-lg" name="image" id="image" type="file">

            <div class="row">
                <div class="col-md-6">
                    <label for="author" class="form-label">Update Author's Name</label>
                    <input type="text" class="form-control" required value="{{$data->author}}" name="author" id="author">
                </div>
                <div class="col-md-6">
                    <label for="category_id">Update Blog Category</label>
                    <select class="form-select" required name="category_id" id="category_id">
                        <option selected value="{{$data->category->id}}">{{$data->category->category_name}}</option>
                        @foreach ($category as $_category)
                        <option value="{{ $_category->id }}">{{ $_category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <label for="title" class="form-label">Update Blog Post's Title</label>
            <input type="text" class="form-control" required value="{{$data->title}}" name="title" id="title">

            <div class="form-group">
                <label for="details">Update Blog Post's Details</label>
                <textarea class="form-control" required name="details" id="details" rows="3">{{$data->details}}</textarea>
            </div>

            <!-- Experience -->
            <div class="form-group">
                <label for="personal_note">Update Author Thought/Note(Optional)</label>
                <textarea class="form-control" name="personal_note" id="personal_note" rows="3">{{$data->personal_note}}</textarea>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{route('admin.dashboard')}}" class="btn bg-gradient-primary m-0">Cancel</a>
                <button type="submit" class="btn bg-gradient-info m-0 ms-2">Update</button>
            </div>
        </form>

    </div>
</div>
@endsection
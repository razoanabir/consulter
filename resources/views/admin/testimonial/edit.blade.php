@extends('layouts.admin')
@section('content')

<div class="container">

  <!-- Success message -->
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

  <!-- Form to update testimonial -->
  <form action="{{route('update.testimonial', $data->id)}}" method="post" enctype="multipart/form-data" class="card card-body mt-4">
    @csrf
    <h4 class="mb-0">Update Client's Review</h4>

    <hr class="horizontal dark my-3">

    <!-- Existing Client Image -->
    <img height="150px" width="200px" src="{{asset($data->image)}}" alt="Client Image"><br>
    <label for="image" class="form-label">Update Client's Image</label>
    <input class="form-control form-control-lg" name="image" id="image" type="file"><br>

    <!-- Client Name -->
    <label for="name" class="form-label">Update Client's Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}"><br>

    <!-- Client Profession -->
    <label for="profession" class="form-label">Update Client's Designation</label>
    <input type="text" class="form-control" name="profession" id="profession" value="{{$data->profession}}"><br>

    <!-- Star Rating -->
    <label for="star">Update Star Out of 5</label>
    <select class="form-select" name="star" id="star">
      <option selected value="{{$data->star}}">{{$data->star}}</option>
      <option value="0.5">0.5</option>
      <option value="1">1</option>
      <option value="1.5">1.5</option>
      <option value="2">2</option>
      <option value="2.5">2.5</option>
      <option value="3">3</option>
      <option value="3.5">3.5</option>
      <option value="4">4</option>
      <option value="4.5">4.5</option>
      <option value="5">5</option>
    </select><br>

    <!-- Review Type Selection -->
    <label for="review_type" class="form-label">Review Type</label>
    <select class="form-select" name="review_type" id="review_type" onchange="toggleReviewFields()">
      <option value="text" {{ $data->review_type == 'text' ? 'selected' : '' }}>Text</option>
      <option value="video" {{ $data->review_type == 'video' ? 'selected' : '' }}>Video</option>
    </select><br>

    <!-- Text Review -->
    <div class="form-group" id="text_review_section" style="display: {{ $data->review ? 'block' : 'none' }};">
      <label for="review">Update Client's Review</label>
      <textarea class="form-control" name="review" id="review" rows="3">{{$data->review}}</textarea>
    </div>

    <!-- Video Review -->
    <div class="form-group" id="video_review_section" style="display: {{ $data->video_url  ? 'block' : 'none' }};">
      <label for="video_url">Client's Video Review (YouTube/Vimeo URL)</label>
      <input type="url" class="form-control" name="video_url" id="video_url" value="{{$data->video_url}}">
    </div>

    <div class="d-flex justify-content-end mt-4">
      <a href="{{route('view.testimonial')}}" class="btn bg-gradient-primary m-0">Cancel</a>
      <button type="submit" class="btn bg-gradient-info m-0 ms-2">Update</button>
    </div>

  </form>
</div>
</div>

<!-- JavaScript to toggle fields based on selection -->
<script>
  function toggleReviewFields() {
    let reviewType = document.getElementById("review_type").value;
    let textReview = document.getElementById("text_review_section");
    let videoReview = document.getElementById("video_review_section");

    if (reviewType === "text") {
      textReview.style.display = "block";
      videoReview.style.display = "none";
    } else {
      textReview.style.display = "none";
      videoReview.style.display = "block";
    }
  }
</script>

@endsection
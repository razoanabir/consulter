@extends('layouts.admin')
@section('content')

<div class="container">
  <!-- Success Message -->
  @if (session('msg'))
  <div class="alert bg-gradient-success alert-dismissible fade show text-white" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <label aria-hidden="true">&times;</label>
    </button>
  </div>
  @endif
  <!-- Error Messages -->
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

  <form action="{{route('store.testimonial')}}" method="post" enctype="multipart/form-data" class="card card-body mt-4">
    @csrf
    <h4 class="mb-0">Add New Review</h4>

    <hr class="horizontal dark my-3">

    <label for="name" class="form-label">Client's Name</label>
    <input type="text" class="form-control" name="name" id="name"><br>

    <label for="profession" class="form-label">Client's Designation</label>
    <input type="text" class="form-control" name="profession" id="profession"><br>

    <label for="star">Select Star Out of 5</label>
    <select class="form-select" name="star" id="star">
      <option selected>Select Option</option>
      <option value="5">5</option>
      <option value="4.5">4.5</option>
      <option value="4">4</option>
      <option value="3.5">3.5</option>
      <option value="3">3</option>
      <option value="2.5">2.5</option>
      <option value="2">2</option>
      <option value="1.5">1.5</option>
      <option value="1">1</option>
      <option value="0.5">0.5</option>
    </select><br>

    <!-- Review Type Selection -->
    <label class="form-label">Review Type</label>
    <div class="mb-3">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="review_type" id="text_review" value="text" checked onclick="toggleReviewType()">
        <label class="form-check-label" for="text_review">Text Review</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="review_type" id="video_review" value="video" onclick="toggleReviewType()">
        <label class="form-check-label" for="video_review">Video Review</label>
      </div>
    </div>

    <!-- Client's Review Text Area -->
    <div class="form-group" id="textReviewDiv">
      <label for="review">Client's Review</label>
      <textarea class="form-control" name="review" id="review" rows="3"></textarea>
    </div>

    <!-- Video URL Input -->
    <div class="form-group" id="videoReviewDiv" style="display: none;">
      <label for="video_url">Client's Video URL</label>
      <input type="text" class="form-control" name="video_url" id="video_url" placeholder="Enter video URL">
    </div>

    <label for="image" class="form-label">Client's Image</label>
    <input class="form-control form-control-lg" name="image" id="image" type="file">

    <div class="d-flex justify-content-end mt-4">
      <a href="{{route('admin.dashboard')}}" class="btn bg-gradient-primary m-0">Cancel</a>
      <button type="submit" class="btn bg-gradient-info m-0 ms-2">Add New Review</button>
    </div>

  </form>
</div>
</div>

<script>
  function toggleReviewType() {
    let textReviewDiv = document.getElementById('textReviewDiv');
    let videoReviewDiv = document.getElementById('videoReviewDiv');
    let textReviewRadio = document.getElementById('text_review');

    if (textReviewRadio.checked) {
      textReviewDiv.style.display = 'block';
      videoReviewDiv.style.display = 'none';
    } else {
      textReviewDiv.style.display = 'none';
      videoReviewDiv.style.display = 'block';
    }
  }
</script>

@endsection
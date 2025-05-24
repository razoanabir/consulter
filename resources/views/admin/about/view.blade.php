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
    <form action="{{route('store.about')}}" method="post" enctype="multipart/form-data"
        class="card card-body mt-4">
        @csrf
        <h4 class="mb-0">Update About Page's Information</h4>

        <hr class="horizontal dark my-3">


        <div class="row">
            <div class="col-md-4 mt-1">
                <label for="image_1" class="form-label">Update About Page's 1st Image</la><br>
                    <img height="115px" width="150px" src="{{asset($data->image_1)}}" alt=""><br><br>
                    <input class="form-control form-control-lg" name="image_1" id="image_1" type="file">
            </div>
            <div class="col-md-4">
                <label for="image_2" class="form-label">Update About Page's 2nd Image</label><br>
                <img height="100px" width="150px" src="{{asset($data->image_2)}}" alt=""><br><br>
                <input class="form-control form-control-lg" name="image_2" id="image_2" type="file">
            </div>
            <div class="col-md-4">
                <label for="video_thumbnail" class="form-label">Update Thumbnail For About Page's Video</label><br>
                <img height="100px" width="150px" src="{{asset($data->video_thumbnail)}}" alt=""><br><br>
                <input class="form-control form-control-lg" name="video_thumbnail" id="video_thumbnail"
                    type="file">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <label for="title" class="form-label">Update About Page's Title</label>
                <input type="text" class="form-control" name="title" value="{{$data->title}}" id="title"><br>

                <label for="video_link" class="form-label">Update About Page's Video Link</label>
                <input type="text" class="form-control" name="video_link" value="{{$data->video_link}}" id="video_link"><br>

            </div>
            <div class="col-md-6">

                <label for="our_experience" class="form-label">Update Time Of Our Experience In Year</label>
                <input type="number" class="form-control" name="our_experience" value="{{$data->our_experience}}" id="our_experience"><br>

                <label for="success_project" class="form-label">Update Our Success Rate On Project In Persentage Out of 100</label>
                <input type="number" class="form-control" name="success_project" value="{{$data->success_project}}" id="success_project"><br>

            </div>
        </div>

        <div class="form-group">
            <label for="details">Update About Page's Details</label>
            <textarea required class="form-control" name="details" id="details" rows="3">{{$data->details}}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="skill_1" class="form-label">Update Skill 1 Title</label>
                <input type="text" class="form-control" name="skill_1" value="{{$data->skill_1}}" id="skill_1"><br>

                <label for="skill_2" class="form-label">Update Skill 2 Title</label>
                <input type="text" class="form-control" name="skill_2" value="{{$data->skill_1}}" id="skill_2"><br>

                <label for="skill_3" class="form-label">Update Skill 3 Title</label>
                <input type="text" class="form-control" name="skill_3" value="{{$data->skill_1}}" id="skill_3"><br>
            </div>
            <div class="col-md-6">
                <div class="row mt-1">
                    <label for="expertice_at_skill_1" class="form-label">Update Skill 1 Expertice Persentage Out of 100</label>
                    <button type="button" id="minus5" class="btn bg-gradient-danger"
                        style="height: 40px; width:20%">-</button>
                    <input type="number" name="expertice_at_skill_1" id="expertice_at_skill_1" class="form-control text-center"
                        style="height: 40px; width:50%" value="{{$data->expertice_at_skill_1}}">
                    <button type="button" id="pluss5" class="btn bg-gradient-primary"
                        style="height: 40px; width:20%">+</button>
                </div>
                <div class="row mt-3">
                    <label for="expertice_at_skill_2" class="form-label">Update Skill 2 Expertice Persentage Out of 100</label>
                    <button type="button" id="minus6" class="btn bg-gradient-danger"
                        style="height: 40px; width:20%">-</button>
                    <input type="number" name="expertice_at_skill_2" id="expertice_at_skill_2" class="form-control text-center"
                        style="height: 40px; width:50%" value="{{$data->expertice_at_skill_2}}">
                    <button type="button" id="pluss6" class="btn bg-gradient-primary"
                        style="height: 40px; width:20%">+</button>
                </div>
                <div class="row  mt-3">                
                    <label for="expertice_at_skill_3" class="form-label">Update Skill 3 Expertice Persentage Out of 100</label>
                    <button type="button" id="minus7" class="btn bg-gradient-danger"
                        style="height: 40px; width:20%">-</button>
                    <input type="number" name="expertice_at_skill_3" id="expertice_at_skill_3" class="form-control text-center"
                        style="height: 40px; width:50%" value="{{$data->expertice_at_skill_3}}">
                    <button type="button" id="pluss7" class="btn bg-gradient-primary"
                        style="height: 40px; width:20%">+</button>
                </div>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-md-3 text-center p-1">
                <label for="successful_project">Successful Project</label><br>
                <img height="70px" src="https://img.icons8.com/?size=100&id=DrtM7SAHfYic&format=png&color=000000"
                    alt="successful_project">

                <div class="row p-2">
                    <button type="button" id="minus1" class="btn bg-gradient-danger"
                        style="height: 40px; width:20%">-</button>
                    <input type="number" name="successful_project" id="successful_project" class="form-control text-center"
                        style="height: 40px; width:50%" value="{{$data->successful_project}}">
                    <button type="button" id="pluss1" class="btn bg-gradient-primary"
                        style="height: 40px; width:20%">+</button>
                </div>
            </div>

            <div class="col-md-3 text-center p-1">
                <label for="expert_consulter">Expert Consulter</label><br>
                <img height="70px" src="https://img.icons8.com/?size=100&id=24884&format=png&color=000000"
                    alt="expert_consulter">

                <div class="row p-2">
                    <button type="button" id="minus2" class="btn bg-gradient-danger"
                        style="height: 40px; width:20%">-</button>
                    <input type="number" name="expert_consulter" id="expert_consulter" class="form-control text-center"
                        style="height: 40px; width:50%" value="{{$data->expert_consulter}}">
                    <button type="button" id="pluss2" class="btn bg-gradient-primary"
                        style="height: 40px; width:20%">+</button>
                </div>
            </div>

            <div class="col-md-3 text-center p-1">
                <label for="cup_of_coffee">Cup of Coffee</label><br>
                <img height="70px" src="https://img.icons8.com/?size=100&id=oCua46ZDg4zk&format=png&color=000000"
                    alt="cup_of_coffee">

                <div class="row p-2">
                    <button type="button" id="minus3" class="btn bg-gradient-danger"
                        style="height: 40px; width:20%">-</button>
                    <input type="number" name="cup_of_coffee" id="cup_of_coffee" class="form-control text-center"
                        style="height: 40px; width:50%" value="{{$data->cup_of_coffee}}">
                    <button type="button" id="pluss3" class="btn bg-gradient-primary"
                        style="height: 40px; width:20%">+</button>
                </div>
            </div>
            <div class="col-md-3 text-center p-1">
                <label for="client_satisfection">Client Satisfection</label><br>
                <img height="70px" src="https://img.icons8.com/?size=100&id=59858&format=png&color=000000"
                    alt="client_satisfection">

                <div class="row p-2">
                    <button type="button" id="minus4" class="btn bg-gradient-danger"
                        style="height: 40px; width:20%">-</button>
                    <input type="number" name="client_satisfection" id="client_satisfection" class="form-control text-center"
                        style="height: 40px; width:50%" value="{{$data->client_satisfection}}">
                    <button type="button" id="pluss4" class="btn bg-gradient-primary"
                        style="height: 40px; width:20%">+</button>
                </div>
            </div>
        </div>



        <div class="d-flex justify-content-end mt-4">
            <a href="{{route('admin.dashboard')}}" class="btn bg-gradient-primary m-0">Cancel</a>
            <button type="submit" class="btn bg-gradient-info m-0 ms-2">Update</button>
        </div>

    </form>
</div>
</div>
<script>
    //1
    document.getElementById("pluss1").addEventListener("click", function () {
        var inputValue = document.getElementById("successful_project");
        inputValue.value = parseInt(inputValue.value) + 1;
    });
    document.getElementById("minus1").addEventListener("click", function () {
        var inputValue = document.getElementById("successful_project");
        inputValue.value = parseInt(inputValue.value) - 1;
    });
    //2
    document.getElementById("pluss2").addEventListener("click", function () {
        var inputValue = document.getElementById("expert_consulter");
        inputValue.value = parseInt(inputValue.value) + 1;
    });
    document.getElementById("minus2").addEventListener("click", function () {
        var inputValue = document.getElementById("expert_consulter");
        inputValue.value = parseInt(inputValue.value) - 1;
    });
    //3
    document.getElementById("pluss3").addEventListener("click", function () {
        var inputValue = document.getElementById("cup_of_coffee");
        inputValue.value = parseInt(inputValue.value) + 1;
    });
    document.getElementById("minus3").addEventListener("click", function () {
        var inputValue = document.getElementById("cup_of_coffee");
        inputValue.value = parseInt(inputValue.value) - 1;
    });
    //4
    document.getElementById("pluss4").addEventListener("click", function () {
        var inputValue = document.getElementById("client_satisfection");
        inputValue.value = parseInt(inputValue.value) + 1;
    });
    document.getElementById("minus4").addEventListener("click", function () {
        var inputValue = document.getElementById("client_satisfection");
        inputValue.value = parseInt(inputValue.value) - 1;
    });    
    //5
    document.getElementById("pluss5").addEventListener("click", function () {
        var inputValue = document.getElementById("expertice_at_skill_1");
        inputValue.value = parseInt(inputValue.value) + 1;
    });
    document.getElementById("minus5").addEventListener("click", function () {
        var inputValue = document.getElementById("expertice_at_skill_1");
        inputValue.value = parseInt(inputValue.value) - 1;
    });
    //6
    document.getElementById("pluss6").addEventListener("click", function () {
        var inputValue = document.getElementById("expertice_at_skill_2");
        inputValue.value = parseInt(inputValue.value) + 1;
    });
    document.getElementById("minus6").addEventListener("click", function () {
        var inputValue = document.getElementById("expertice_at_skill_2");
        inputValue.value = parseInt(inputValue.value) - 1;
    });
    //7
    document.getElementById("pluss7").addEventListener("click", function () {
        var inputValue = document.getElementById("expertice_at_skill_3");
        inputValue.value = parseInt(inputValue.value) + 1;
    });
    document.getElementById("minus7").addEventListener("click", function () {
        var inputValue = document.getElementById("expertice_at_skill_3");
        inputValue.value = parseInt(inputValue.value) - 1;
    });

</script>
@endsection



@extends('layouts.admin')
@section('content')
<div class="container mb-5">
    <div class="row rounded" style="height: 56px; color: #344767; background: white;">

        <!--heading for the page-->
        <div class="col-md-12 mt-2">
            <span class="fs-4">All Team Members</span>
            <a href="{{ route('admin.dashboard') }}" style="float: right;" type="button"
                class="btn bg-gradient-secondary">Dashboard</a>
        </div>

        <div class="col-md-12 mt-2 mb-5">
            <!-- success message -->
            @if (session('msg'))
            <div class="alert bg-gradient-success alert-dismissible fade show text-white" role="alert">
                {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
    </div>

    <!--all team members's information-->
    <div class="row mt-5">
        <!--$data is called from the team model-->
        <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
            <div class="card h-100 mt-5">
                <div class="card-header">
                    <h5 class="mb-0 text-capitalize">Team members</h5>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-group list-group-flush">
                        @foreach ($data as $_data)
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto d-flex align-items-center">
                                    <a href="javascript:;" class="avatar">
                                        <img height="50px" class="border-radius-lg" alt="Image placeholder"
                                            src="{{asset($_data->image)}}">
                                    </a>
                                </div>
                                <div class="col ml-2">
                                    <h6 class="mb-0">
                                        <span>{{$_data->name}}</span>
                                    </h6>
                                    <span>{{$_data->designation}}</span>
                                </div>
                                <div class="col ml-2">
                                    <h6 class="mb-0">
                                        <span>{{$_data->email}}</span>
                                    </h6>
                                    <span>{{$_data->contact_number}}</span>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('edit.team',$_data->slug)}}" class="btn bg-gradient-info">Edit</a>
                                    <a href="{{route('delete.team', $_data->id)}}" class="btn bg-gradient-danger" onclick="return confirm('This data will be deleted permanently')">Delete</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
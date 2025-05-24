@extends('layouts.admin')
@section('content')
    <div class="container mb-5">
        <div class="row rounded" style="height: 56px; color: #344767; background: white;">
            <!--heading for the page-->
            <div class="col-md-12 mt-2">
                <a href="{{ route('admin.dashboard') }}" style="float: right;" type="button" class="btn bg-gradient-secondary">Dashboard</a>
            </div>
        </div>
        <div class="col-md-12 mt-3">
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
        <!--all category's information-->
        <div class="card mt-3">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr class="text-center">
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $_data)
                        <tr class="text-center">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$_data->category_name}}</td>
                            <td>
                            <a href="{{route('edit.category',$_data->slug)}}" class="btn bg-gradient-info">Edit</a>
                            <a href="{{route('delete.category', $_data->id)}}" class="btn bg-gradient-danger" onclick="return confirm('This data will be deleted permanently')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
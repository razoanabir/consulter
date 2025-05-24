@extends('layouts.admin')
@section('content')
<div class="container mb-5">
    <div class="row rounded" style="height: 56px; color: #344767; background: white;">

        <!--heading for the page-->
        <div class="col-md-12 mt-2">
            <span class="fs-4">Client's Review</span>
            <a href="{{ route('admin.dashboard') }}" style="float: right;" type="button"
                class="btn bg-gradient-secondary">Dashboard</a>
        </div>

        <div class="col-md-12 mt-2">
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

    <!--all price plan's information-->
    <div class="row mt-5">
        <!--$data is called from the pricing model-->
        @foreach ($data as $_data)
        <div class="col-md-4 mt-5">
            <div class="card shadow-lg border-0" style="border-radius: 1rem; overflow: hidden;">
                <div class="card-body text-center bg-gradient-warning text-white p-4">
                    <h6 class="text-uppercase fw-bold mb-3">
                        {{ $_data->title }}
                        <img src="assets/img/icon/hand-3.svg" class="img-fluid" alt="" style="width: 24px;">
                    </h6>
                    <div class="price fs-3 fw-bold">
                        ${{ $_data->cost }} <span class="fs-6 text-white-50">/Monthly</span>
                    </div>
                </div>
                <div class="card-body text-start p-4">
                    <ul class="list-unstyled mb-4">

                        <?php 
                            $check_box_1 = $_data->input_1;
                            if($check_box_1 == 'include'){
                                $check_box_1 = 'fa-check-circle text-success';
                            }else{
                                $check_box_1 = 'fa-times-circle text-danger';
                            }
                        ?>
                        <li class="d-flex align-items-center mb-2">
                            <i class="fas {{$check_box_1}} me-2"></i> Business Solutions
                        </li>
                        <?php 
                            $check_box_2 = $_data->input_2;
                            if($check_box_2 == 'include'){
                                $check_box_2 = 'fa-check-circle text-success';
                            }else{
                                $check_box_2 = 'fa-times-circle text-danger';
                            }
                        ?>
                        <li class="d-flex align-items-center mb-2">
                            <i class="fas {{$check_box_2}}  me-2"></i> Market Growth Solutions
                        </li>
                        <?php 
                            $check_box_3 = $_data->input_3;
                            if($check_box_3 == 'include'){
                                $check_box_3 = 'fa-check-circle text-success';
                            }else{
                                $check_box_3 = 'fa-times-circle text-danger';
                            }
                        ?>
                        <li class="d-flex align-items-center mb-2">
                            <i class="fas {{$check_box_3}} me-2"></i> Security Management
                        </li>
                        <?php 
                            $check_box_4 = $_data->input_4;
                            if($check_box_4 == 'include'){
                                $check_box_4 = 'fa-check-circle text-success';
                            }else{
                                $check_box_4 = 'fa-times-circle text-danger';
                            }
                        ?>
                        <li class="d-flex align-items-center mb-2">
                            <i class="fas {{$check_box_4}} me-2"></i> Digital Business Solutions
                        </li>
                        <?php 
                            $check_box_5 = $_data->input_5;
                            if($check_box_5 == 'include'){
                                $check_box_5 = 'fa-check-circle text-success';
                            }else{
                                $check_box_5 = 'fa-times-circle text-danger';
                            }
                        ?>
                        <li class="d-flex align-items-center">
                            <i class="fas {{$check_box_5}} me-2"></i> 24/7 System Monitoring
                        </li>
                    </ul>
                    
                    <a href="{{route('edit.pricing',$_data->slug)}}" class="btn bg-gradient-info">Edit</a>
                    <a href="{{route('delete.pricing', $_data->id)}}" class="btn bg-gradient-danger" onclick="return confirm('This data will be deleted permanently')">Delete</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
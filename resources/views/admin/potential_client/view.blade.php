@extends('layouts.admin')
@section('content')
<div class="container mb-5">
    <div class="row rounded" style="height: 56px; color: #344767; background: white;">

        <!--heading for the page-->
        <div class="col-md-12 mt-2">
            <span class="fs-4">Intrested Clients</span>
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

    <!--all company information members's information-->
    <div class="row mt-5">
        <!--$data is called from the companyInformation model-->
        <div class="row mt-5">
            <div class="col-12 col-md-12 mb-4 mb-md-0">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Client's Name & Company Name</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Contact Number & Email</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Follow Up Date</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $companyInfo = $data->reverse() ?>
                                @foreach ($companyInfo as $_data)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="p-2">
                                                {{ $loop->iteration }} 
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">{{ $_data->client_name }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $_data->company_name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $_data->phone_number }}</p>
                                        <p class="text-xs text-secondary mb-0">{{ $_data->email }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <h6 class="mb-0 text-xs">{{ $_data->follow_up_date }}</h6>
                                    </td>
                                    <td class="align-middle text-center">
                                    <a href="{{route('details.potential.client',$_data->slug)}}" class="text-primary font-weight-bold text-xs">
                                            <img height="25px" src="https://img.icons8.com/?size=100&id=GVNodnA05zIG&format=png&color=7950F2" alt="">
                                        </a>|
                                        <a href="{{route('delete.potential.client',$_data->id)}}" onclick="return confirm('This data will be deleted permanently')" class="text-danger font-weight-bold text-xs">
                                            <img height="25px" src="https://img.icons8.com/?size=100&id=gjhtZ8keOudc&format=png&color=FA5252" alt="">
                                        </a>                                    
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Message
                                        </a>
                                    </td>
                                </tr>                     
                                @endforeach                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
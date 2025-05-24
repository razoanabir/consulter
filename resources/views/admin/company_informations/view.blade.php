@extends('layouts.admin')
@section('content')
<div class="container mb-5">
    <div class="row rounded" style="height: 56px; color: #344767; background: white;">
        <!-- Heading for the page -->
        <div class="col-md-12 mt-2">
            <span class="fs-4">All Company's Information</span>
            <a href="{{ route('admin.dashboard') }}" style="float: right;" type="button"
                class="btn bg-gradient-secondary">Dashboard</a>
        </div>

        <!-- Success message -->
        <div class="col-md-12 mt-2 mb-5">
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

    <!-- All company information -->
    <div class="row mt-5">
        <div class="col-12 col-md-12 mb-4 mb-md-0">
            <div class="card mt-5">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Company Name & Founder</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Founder E-mail & Contact Number</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Registration Date</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Service Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                            <h6 class="mb-0 text-xs">{{ $_data->company_name }}</h6>
                                            <p class="text-xs text-secondary mb-0">{{ $_data->founder_name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $_data->founder_email }}</p>
                                    <p class="text-xs text-secondary mb-0">{{ $_data->founder_phone_number }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <h6 class="mb-0 text-xs">{{ $_data->registration_date }}</h6>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <!-- Dropdown Form for Service Status -->
                                    <form action="{{ route('update.service.status', $_data->id) }}" method="post">
                                        @csrf
                                        <select name="service_status" class="form-select form-select-sm" onchange="this.form.submit()">
                                            <option value="Engaged" {{ $_data->service_status == 'Engaged' ? 'selected' : '' }}>Engaged</option>
                                            <option value="Disengaged" {{ $_data->service_status == 'Disengaged' ? 'selected' : '' }}>Disengaged</option>
                                            <option value="Pending" {{ $_data->service_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="{{ route('details.company.information', $_data->slug) }}" class="text-primary font-weight-bold text-xs">
                                        <img height="25px" src="https://img.icons8.com/?size=100&id=GVNodnA05zIG&format=png&color=7950F2" alt="">
                                    </a> |
                                    <a href="{{ route('delete.company.information', $_data->id) }}" onclick="return confirm('This data will be deleted permanently')" class="text-danger font-weight-bold text-xs">
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
@endsection
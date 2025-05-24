@extends('layouts.admin')
@section('content')
<div class="container mb-5">
    <div class="row rounded" style="height: 56px; color: #344767; background: white;">

        <!--heading for the page-->
        <div class="col-md-12 mt-2">
            <span class="fs-4">Client Details</span>
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
        <div class="container mt-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden premium-card">
                <!-- Card Body -->
                <div class="card-body p-4">
                    <!-- Client Details Section -->
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="detail-card p-3 rounded-3 shadow-sm hover-effect">
                                <label class="form-label text-muted small mb-1">Client Name</label>
                                <p class="fw-bold fs-5">{{ $data->client_name }}</p>
                            </div>
                            <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                                <label class="form-label text-muted small mb-1">Client Email</label>
                                <p class="fw-bold fs-5">{{ $data->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-card p-3 rounded-3 shadow-sm hover-effect">
                                <label class="form-label text-muted small mb-1">Client Phone Number</label>
                                <p class="fw-bold fs-5">{{ $data->phone_number }}</p>
                            </div>
                            <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                                <label class="form-label text-muted small mb-1">Company Name</label>
                                <p class="fw-bold fs-5">{{ $data->company_name }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Follow-Up Date Section -->
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="detail-card p-3 rounded-3 shadow-sm hover-effect">
                                <label class="form-label text-muted small mb-1">Follow-Up Date</label>
                                <p class="fw-bold fs-5">{{ $data->follow_up_date }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Notes Section -->
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="detail-card p-3 rounded-3 shadow-sm hover-effect">
                                <label class="form-label text-muted small mb-1">Notes</label>
                                <p class="fw-bold fs-5">{{ $data->note }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="card-footer text-end bg-white border-0">
                    <a href="{{route('view.potential.client',$data->slug)}}" class="btn bg-gradient-primary">Return</a>
                    <a href="{{route('edit.potential.client',$data->slug)}}" class="btn bg-gradient-info">Edit</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
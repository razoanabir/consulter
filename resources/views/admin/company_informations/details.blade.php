@extends('layouts.admin')
@section('content')
<div class="container mb-5">
    <div class="row rounded" style="height: 56px; color: #344767; background: white;">

        <!--heading for the page-->
        <div class="col-md-12 mt-2">
            <span class="fs-4">Company Details</span>
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
    <div class="container mt-4">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden premium-card">
        <div class="card-body p-4">
            <!-- Company Details Section -->
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="detail-card p-3 rounded-3 shadow-sm hover-effect">
                        <label class="form-label text-muted small mb-1">Company Name</label>
                        <p class="fw-bold fs-5">{{ $data->company_name }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">Founder Name</label>
                        <p class="fw-bold fs-5">{{ $data->founder_name }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">Founder Phone</label>
                        <p class="fw-bold fs-5">{{ $data->founder_phone_number }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">Founder Email</label>
                        <p class="fw-bold fs-5">{{ $data->founder_email }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-card p-3 rounded-3 shadow-sm hover-effect">
                        <label class="form-label text-muted small mb-1">Company Address</label>
                        <p class="fw-bold fs-5">{{ $data->company_address }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">License Number</label>
                        <p class="fw-bold fs-5">{{ $data->company_license_number }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">TIN Number</label>
                        <p class="fw-bold fs-5">{{ $data->tin_number }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">BIN Number</label>
                        <p class="fw-bold fs-5">{{ $data->bin_number }}</p>
                    </div>
                </div>
            </div>

            <!-- Shareholders Section -->
            <h6 class="fw-bold mb-4 display-6 mt-2">Shareholders</h6>
            <div class="table-responsive">
                <table class="table table-hover table-striped rounded-3 overflow-hidden premium-table">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data->shareholders as $shareholder)
                        <tr>
                            <td>{{ $shareholder->share_holder_name }}</td>
                            <td>{{ $shareholder->share_holder_position }}</td>
                            <td>{{ $shareholder->share_holder_phone_number }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Additional Details Section -->
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="detail-card p-3 rounded-3 shadow-sm hover-effect">
                        <label class="form-label text-muted small mb-1">Registration Date</label>
                        <p class="fw-bold fs-5">{{ $data->registration_date }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">Trade License Number</label>
                        <p class="fw-bold fs-5">{{ $data->trade_license_number }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">Trade License Expiry</label>
                        <p class="fw-bold fs-5">{{ $data->trade_license_expiration_date }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-card p-3 rounded-3 shadow-sm hover-effect">
                        <label class="form-label text-muted small mb-1">Trade License Registration Date</label>
                        <p class="fw-bold fs-5">{{ $data->trade_license_registration_date }}</p>
                    </div>
                    <div class="detail-card p-3 rounded-3 shadow-sm mt-3 hover-effect">
                        <label class="form-label text-muted small mb-1">Service Status</label>
                        <p><span class="badge bg-success fs-6">{{ $data->service_status }}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end bg-white border-0">
            <a href="{{route('view.company.information',$data->slug)}}" class="btn bg-gradient-primary">Return</a>
            <a href="{{route('edit.company.information',$data->slug)}}" class="btn bg-gradient-info">Edit</a>
        </div>
    </div>
</div>
</div>
@endsection
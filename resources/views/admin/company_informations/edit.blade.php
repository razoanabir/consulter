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

    <form action="{{ route('update.company.information', $data->id) }}" method="post" enctype="multipart/form-data"
        class="card card-body mt-4">
        @csrf
        <h4 class="mb-0">Edit Company Information</h4>
        <hr class="horizontal dark my-3">

        <div class="row">
            <div class="col-md-6">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" name="company_name" id="company_name" 
                    value="{{ $data->company_name }}" required>

                <label for="founder_phone_number" class="form-label">Founder Phone Number</label>
                <input type="number" class="form-control" name="founder_phone_number" id="founder_phone_number" 
                    value="{{ $data->founder_phone_number }}" required>
            </div>

            <div class="col-md-6">
                <label for="founder_name" class="form-label">Founder Name</label>
                <input type="text" class="form-control" name="founder_name" id="founder_name" 
                    value="{{ $data->founder_name }}" required>

                <label for="founder_email" class="form-label">Founder Email</label>
                <input type="email" class="form-control" name="founder_email" id="founder_email" 
                    value="{{ $data->founder_email }}" required>
            </div>
        </div>

        <br>
        <label>Company's Shareholders        
        <a class="btn bg-gradient-success mt-3 ml-2" id="add-shareholder">Add Shareholder</a>
        </label>

        <table id="shareholders-table" >
            <tbody>
                @if ($data->shareholders->count() > 0)
                @foreach ($data->shareholders as $index => $shareholder)
                <tr id="row-{{ $index }}">
                    <td>
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="inputs[{{ $index }}][share_holder_name]" 
                            value="{{ $shareholder->share_holder_name }}" required>
                    </td>
                    <td>
                        <label class="form-label">Position</label>
                        <input type="text" class="form-control" name="inputs[{{ $index }}][share_holder_position]" 
                            value="{{ $shareholder->share_holder_position }}" required>
                    </td>
                    <td>
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="inputs[{{ $index }}][share_holder_phone_number]" 
                            value="{{ $shareholder->share_holder_phone_number }}" required>
                    </td>
                    <td>
                        <button type="button" class="btn bg-gradient-danger mt-5 remove-row" data-index="{{$index}}">Remove</button>
                    </td>
                </tr>
                @endforeach
                @else
                <tr id="no-shareholder">
                    <td colspan="4">No shareholders listed.</td>
                </tr>
                @endif
            </tbody>
        </table>
        <div class="row mt-3">
            <div class="col-md-6">
                <label for="company_address" class="form-label">Company Address</label>
                <input type="text" class="form-control" name="company_address" id="company_address" 
                    value="{{ $data->company_address }}" required>

                <label for="company_license_number" class="form-label">License Number</label>
                <input type="text" class="form-control" name="company_license_number" id="company_license_number" 
                    value="{{ $data->company_license_number }}" required>

                <label for="trade_license_registration_date" class="form-label">Trade License Registration Date</label>
                <input type="date" class="form-control" name="trade_license_registration_date" id="trade_license_registration_date" 
                    value="{{ $data->trade_license_registration_date }}" required>

                <label for="tin_number" class="form-label">TIN Number</label>
                <input type="text" class="form-control" name="tin_number" id="tin_number" 
                    value="{{ $data->tin_number }}" required>
            </div>

            <div class="col-md-6">
                <label for="registration_date" class="form-label">Registration Date</label>
                <input type="date" class="form-control" name="registration_date" id="registration_date" 
                    value="{{ $data->registration_date }}" required>

                <label for="trade_license_number" class="form-label">Trade License Number</label>
                <input type="text" class="form-control" name="trade_license_number" id="trade_license_number" 
                    value="{{ $data->trade_license_number }}" required>

                <label for="trade_license_expiration_date" class="form-label">Trade License Expiration Date</label>
                <input type="date" class="form-control" name="trade_license_expiration_date" id="trade_license_expiration_date" 
                    value="{{ $data->trade_license_expiration_date }}" required>

                <label for="bin_number" class="form-label">BIN Number</label>
                <input type="text" class="form-control" name="bin_number" id="bin_number" 
                    value="{{ $data->bin_number }}" required>
            </div>
        </div>
        
        <label for="service_status" class="form-label">Service Status</label>
        <select class="form-select" required name="service_status" id="service_status">
            <option selected value="{{ $data->service_status }}">{{ $data->service_status }}</option>
            <option value="Pending ">Pending</option>
            <option value="Engaged ">Engaged</option>
            <option value="Disengaged ">Disengaged</option>
        </select>

        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('admin.dashboard') }}" class="btn bg-gradient-primary m-0">Cancel</a>
            <button type="submit" class="btn bg-gradient-info m-0 ms-2">Update</button>
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let index = {{ $data->shareholders->count() }};

    // Add new shareholder row
    $('#add-shareholder').click(function () {
        index++;
        let row = `
        <tr id="row-${index}">
            <td>
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="inputs[${index}][share_holder_name]" required>
            </td>
            <td>
                <label class="form-label">Position</label>
                <input type="text" class="form-control" name="inputs[${index}][share_holder_position]" required>
            </td>
            <td>
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="inputs[${index}][share_holder_phone_number]" required>
            </td>
            <td><button type="button" class="btn bg-gradient-danger remove-row mt-5"
                    data-index="${index}">Remove</button></td>
        </tr>`;
        $('#shareholders-table tbody').append(row);
    });

    // Remove shareholder row
    $(document).on('click', '.remove-row', function () {
        let rowId = $(this).data('index');
        $('#row-' + rowId).remove();
    });
</script>

@endsection

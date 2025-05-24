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
    <form action="{{route('store.company.information')}}" method="post" enctype="multipart/form-data"
        class="card card-body mt-4">
        @csrf
        <h4 class="mb-0">Add New Company Information</h4>
        <hr class="horizontal dark my-3">

        <div class="row">
            <div class="col-md-6">

                <label for="company_name" class="form-label">Add Company's Name</label>
                <input type="text" class="form-control" name="company_name" id="company_name">

                <label for="founder_phone_number" class="form-label">Add Company's Founder Phone Number</label>
                <input type="number" class="form-control" name="founder_phone_number" id="founder_phone_number">

            </div>
            <div class="col-md-6">

                <label for="founder_name" class="form-label">Add Company's Founder Name</label>
                <input type="text" class="form-control" name="founder_name" id="founder_name">

                <label for="founder_email" class="form-label">Add Company's Founder E-mail</label>
                <input type="email" class="form-control" name="founder_email" id="founder_email">

            </div>
        </div><br>
        <table id="table">
            <tr>
              <label>Company's Other Share Holders</label>
                <td>
                    <label for="share_holder_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="inputs[0][share_holder_name]"
                        id="share_holder_name">
                </td>
                <td>
                    <label for="share_holder_position" class="form-label">Position/Designation</label>
                    <input type="text" class="form-control" name="inputs[0][share_holder_position]"
                        id="share_holder_position">
                </td>
                <td>
                    <label for="share_holder_phone_number" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="inputs[0][share_holder_phone_number]"
                        id="share_holder_phone_number">
                </td>
                <td>
                    <a class="btn bg-gradient-success mt-5 text-center" id="add">Add More</a>
                </td>
            </tr>
        </table>
        <div class="row mt-3">
            <div class="col-md-6">

                <label for="company_address" class="form-label">Add Company's Address</label>
                <input type="text" class="form-control" name="company_address" id="company_address">

                <label for="company_license_number" class="form-label">Add Company's License Number</label>
                <input type="text" class="form-control" name="company_license_number" id="company_license_number">

                <label for="trade_license_registration_date" class="form-label">Add Company's Trade License Registration Date</label>
                <input class="form-control datetimepicker" required name="trade_license_registration_date" id="trade_license_registration_date" type="text"
                    placeholder="Please select start date">

                <label for="tin_number" class="form-label">Add Company's Tin Number</label>
                <input type="text" class="form-control" name="tin_number" id="tin_number">

            </div>
            <div class="col-md-6">

                <label for="registration_date" class="form-label">Add Company's Registration Date</label>
                <input class="form-control datetimepicker" required name="registration_date" id="registration_date" type="text"
                    placeholder="Please select start date">

                <label for="trade_license_number" class="form-label">Add Company's Trade License Number</label>
                <input type="text" class="form-control" name="trade_license_number" id="trade_license_number">

                <label for="trade_license_expiration_date" class="form-label">Add Company's Trade License Expiration Date</label>
                <input class="form-control datetimepicker" required name="trade_license_expiration_date" id="trade_license_expiration_date" type="text"
                    placeholder="Please select start date">

                <label for="bin_number" class="form-label">Add Company's Bin Number</label>
                <input type="text" class="form-control" name="bin_number" id="bin_number">

            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <a href="{{route('admin.dashboard')}}" class="btn bg-gradient-primary m-0">Cancel</a>
            <button type="submit" class="btn bg-gradient-info m-0 ms-2">Save</button>
        </div>

    </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var i = 0;

    $('#add').click(function () {
        i++;
        $('#table').append(
            `
      <tr>
          <td>
              <label for="share_holder_name" class="form-label">Name</label>
              <input type="text" class="form-control" name="inputs[${i}][share_holder_name]" id="share_holder_name">
          </td>
          <td>
              <label for="share_holder_position" class="form-label">Position/Designation</label>
              <input type="text" class="form-control" name="inputs[${i}][share_holder_position]"
                  id="share_holder_position">
          </td>
          <td>
              <label for="share_holder_phone_number" class="form-label">Phone Number</label>
              <input type="number" class="form-control" name="inputs[${i}][share_holder_phone_number]"
                  id="share_holder_phone_number">
          </td>
          <td><a class="btn bg-gradient-danger mt-5 remove">Remove</a>
          </td>
      </tr>
      `
        );
    });

    // Remove row when clicking "Remove"
    $(document).on('click', '.remove', function () {
        $(this).closest('tr').remove();
    });
</script>

@endsection
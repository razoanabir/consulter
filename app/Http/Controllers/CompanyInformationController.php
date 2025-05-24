<?php

namespace App\Http\Controllers;

use App\Models\CompanyInformation;
use App\Models\CompanyShareholder;
use App\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyInformationController extends Controller
{

//----------------------------------view-data----------------------------------------
public function view()
    {
        $dashboard_data = LandingPage::first();
        $data = CompanyInformation::get();
        return view('admin.company_informations.view', compact('dashboard_data','data'));
    }
//----------------------------------add-data-----------------------------------------
public function add()
    {
        $dashboard_data = LandingPage::first();
        return view('admin.company_informations.add',compact('dashboard_data'));
    }
//----------------------------------edit-data-----------------------------------------
public function edit($slug)
    {
        $dashboard_data = LandingPage::first();
        $data = CompanyInformation::where('slug', $slug)->firstOrFail();
        return view('admin.company_informations.edit', compact('dashboard_data','data'));
    }
//----------------------------------details-data-----------------------------------------
public function details($slug)
{
    $dashboard_data = LandingPage::first();
    $data = CompanyInformation::where('slug', $slug)->firstOrFail();
    return view('admin.company_informations.details', compact('dashboard_data','data'));
}
//----------------------------------service-status-data-----------------------------------------
public function service_status(Request $request, $id)
{
    $company = CompanyInformation::findOrFail($id);
    $company->service_status = $request->service_status;
    $company->save();

    return redirect()->back()->with('msg', 'Service status updated successfully!');
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{
    // Validation
    $request->validate([
        'company_name'                   => 'required|string',
        'founder_name'                   => 'required|string',
        'founder_phone_number'           => 'required|string',
        'company_address'                => 'required|string',
        'registration_date'              => 'required|string',
        'company_license_number'         => 'required|string',
        'trade_license_number'           => 'required|string',
        'trade_license_registration_date'=> 'required|string',
        'trade_license_expiration_date'  => 'required|string',
    ]);

    // Create company
    $company = CompanyInformation::create([
        'company_name'                   => $request->company_name,
        'founder_name'                   => $request->founder_name,
        'founder_phone_number'           => $request->founder_phone_number,
        'founder_email'                  => $request->founder_email,
        'company_address'                => $request->company_address,
        'registration_date'              => $request->registration_date,
        'company_license_number'         => $request->company_license_number,
        'trade_license_number'           => $request->trade_license_number,
        'trade_license_registration_date'=> $request->trade_license_registration_date,
        'trade_license_expiration_date'  => $request->trade_license_expiration_date,
        'tin_number'                     => $request->tin_number,
        'bin_number'                     => $request->bin_number,
        'service_status'                 => 'Pending',
        'slug'                           => Str::slug(title: $request->company_name) . '-' . Str::random(8),
    ]);

    // Store shareholders (if provided)
    if ($request->filled('inputs')) {
        foreach ($request->inputs as $_data) {
            $company->shareholders()->create([
                'company_id'                => $company->id,
                'share_holder_name'         => $_data['share_holder_name'],
                'share_holder_position'     => $_data['share_holder_position'],
                'share_holder_phone_number' => $_data['share_holder_phone_number'],
            ]);
        }
    }

    return back()->with('msg', 'Data has been added successfully');
}

//----------------------------------------update-data-------------------------------------
public function update(Request $request, $id)
{
    //validation-field-to-update-date
    $request->validate(
        [
            'company_name'                   => 'required|string',
            'founder_name'                   => 'required|string',
            'founder_phone_number'           => 'required|string',
            'company_address'                => 'required|string',
            'registration_date'              => 'required|string',
            'company_license_number'         => 'required|string',
            'trade_license_number'           => 'required|string',
            'trade_license_registration_date'=> 'required|string',
            'trade_license_expiration_date'  => 'required|string',  
        ]
    );

// Find the existing company record
$company = CompanyInformation::findOrFail($id);
    
// Update company details
$company->update([
    'company_name' => $request->company_name,
    'founder_name' => $request->founder_name,
    'founder_phone_number' => $request->founder_phone_number,
    'founder_email' => $request->founder_email,
    'company_address' => $request->company_address,
    'company_license_number' => $request->company_license_number,
    'trade_license_registration_date' => $request->trade_license_registration_date,
    'tin_number' => $request->tin_number,
    'registration_date' => $request->registration_date,
    'trade_license_number' => $request->trade_license_number,
    'trade_license_expiration_date' => $request->trade_license_expiration_date,
    'bin_number' => $request->bin_number,
    'service_status' => $request->service_status,
    'slug'                           => Str::slug(title: $request->company_name) . '-' . Str::random(8),

]);

// Update shareholders (create, update, delete)
$existingShareholderIds = $company->shareholders->pluck('id')->toArray();

if ($request->has('inputs')) {
    $newShareholderIds = [];

    foreach ($request->inputs as $input) {
        if (!empty($input['share_holder_name'])) {
            // Check if shareholder exists
            if (!empty($input['id']) && in_array($input['id'], $existingShareholderIds)) {
                $shareholder = CompanyShareholder::find($input['id']);
                $shareholder->update([
                    'share_holder_name' => $input['share_holder_name'],
                    'share_holder_position' => $input['share_holder_position'],
                    'share_holder_phone_number' => $input['share_holder_phone_number'],
                ]);
                $newShareholderIds[] = $shareholder->id;
            } else {
                // Create new shareholder
                $newShareholder = $company->shareholders()->create([
                    'share_holder_name' => $input['share_holder_name'],
                    'share_holder_position' => $input['share_holder_position'],
                    'share_holder_phone_number' => $input['share_holder_phone_number'],
                ]);
                $newShareholderIds[] = $newShareholder->id;
            }
        }
    }

    // Delete removed shareholders
    $deletedShareholders = array_diff($existingShareholderIds, $newShareholderIds);
    CompanyShareholder::whereIn('id', $deletedShareholders)->delete();
} else {
    // If no shareholders left, delete all
    $company->shareholders()->delete();
}

    return redirect()->route('view.company.information')->with('msg', "Data has been updated successfully");
}
//------------------------------------------delete-data------------------------------------------------------
public function delete($id)
{
    $data = CompanyInformation::findOrFail($id);
    $data->shareholders()->delete();

    $data->delete();
    return back()->with('msg', "Data has been deleted successfully");
}
}

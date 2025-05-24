<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
//----------------------------------view-data----------------------------------------
public function view()
{
    $dashboard_data = LandingPage::first();
    $data = PersonalInformation::first();
    return view('admin.personalInformation.view', compact('dashboard_data','data'));
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{
    //validation-field-to-save-date
    $request->validate(
        [
        'facebook_link'      => 'required|string',
        'instagram_link'     => 'required|string',
        'twitter_link'       => 'required|string',
        'linked_in_link'     => 'required|string',
        'contact_number'     => 'required|string',
        'email'              => 'required|string',
        'address'            => 'required|string',
        'google_map_location'=> 'required|string',
        'working_time'       => 'required|string',
        'weekly_holiday'      => 'required|string',
    
    ]);

    //importing-new-data
    $data = PersonalInformation::first();
    $data->fill($request->only([
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linked_in_link',
        'contact_number',
        'email',
        'address',
        'google_map_location',
        'working_time',
        'weekly_holiday',
    ]));
    $data->save();

    return back()->with('msg', 'Data has been added successfully');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\PotentialClient;
use App\Notifications\FollowUpReminder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;

class PotentialClientController extends Controller
{
    
//----------------------------------view-data----------------------------------------
public function view()
{
    $dashboard_data = LandingPage::first();
    $data = PotentialClient::get();
    $notifications = auth()->user()->unreadNotifications;

    return view('admin.potential_client.view', compact('notifications','dashboard_data','data'));
}
//----------------------------------add-data-----------------------------------------
public function add()
{
    $dashboard_data = LandingPage::first();
    $notifications = auth()->user()->unreadNotifications;
    return view('admin.potential_client.add',compact('notifications','dashboard_data'));
}
//----------------------------------edit-data-----------------------------------------
public function edit($slug)
{
    $dashboard_data = LandingPage::first();
    $notifications = auth()->user()->unreadNotifications;
    $data = PotentialClient::where('slug', $slug)->firstOrFail();
    return view('admin.potential_client.edit', compact('notifications','dashboard_data','data'));
}
//----------------------------------details-data-----------------------------------------
public function details($slug)
{
    $dashboard_data = LandingPage::first();
    $notifications = auth()->user()->unreadNotifications;
    $data = PotentialClient::where('slug', $slug)->firstOrFail();
    return view('admin.potential_client.details', compact('notifications','dashboard_data','data'));
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{
    // Validation
    $request->validate([
        'client_name' => 'required|string',
        'phone_number'=> 'required|string'

    ]);
    //store data
    $data = new PotentialClient();
    $data->fill($request->only([
        'client_name',
        'phone_number',
        'email',
        'company_name',
        'follow_up_date',
        'note',
    ]));
    $data->slug = Str::slug($request->client_name).Str::random(8);
    $data->save();

    // Schedule notification
    $followUpDate = Carbon::parse($data->follow_up_date);


    auth()->user()->notify((new FollowUpReminder($data))->delay($followUpDate)->onQueue('default'));

    return back()->with('msg', 'Data has been added successfully');
}

//----------------------------------------update-data-------------------------------------
public function update(Request $request, $id)
{


        // Validation
        $request->validate([
            'client_name' => 'required|string',
            'phone_number'=> 'required|string'
    
        ]);
        //update data
        $data = PotentialClient::findOrFail($id);
        $data->fill($request->only([
            'client_name',
            'phone_number',
            'email',
            'company_name',
            'follow_up_date',
            'note',
        ]));
        $data->slug = Str::slug($request->client_name).Str::random(8);
    
        $data->save();
    
    return redirect()->route('view.potential.client')->with('msg', "Data has been updated successfully");
}
//------------------------------------------delete-data------------------------------------------------------
public function delete($id)
{
    $data = PotentialClient::findOrFail($id);

    $data->delete();
    return back()->with('msg', "Data has been deleted successfully");
}
}
<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PricingController extends Controller
{

//----------------------------------view-data----------------------------------------
public function view()
    {
        $dashboard_data = LandingPage::first();
        $data = Pricing::get();
        return view('admin.pricing.view', compact('dashboard_data','data'));
    }
//----------------------------------add-data-----------------------------------------
public function add()
    {
        $dashboard_data = LandingPage::first();
        return view('admin.pricing.add',compact('dashboard_data'));
    }
//----------------------------------edit-data-----------------------------------------
public function edit($slug)
    {
        $dashboard_data = LandingPage::first();
        $data = Pricing::where('slug', $slug)->firstOrFail();
        return view('admin.pricing.edit', compact('dashboard_data','data'));
    }
//----------------------------------store-data----------------------------------------
public function store(Request $request)
    {
        //validation-field-to-save-date
        $request->validate(
            [
            'title'  => 'required|string',
            'cost'   => 'required|string',
            'input_1'=> 'required|string',
            'input_2'=> 'required|string',            
            'input_3'=> 'required|string',
            'input_4'=> 'required|string',
            'input_5'=> 'required|string',
  
        ]);
        
        //importing-new-data
        $data = new Pricing();
        $data->fill($request->only([
            'title',
            'cost',
            'input_1',
            'input_2',
            'input_3',
            'input_4',
            'input_5',    
        ]));
        $data->slug = Str::slug($request->title) . '-' . Str::random(8);
        $data->save();

        return back()->with('msg', 'Data has been added successfully');
    }
//----------------------------------------update-data-------------------------------------
public function update(Request $request, $id)
{
    //validation-field-to-update-date
    $request->validate(
        [
            'title'  => 'required|string',
            'cost'   => 'required|string',
            'input_1'=> 'required|string',
            'input_2'=> 'required|string',            
            'input_3'=> 'required|string',
            'input_4'=> 'required|string',
            'input_5'=> 'required|string',
        ]
    );

    //updating-existing-data 
    $PricingData = Pricing::findOrFail($id);
    $data = $PricingData;
    $data->fill($request->only([
        'title',
        'cost',
        'input_1',
        'input_2',
        'input_3',
        'input_4',
        'input_5',   
    ]));
    $data->slug = Str::slug($request->title) . '-' . Str::random(8);
    $data->save();

    return redirect()->route('view.pricing')->with('msg', "Data has been updated successfully");
}
//------------------------------------------delete-data------------------------------------------------------
public function delete($id)
{
    $data = Pricing::findOrFail($id);
    // Get the existing image path
    $imagePath = $data->image;
    // Check if the image file exists
    if ($imagePath && file_exists(public_path($imagePath))) {
    // Delete the image file
        unlink(public_path($imagePath));
    }
    // Delete the record from the database
    $data->delete();
    return back()->with('msg', "Data has been deleted successfully");
}
}

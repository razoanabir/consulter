<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
//---------------------------method-for-image-upload//update//delete-------------------------
protected function updateImage(Request $request, LandingPage $data, $image)
{

    if ($request->hasFile($image)) {
        // Delete the existing file if it exists
        $existingFilePath = $data->{$image};

        if ($existingFilePath && file_exists(public_path($existingFilePath))) {
            unlink(public_path($existingFilePath));
        }

        // Get the uploaded file
        $file = $request->file($image);
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Move the file to the public/option directory
        $file->move(public_path('uploads'), $fileName);

        // Update the image path in the database
        $data->{$image} = 'uploads/' . $fileName;
    }
}
//----------------------------------view-data----------------------------------------
public function view()
{
    $dashboard_data = LandingPage::first();
    $data = LandingPage::first();
    return view('admin.landingPage.view', compact('dashboard_data','data'));
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{
    //validation-field-to-save-date
    $request->validate(
        [
        'title'        => 'required|string',
        'details'      => 'required|string',
        'website_title'=> 'required|string',    
    ]);

    //importing-new-data
    $data = LandingPage::first();
    $data->fill($request->only([
        'title',
        'details',
        'website_title',
        'website_icon',
    ]));

    $this->updateImage($request, $data, 'logo');
    $this->updateImage($request, $data, 'website_icon');
    $data->save();

    return back()->with('msg', 'Data has been added successfully');
}
}

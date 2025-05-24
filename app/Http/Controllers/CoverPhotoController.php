<?php

namespace App\Http\Controllers;

use App\Models\CoverPhoto;
use App\Models\LandingPage;
use Illuminate\Http\Request;

class CoverPhotoController extends Controller
{
//---------------------------method-for-image-upload//update//delete-------------------------
protected function updateImage(Request $request, CoverPhoto $data, $image)
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
    //$dashboard_data = Home::first();
    $data = CoverPhoto::first();
    $dashboard_data = LandingPage::first();

    return view('admin.coverPhoto.view', compact('dashboard_data','data'));
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{

    //importing-new-data
    $data = CoverPhoto::first();
    $this->updateImage($request, $data, 'landing_page');
    $this->updateImage($request, $data, 'service_page');
    $this->updateImage($request, $data, 'about_page');    
    $this->updateImage($request, $data, 'pricing_page');
    $this->updateImage($request, $data, 'team_page');
    $this->updateImage($request, $data, 'project_page');
    $this->updateImage($request, $data, 'blog_page');
    $this->updateImage($request, $data, 'contact_page');
    $data->save();

    return back()->with('msg', 'Data has been added successfully');
}
}

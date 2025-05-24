<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\LandingPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    
//---------------------------method-for-image-upload//update//delete-------------------------
protected function updateImage(Request $request, About $data, $image)
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
    $data = About::first();
    $dashboard_data = LandingPage::first();

    return view('admin.about.view', compact('dashboard_data','data'));
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{
    //validation-field-to-save-date
    $request->validate(
        [
        'title'                 => 'required|string',
        'details'               => 'required|string',
        'skill_1'               => 'required|string',
        'skill_2'               => 'required|string',
        'skill_3'               => 'required|string',
        'expertice_at_skill_1'  => 'required|string',
        'expertice_at_skill_2'  => 'required|string',
        'expertice_at_skill_3'  => 'required|string',
        'video_link'            => 'required|string',
        'successful_project'    => 'required|string',
        'expert_consulter'      => 'required|string',
        'cup_of_coffee'         => 'required|string',
        'client_satisfection'   => 'required|string',
        'success_project'       => 'required|string',
        'our_experience'        => 'required|string',
    
    ]);

    //importing-new-data
    $data = About::first();
    $data->fill($request->only([
        'title',
        'details',
        'skill_1',
        'skill_2',
        'skill_3',
        'expertice_at_skill_1',
        'expertice_at_skill_2',
        'expertice_at_skill_3',
        'video_link',
        'successful_project',
        'expert_consulter',
        'cup_of_coffee',
        'client_satisfection',
        'success_project',
        'our_experience',
    ]));

    $this->updateImage($request, $data, 'image_1');
    $this->updateImage($request, $data, 'image_2');
    $this->updateImage($request, $data, 'video_thumbnail');
    $data->save();

    return back()->with('msg', 'Data has been added successfully');
}

}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LandingPage;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
//---------------------------method-for-image-upload//update//delete-------------------------
protected function updateImage(Request $request, Project $data, $image)
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
//---------------------------method-for-multiple-image-upload//update//delete-------------------------
protected function updateMultipleImages(Request $request, Project $data, $images)
{
    if ($request->hasFile($images)) {
        // Decode existing images (if any) from JSON stored in the database
        $existingImages = json_decode($data->{$images}, true) ?? [];

        // Delete old images if needed
        foreach ($existingImages as $existingFilePath) {
            $fullPath = public_path($existingFilePath);
            if (file_exists($fullPath) && is_file($fullPath)) {
                unlink($fullPath);
            }
        }

        // Process new uploaded files
        $newImagePaths = [];
        foreach ($request->file($images) as $file) {
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
            $newImagePaths[] = 'uploads/' . $fileName;
        }

        // Save new image paths as JSON in the database
        $data->{$images} = json_encode($newImagePaths);
    }
}
//----------------------------------view-data----------------------------------------
public function view()
{
    $dashboard_data = LandingPage::first();
    $data = Project::get();
    return view('admin.project.view', compact('dashboard_data','data'));
}
//----------------------------------add-data-----------------------------------------
public function add()
{
    $category = Category::get();
    $dashboard_data = LandingPage::first();
    return view('admin.project.add', compact('dashboard_data','category'));
}
//----------------------------------edit-data-----------------------------------------
public function edit($slug)
{
    $dashboard_data = LandingPage::first();
    $category = Category::get();
    $data = Project::where('slug', $slug)->firstOrFail();
    return view('admin.project.edit', compact('dashboard_data','data','category'));
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{
    $request->validate([
        'title'      => 'required|string',
        'details'    => 'required|string',        
        'client_name'=> 'required|string',
        'address'    => 'required|string',
        'date'       => 'required|string',
        'category_id'=> 'required|string',        
        'image'      => 'required|image|mimes:jpg,png,jpeg,gif,bmp,svg,webp',
        'images'     => 'nullable|string' // Store JSON data
    ]);

    $data = new Project();
    $data->fill($request->only([
        'client_name',
        'address',
        'date',
        'category_id',
        'title',
        'details',
        'experience',
    ]));
    $data->slug = Str::slug($request->title) . '-' . Str::random(8);

    // Save multiple images JSON
    $data->images = $request->images;

    // Handle main image separately
    $this->updateImage($request, $data, 'image');

    $data->save();

    return back()->with('msg', 'Project added successfully');
}

//
public function uploadImages(Request $request)
{
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);

        return response()->json([
            'filePath' => 'uploads/' . $fileName
        ]);
    }
    return response()->json(['error' => 'No file uploaded'], 400);
}
//----------------------------------------update-data-------------------------------------
public function update(Request $request, $id)
{
    
    //validation-field-to-update-date
    $request->validate(
        [
            'title'      => 'required|string',
            'details'    => 'required|string',        
            'client_name'=> 'required|string',
            'address'    => 'required|string',
            'date'       => 'required|string',
            'category_id'=> 'required|string',
        ]
    );
    //updating-existing-data 
    $ProjectData = Project::findOrFail($id);
    $data = $ProjectData;
    $data->fill($request->only([
        'client_name',
        'address',
        'date',
        'category_id',
        'title',
        'details',
        'experience',
    ]));
    $data->slug = Str::slug(title: $request->title) . '-' . Str::random(8);
    $this->updateImage($request, $data, 'image');
    $data->save();

    return redirect()->route('view.project')->with('msg', "Data has been updated successfully");
}
//------------------------------------------delete-data------------------------------------------------------
public function delete($id)
{
    $data = Project::findOrFail($id);
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

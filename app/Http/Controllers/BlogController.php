<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BlogController extends Controller
{
//---------------------------method-for-image-upload//update//delete-------------------------
protected function updateImage(Request $request, Blog $data, $image)
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
    $data = Blog::get();
    return view('admin.blog.view', compact('dashboard_data','data'));
}
//----------------------------------add-data-----------------------------------------
public function add()
{
    $category = Category::get();
    $dashboard_data = LandingPage::first();
    return view('admin.blog.add', compact('dashboard_data','category'));
}
//----------------------------------edit-data-----------------------------------------
public function edit($slug)
{
    $dashboard_data = LandingPage::first();
    $category = Category::get();
    $data = Blog::where('slug', $slug)->firstOrFail();
    return view('admin.blog.edit', compact('dashboard_data','data','category'));
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{
    //validation-field-to-save-date
    $request->validate(
        [
        'title'         => 'required|string',
        'details'       => 'required|string',
        'author'        => 'required|string',
        'category_id'   => 'required|string',
        'personal_note' => 'required|string',
        'image'         => 'required|image|mimes:jpg,png,jpeg,gif,bmp,svg,webp',
    ]);

    //importing-new-data
    $data = new Blog();
    $data->fill($request->only([
        'title',
        'details',
        'author',
        'category_id',
        'personal_note',
    ]));
    $data->slug = Str::slug($request->title) . '-' . Str::random(8);
    $this->updateImage($request, $data, 'image');
    $data->save();

    return back()->with('msg', 'Data has been added successfully');
}
//----------------------------------------update-data-------------------------------------
public function update(Request $request, $id)
{
    
    //validation-field-to-update-date
    $request->validate(
        [
            'title'         => 'required|string',
            'details'       => 'required|string',
            'author'        => 'required|string',
            'category_id'   => 'required|string',
            'personal_note' => 'required|string', 
        ]
    );
    //updating-existing-data 
    $BlogData = Blog::findOrFail($id);
    $data = $BlogData;
    $data->fill($request->only([
        'title',
        'details',
        'author',
        'category_id',
        'personal_note',
    ]));
    $data->slug = Str::slug($request->title) . '-' . Str::random(8);
    $this->updateImage($request, $data, 'image');
    $data->save();

    return redirect()->route('view.blog')->with('msg', "Data has been updated successfully");
}
//------------------------------------------delete-data------------------------------------------------------
public function delete($id)
{
    $data = Blog::findOrFail($id);
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

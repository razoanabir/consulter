<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\support\str;

class TeamController extends Controller
{

    protected function updateImage(Request $request, Team $data, $image)
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
            $data = Team::get();
            $dashboard_data = LandingPage::first();
            return view('admin.team.view', compact('dashboard_data','data'));
        }
//----------------------------------add-data-----------------------------------------
    public function add()
        {
            $dashboard_data = LandingPage::first();
            return view('admin.team.add', compact('dashboard_data'));
        }
//----------------------------------edit-data-----------------------------------------
    public function edit($slug)
        {
            $dashboard_data = LandingPage::first();
            $data = Team::where('slug', $slug)->firstOrFail();
            return view('admin.team.edit', compact('dashboard_data','data'));
        }
//----------------------------------store-data----------------------------------------
    public function store(Request $request)
        {
            //validation-field-to-save-date
            $request->validate(
                [
                'name'                  => 'required|string',
                'designation'           => 'required|string',
                'work_description'      => 'required|string',
                'facebook_link'         => 'required|string',
                'twitter_link'          => 'required|string',
                'instagram_link'        => 'required|string',
                'linked_in_link'        => 'required|string',
                'email'                 => 'required|string',
                'contact_number'        => 'required|string',
                'job_experience'        => 'required|string',
                'educational_experience'=> 'required|string',
                'image'                 => 'required|image|mimes:jpg,png,jpeg,gif,bmp,svg,webp',
            ]);
            
            //importing-new-data
            $data = new Team();
            $data->fill($request->only([
                'name',
                'designation',
                'work_description',
                'facebook_link',
                'instagram_link',
                'twitter_link',
                'linked_in_link',
                'email',
                'contact_number',
                'job_experience',
                'educational_experience',
            ]));
            $data->slug = Str::slug(title: $request->name) . '-' . Str::random(8);
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
                'name'                  => 'required|string',
                'designation'           => 'required|string',
                'work_description'      => 'required|string',
                'facebook_link'         => 'required|string',
                'twitter_link'          => 'required|string',
                'instagram_link'        => 'required|string',
                'linked_in_link'        => 'required|string',
                'email'                 => 'required|string',
                'contact_number'        => 'required|string',
                'job_experience'        => 'required|string',
                'educational_experience'=> 'required|string',
            ]
        );
        //updating-existing-data 
        $teamData = Team::findOrFail($id);
        $data = $teamData;
        $data->fill($request->only([
            'name',
            'designation',
            'facebook_link',
            'twitter_link',
            'instagram_link',
            'linked_in_link',
        ]));

        $data->slug = Str::slug($request->name) . '-' . Str::random(8);
        $this->updateImage($request, $data, 'image');
        $data->save();

        return redirect()->route('view.team')->with('msg', "Data has been updated successfully");
    }

//------------------------------------------delete-data------------------------------------------------------
    public function delete($id)
    {
        $data = Team::findOrFail($id);
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

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
//----------------------------------view-data----------------------------------------
public function view()
{
    $data = Category::get();
    $dashboard_data = LandingPage::first();
    return view('admin.category.view', compact('dashboard_data','data'));
}
//----------------------------------view-data----------------------------------------
public function add()
{
    $dashboard_data = LandingPage::first();
    return view('admin.category.add',compact('dashboard_data'));
}
//----------------------------------edit-data-----------------------------------------
public function edit($slug)
{
    $data = Category::where('slug', $slug)->firstOrFail();
    $dashboard_data = LandingPage::first();
    return view('admin.category.edit', compact('dashboard_data','data'));
}
//----------------------------------store-data----------------------------------------
public function store(Request $request)
{
    //validation-field-to-save-date
    $request->validate(
        [
        'category_name' => 'required|string',
    ]);
    
    //importing-new-data
    $data = new Category();        
    $data->fill($request->only([
        'category_name',
    ]));
    $data->slug = Str::slug(title: $request->category_name) . '-' . Str::random(8);

    $data->save();

    return back()->with( 'msg', 'Data has saved successfully!');
}
//----------------------------------------update-data-------------------------------------
public function update(Request $request, $id)
{
    //validation-field-to-update-date
    $request->validate(
        [
            'category_name' => 'required|string',
        ]
    );
    
    //updating-existing-data 
    $categoryData = Category::findOrFail($id);
    $data = $categoryData;
    $data->fill($request->only([
        'category_name',
    ]));        
    $data->slug = Str::slug(title: $request->category_name) . '-' . Str::random(8);
    $data->save();

    return redirect()->route('view.category')->with('msg', "Data has been updated successfully");
}
//------------------------------------------delete-data------------------------------------------------------
public function delete($id)
{
    $data = Category::findOrFail($id);
    $data->delete();
    return back()->with('msg', "Data has been deleted successfully");
}
}

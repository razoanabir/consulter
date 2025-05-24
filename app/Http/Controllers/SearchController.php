<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\CompanyInformation;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = collect();
    
        $results = $results->merge(items: Blog::where('title', 'LIKE', '%' . $query . '%')
            ->take(10)
            ->get(['slug', 'title as title'])
            ->map(function ($item) {
                $item->type = 'Blog';
                return $item;
            })
        );
        $results = $results->merge(Pricing::where('title', 'LIKE', '%' . $query . '%')
            ->take(10)
            ->get(['slug', 'title as title'])
            ->map(function ($item) {
                $item->type = 'Pricing';
                return $item;
            })
        );
        $results = $results->merge(Testimonial::where('name', 'LIKE', '%' . $query . '%')
            ->take(10)
            ->get(['id', 'name as title'])
            ->map(function ($item) {
                $item->type = 'Testimonial';
                return $item;
            }));
        $results = $results->merge(Category::where('category_name', 'LIKE', '%' . $query . '%')
            ->take(10)
            ->get(['slug', 'category_name as title'])
            ->map(function ($item) {
                $item->type = 'Categroy';
                return $item;
            })
        );
        $results = $results->merge(Project::where('title', 'LIKE', '%' . $query . '%')
            ->take(10)
            ->get(['slug', 'title as title'])
            ->map(function ($item) {
                $item->type = 'Project';
                return $item;
            })
        );
        $results = $results->merge(Service::where('title', 'LIKE', '%' . $query . '%')
            ->take(10)
            ->get(['slug', 'title as title'])
            ->map(function ($item) {
                $item->type = 'Service';
                return $item;
            }));
        $results = $results->merge(Team::where('name', 'LIKE', '%' . $query . '%')
            ->take(10)
            ->get(['slug', 'name as title'])
            ->map(function ($item) {
                $item->type = 'Team';
                return $item;
            })
        );
        $results = $results->merge(CompanyInformation::where('company_name', 'LIKE', '%' . $query . '%')
        ->take(10)
        ->get(['slug', 'company_name as title'])
        ->map(function ($item) {
            $item->type = 'CompanyInformation';
            return $item;
        })
    );
    
        return response()->json($results->values());
    }
}

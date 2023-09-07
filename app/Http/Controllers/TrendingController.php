<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\TrandingCategory;

class TrendingController extends Controller
{
    Public function index(){
        $category = Category::where('name', 'like', '%trending%')->first();
        $trending= TrandingCategory::active()->latest()->get();
        $projects = project::active()->latest()->get();
        return view('frontend.pages.trending', compact('category', 'projects' ,'trending'));
    }

    Public function project( $slug){
        $project = project::where('slug', $slug)->first();
        $trending = TrandingCategory::where('id', $project->category_id)->first();
        return view('frontend.pages.project', compact('project' , 'trending'));
    }
}

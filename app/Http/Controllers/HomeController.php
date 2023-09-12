<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Project;
use App\Models\Business;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\TradingCategory;

class HomeController extends Controller
{
    Public function index(){
        $category = Category::active()->get();
        $tradingCategory = TradingCategory::active()->where('category_id', NULL)->get();
        $products = Product::active()->take(5)->get();
        $projects = Project::active()->take(5)->get();
        $business = Business::active()->take(5)->get();
        $sliders = Slider::active()->get();
        $about = About::first();
        return view('frontend.pages.index' , compact('category','tradingCategory' ,'products' , 'projects' ,'business' , 'sliders','about'));
    }

    Public function about(){
        $about = About::first();
        return view('frontend.pages.about' , compact('about'));
    }


    Public function membership(){

        return view('frontend.pages.membership');
    }

    Public function business(){
        $business = Business::active()->latest()->get();
        return view('frontend.pages.business' , compact('business'));
    }
}

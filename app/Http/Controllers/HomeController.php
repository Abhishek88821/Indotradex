<?php

namespace App\Http\Controllers;

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
        $products = Product::active()->latest()->take(5)->get();
        $projects = Project::active()->latest()->take(5)->get();
        $business = Business::active()->latest()->take(5)->get();
        return view('frontend.pages.index' , compact('category','tradingCategory' ,'products' , 'projects' ,'business'));
    }
}

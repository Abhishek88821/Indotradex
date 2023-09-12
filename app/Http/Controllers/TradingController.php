<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\TradingCategory;

class TradingController extends Controller
{
    public function index(){
        $category = Category::where('name', 'like', '%trading%')->first();
    
        $tradingCategories = TradingCategory::with('childCategories')
            ->whereNull('category_id')
            ->active()
            ->get();
    
        return view('frontend.pages.trading', compact('category', 'tradingCategories'));
    }
    

    public function product( $slug){
       
        $tradingCategory = TradingCategory::where('slug', $slug)->first();
     
        if (!$tradingCategory) {
            return redirect()->back()->with('error', 'Trading category not found.');
        }

        $products =Product::whereJsonContains('category_id',strval($tradingCategory->id))->get();
        $category = TradingCategory::whereNull('category_id')->active()->get();
        
        return view('frontend.pages.product', compact('products', 'tradingCategory' , 'category'));
        
    }


    public function productDetails($slug) {
        $product = Product::where('slug', $slug)->first();
        $relatedQueries = [];
    
        if ($product) {
            foreach (json_decode($product->category_id) as $id) {
                $relatedQuery = Product::where('id', '!=', $product->id)
                    ->whereJsonContains('category_id', strval($id))->active()->get();
                    
                $relatedQueries[] = $relatedQuery;
            }
            
            $relatedProducts = collect($relatedQueries)
                ->flatten()
                ->unique('id') 
                ->values();
    
            $category = TradingCategory::whereNull('category_id')->active()->get();
    
            return view('frontend.pages.product-details', compact('product', 'relatedProducts', 'category'));
        }
    
        return redirect()->back()->with('error', 'Product not found');
    }
    
    
    
    
    
}

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
            ->latest()
            ->get();
    
        return view('frontend.pages.trading', compact('category', 'tradingCategories'));
    }
    

    public function product( $slug){
       
        $tradingCategory = TradingCategory::where('slug', $slug)->first();
     
        if (!$tradingCategory) {
            return redirect()->back()->with('error', 'Trading category not found.');
        }

        if( $tradingCategory->category_id != null && $tradingCategory->category_id){
            $data[] = $tradingCategory->id;
           $tradingCategory = TradingCategory::where('id', $tradingCategory->category_id)->first();
       
        }else{
            $data = $tradingCategory->childCategories->pluck('id')->toArray();
       
        }

        $products = Product::whereIn('category_id', $data)
            ->active()
            ->latest()
            ->get();
        
        return view('frontend.pages.product', compact('products', 'tradingCategory'));
        
    }


    Public function productDetails( $slug){
       $product = Product::where('slug', $slug)->first();
       if($product){
        $relatedProducts = Product::where('category_id', $product->category_id) 
        ->whereNotIn('id', [$product->id])
        ->get(); 
        $parentCategory = TradingCategory::where('id', $product->category_id)->first();
        $mainCategory = TradingCategory::where('id', $parentCategory->category_id)->first();
       
        return view('frontend.pages.product-details', compact('product' , 'relatedProducts' , 'mainCategory'));
       }
       return redirect()->back()->with('error' , 'Product not found');
    }
    
}

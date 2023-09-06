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
           $childCategorys =  TradingCategory::where('category_id',$tradingCategory->id )->get();
           $data = [];
           foreach($childCategorys as $childCategory){
            $data[] = $childCategory->id;
           }
        if ($tradingCategory) {
            $products = Product::where(['category_id' => $data]) ->active()
            ->latest()
            ->get();
          
            return view('frontend.pages.product', compact('products', 'tradingCategory'));
        } else {
           
            return redirect()->back()->with('error', 'Trading category not found.');
        }
    }


    Public function productDetails( $slug){
       $product = Product::where('slug', $slug)->first();
       if($product){
        $products = Product::where('category_id', $product->category_id) 
        ->whereNotIn('id', [$product->id])
        ->get(); 
    
        return view('frontend.pages.product-details', compact('product' , 'products'));
       }
       return redirect()->back()->with('error' , 'Product not found');
    }
    
}

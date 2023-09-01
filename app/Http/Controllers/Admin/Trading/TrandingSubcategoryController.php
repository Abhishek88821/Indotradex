<?php

namespace App\Http\Controllers\Admin\Trading;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\TradingCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;

class TrandingSubcategoryController extends Controller
{
    use UploadTraits;

    Public function index(Request $request){

        $TrandingCategory =  TradingCategory::where('category_id' ,'!=',  NULL)->get();
        
    return view('adminpanel.pages.trading.subcategory.index', compact('TrandingCategory'));
    }

    Public function create(){
        $categories =  TradingCategory::whereNull('category_id')->get();
        return view('adminpanel.pages.trading.subcategory.create' , compact('categories'));
    }

    Public function store(Request $request){
    $category = new TradingCategory;
    $category->category_id = $request->category_id;
    $category->name = $request->name;
    $category->short_desc = $request->short_desc;
    $category->image = $this->createUpload($request->file('image'));
    $category->banner = $this->createUpload($request->file('banner'));
    $category->slug = $request->slug ? Str::of($request->slug)->slug('-') : Str::of($request->name)->slug('-');
    $category->status = $request->status;
    $category->order = $request->order ?? TradingCategory::max('order') + 1 ;
    $category->created_by = Auth::guard('admin')->user()->id;
    $category->meta_title = $request->meta_title ?? $request->name;
    $category->meta_keyword = $request->meta_keywords ?? " ";
    $category->meta_description = $request->meta_description ?? " ";
    $category->save();
    return redirect()->route('admin.trading.subcategory')->with('success','Sub Category Creation Success');
    }

    Public function status($id){
        $category = TradingCategory::findorfail($id);
        $category->status = $category->status == 1 ? 0 : 1;
        $category->update();
        return redirect()->back()->with('success','Sub Category Status Update Success');
    }

    public function destroy($id){
    $category = TradingCategory::findorfail($id);
    $category->delete();
    return redirect()->back()->with('success','Sub Category Deleted Success');
    }

    Public function edit($id){
    $trandingSubCategoties = TradingCategory::findorfail($id);
    $categories =  TradingCategory::whereNull('category_id')->get();
    return view('adminpanel.pages.trading.subcategory.edit',compact('trandingSubCategoties' ,'categories'));
    }

    public function update(Request $request)
    {
        $category = TradingCategory::findorfail($request->id);
        $category->name = $request->name;
        $category->category_id = $request->category_id;
        if ($request->file('image')) {
            $category->image = $this->createUpload($request->file('image'));
        }
        if ($request->file('banner')) {
            $category->banner = $this->createUpload($request->file('banner'));
        }
        $category->short_desc = $request->short_desc;
        $category->slug = $request->slug ?? $category->slug;
        $category->status = $request->status;
        $category->order = $request->order ?? $category->order;
        $category->meta_title = $request->meta_title ?? $category->name;
        $category->meta_keyword = $request->meta_keywords ?? $category->meta_keywords;
        $category->meta_description = $request->meta_description ?? $category->meta_description;
        $category->update();
        return redirect()->route('admin.trading.subcategory')->with('success', 'Sub Category Update Success');
    }
}

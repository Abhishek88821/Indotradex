<?php

namespace App\Http\Controllers\Admin\Trading;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\TradingCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;

class TradingCategoryController extends Controller
{
    use UploadTraits;

    public function index(Request $request, $id = null)
    {
        $TrandingCategory = $id
            ? TradingCategory::where('category_id', $id)->get()
            : TradingCategory::where('category_id', NULL)->get();
    
        return view('adminpanel.pages.trading.category.index', compact('TrandingCategory' ,'id'));
    }
    

    Public function create($id = null){
       if($id != null){
        $category = TradingCategory::findorfail($id);
       }else{
        $category = null;
       }
  
        return view('adminpanel.pages.trading.category.create' , compact('category'));
    }

    Public function store(Request $request){
    $category = new TradingCategory;
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
    if($request->category_id){
        $category->category_id = $request->category_id;
    }
    $category->save();
    return redirect()->back()->with('success','Category Creation Success');
    }

    Public function status($id){
        $category = TradingCategory::findorfail($id);
        $category->status = $category->status == 1 ? 0 : 1;
        $category->update();
        return redirect()->back()->with('success','Category Status Update Success');
    }

    public function destroy($id){
    $category = TradingCategory::findorfail($id);
    $category->delete();
    return redirect()->back()->with('success','Category Deleted Success');
    }

    Public function edit($id){
    $TrandingCategory = TradingCategory::findorfail($id);
    return view('adminpanel.pages.trading.category.edit',compact('TrandingCategory'));
    }

    public function update(Request $request)
    {
        $category = TradingCategory::findorfail($request->id);
        $category->name = $request->name;
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
        return back()->with('success', 'Category Update Success');
    }
}

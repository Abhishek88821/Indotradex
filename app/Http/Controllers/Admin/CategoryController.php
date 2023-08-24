<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\traits\CategoryTraits;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CategoryRequest;
use App\Http\Traits\Upload\UploadTraits;

class CategoryController extends Controller
{
    use CategoryTraits, UploadTraits;

   Public function index(Request $request){

     return view('adminpanel\pages\Category\index',['category' => $this->getAll()]);

   }

   Public function create(){
    return view('adminpanel.pages.Category.create');
}

Public function store(CategoryRequest $request){
  $category = new Category;
  $category->name = $request->name;
  $category->short_desc = $request->short_desc;
  $category->image = $this->createUpload($request->file('image'));
  $category->banner = $this->createUpload($request->file('banner'));
  $category->slug = $request->slug ? Str::of($request->slug)->slug('-') : Str::of($request->name)->slug('-');
  $category->status = $request->status;
  $category->order = $request->order ?? Category::max('order') + 1 ;
  $category->created_by = Auth::guard('admin')->user()->id;
  $category->meta_title = $request->meta_title ?? $request->name;
  $category->meta_keywords = $request->meta_keywords ?? " ";
  $category->meta_description = $request->meta_description ?? " ";
  $category->save();
  return redirect()->route('admin.category')->with('success','Category Creation Success');
}

Public function status($id){
    $category = $this->getById($id);
    $category->status = $category->status == 1 ? 0 : 1;
    $category->update();
    return redirect()->back()->with('success','Category Status Update Success');
}

public function destroy($id){
  $category = $this->getById($id);
  $category->delete();
  return redirect()->back()->with('success','Category Deleted Success');
}

Public function edit($id){
  $category = $this->getById($id);
  return view('adminpanel.pages.Category.edit',compact('category'));
}

public function update(CategoryRequest $request)
{

    
    $category = $this->getById($request->id);
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
    $category->meta_keywords = $request->meta_keywords ?? $category->meta_keywords;
    $category->meta_description = $request->meta_description ?? $category->meta_description;
    $category->update();
    return redirect()->route('admin.category')->with('success', 'Category Update Success');
}



}

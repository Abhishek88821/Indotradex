<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TrandingCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;
use App\Http\traits\Tranding\TrandingCategoryTraits;
use App\Http\Requests\TrandingCategory as TrandingCategoryRequest;

class TrandingCategoryController extends Controller
{
    use TrandingCategoryTraits , UploadTraits;

    Public function index(){
      $category = $this->getCategory();
      return view('adminpanel.Tranding.Category.index', compact('category'));
    }

    Public function create(){
        return view('adminpanel.Tranding.Category.create');
    }

    Public function store(TrandingCategoryRequest $request){
      $category = new TrandingCategory;
      $category->name = $request->name;
      $category->image = $this->createUpload($request->file('image'));
      $category->slug = $request->slug ? Str::of($request->slug)->slug('-') : Str::of($request->name)->slug('-');
      $category->status = $request->status;
      $category->order = $request->order ?? TrandingCategory::max('order') + 1 ;
      $category->created_by = Auth::guard('admin')->user()->id;
      $category->meta_title = $request->meta_title ?? $request->name;
      $category->meta_keyword = $request->meta_keywords ?? " ";
      $category->meta_description = $request->meta_description ?? " ";
      $category->save();
      return redirect()->route('admin.tranding.category')->with('success','Category Creation Success');
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
      return view('adminpanel.Tranding.Category.edit',compact('category'));
    }

    public function update(TrandingCategoryRequest $request)
    {
        $category = $this->getById($request->id);
        $category->name = $request->name;
        if ($request->file('image')) {
            $category->image = $this->createUpload($request->file('image'));
        }
        $category->slug = $request->slug ?? $category->slug;
        $category->status = $request->status;
        $category->order = $request->order ?? $category->order;
        $category->meta_title = $request->meta_title ?? $category->name;
        $category->meta_keyword = $request->meta_keywords ?? $category->meta_keywords;
        $category->meta_description = $request->meta_description ?? $category->meta_description;
        $category->update();
        return redirect()->route('admin.tranding.category')->with('success', 'Category Update Success');
    }
    
}

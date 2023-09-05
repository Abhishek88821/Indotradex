<?php

namespace App\Http\Controllers\Admin\Tranding;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TrandingCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;

class TrandingCategoryController extends Controller
{
  
    Public function index(){
        return view('adminpanel.pages.tranding.category.index' , ['tranding' => TrandingCategory::get()]);
    }

    Public function store(Request $request){
      $trnCategory = new TrandingCategory;
      $trnCategory->name = $request->name;
      $trnCategory->status = true;
      $trnCategory->slug = Str::slug($request->name , '-'); 
      $trnCategory->order =  $request->displayOrder ??  TrandingCategory::max('order') + 1;
      if($trnCategory->save()){
        return response(['data' => $trnCategory , 'status' => true]);
      }else{
        return response(['data' => " ", 'status' => false]);
      }
    }

    Public function destroy( $id){
        $category = TrandingCategory::findorfail($id);
        $category->delete();
        return response(['status' =>true]);
    }

    Public function status( $id){
      $category = TrandingCategory::findorfail($id);
      $category->status = $category->status == 1 ? 0: 1;
      $category->update();
      return response(['status' =>true , 'data' => $category]);
    }
   
    Public function edit($id){
      $category = TrandingCategory::findorfail($id);
      return response(['status' =>true , 'data' => $category]);
    }

    public function update(Request $request){
      $category = TrandingCategory::findorfail($request->categoryId);
      $category->name = $request->name;
      $category->order = $request->order;
      $category->slug = $request->slug;
      $category->update();
      return response(['status' =>true , 'data' => $category]);
    }


}

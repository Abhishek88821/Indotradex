<?php

namespace App\Http\Controllers\Admin\Business;

use App\Models\Business;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;


class BusinessController extends Controller
{  use UploadTraits;

        public function index(){
                return view('adminpanel.pages.business.index', ['business' => Business::get()]);
        }

        Public function create(){
            return view('adminpanel.pages.business.create');
        }

        public function store(Request $request){
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'image'    => 'required',
            ]);

            $business = new Business;
            $business->name = $request->get('name');
            $business->short_desc = $request->get('short_desc');
            $business->description = $request->get('description');
            $business->image = $this->createUpload($request->file('image'));
            $business->slug = $request->get('slug') ? Str::slug($request->slug , '-') : Str::slug($request->name , '-');
            $business->status = $request->status;
            $business->order = $request->order ?? Business::max('order') + 1 ;
            $business->created_by = Auth::guard('admin')->user()->id;
            $business->save();
            return redirect()->back()->with('success','Create Business Successfully');
        }

        Public function edit(Request $request , $id){
            $business = Business::findorfail($id);
            return view('adminpanel.pages.business.edit', compact('business'));
        }
 
        public function update(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);

            $business = Business::findorfail($request->id);
            $business->name = $request->get('name');
            $business->short_desc = $request->get('short_desc');
            $business->description = $request->get('description');
            if($request->file('image')){
                $business->image = $this->createUpload($request->file('image'));
            }
            $business->slug = $request->get('slug') ? Str::slug($request->slug , '-') : Str::slug($request->name , '-');
            $business->status = $request->status;
            $business->order = $request->order ?? Business::max('order') + 1 ;

            $business->save();
            return redirect()->back()->with('success',' Business Update Successfully');
        }

        Public function status($id){
            $business =  Business::findorfail($id);
            $business->status = $business->status == 1 ? 0 : 1;
            $business->update();
            return redirect()->back()->with('success', ' Status Updated Successfully');
        }

    Public function productDestroy( $id ){
        $business = Business::findorfail($id);
        $business->delete();
        return redirect()->back()->with('success', ' Deleted Successfully');
    }

}

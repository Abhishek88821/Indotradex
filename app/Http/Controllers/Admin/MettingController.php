<?php

namespace App\Http\Controllers\Admin;

use App\Models\metting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MettingController extends Controller
{
    Public function index(){
        $metting = metting::latest()->get();
        return view('adminpanel.pages.enquiry.metting.index' , compact('metting'));
    }


    public function linkUpdate(Request $request)
    {
        $request->validate([
            'newLink' => 'required|url',
        ]);
      
        $newLink = $request->input('newLink');
        $enquiry = Metting::find($request->input('enquiry_id'));
        $enquiry->link = $newLink;
        $enquiry->admin_id =  Auth::guard('admin')->user()->id;
        $enquiry->status = 2;
        $enquiry->save();
    
        $response = [
            'message' => 'Meeting link updated successfully.',
        ];
    
        return response()->json($response);
    }
    
    Public function modeldata(Request $request){
        $enquiry = metting::findorfail($request->id);

      return view('adminpanel.components.metting', compact('enquiry'));
    }

}

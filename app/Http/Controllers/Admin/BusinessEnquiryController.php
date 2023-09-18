<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BussinessEnquiry;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BusinessEnquiryController extends Controller
{
    Public function index(){
        $enquiry = BussinessEnquiry::latest()->get();
        return view('adminpanel.pages.enquiry.business.index', compact('enquiry'));
    }


    Public function modeldata(Request $request){
        $enquiry = BussinessEnquiry::findorfail($request->id);

      return view('adminpanel.components.enquryModelViewproject', compact('enquiry'));
    }

    public function updateStatus(Request $request)
    {
        $itemId = $request->input('id');
        $newStatus = $request->input('status');
        $enquiry = BussinessEnquiry::find($itemId);
    
        if (!$enquiry) {
            return response()->json(['message' => 'Enquiry not found'], 404);
        }

        $enquiry->status = $newStatus;
        $enquiry->admin_id = Auth::guard('admin')->user()->id;
        $enquiry->save();
    
        return response()->json(['message' => 'Status updated successfully']);
    }
}

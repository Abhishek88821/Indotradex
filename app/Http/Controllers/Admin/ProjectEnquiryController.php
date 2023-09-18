<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProjectEnquiry;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectEnquiryController extends Controller
{
    Public function index(){
        $enquiry = ProjectEnquiry::latest()->get();
        return view('adminpanel.pages.enquiry.project.index', compact('enquiry'));
    }
  

    Public function modeldata(Request $request){
        $enquiry = ProjectEnquiry::findorfail($request->id);
      return view('adminpanel.components.enquryModelViewproject', compact('enquiry'));
    }

    public function updateStatus(Request $request)
    {
        $itemId = $request->input('id');
        $newStatus = $request->input('status');
        $enquiry = ProjectEnquiry::find($itemId);
    
        if (!$enquiry) {
            return response()->json(['message' => 'Enquiry not found'], 404);
        }
        $enquiry->admin_id = Auth::guard('admin')->user()->id;
        $enquiry->status = $newStatus;
        $enquiry->save();
    
        return response()->json(['message' => 'Status updated successfully']);
    }

}

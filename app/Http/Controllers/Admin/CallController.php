<?php

namespace App\Http\Controllers\Admin;

use App\Models\Call;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CallController extends Controller
{
   Public function index(){
     $call = Call::latest()->get();

     return view('adminpanel.pages.enquiry.call.index', compact('call'));
   }


   public function updateStatus(Request $request)
   {
       $itemId = $request->input('id');
       $newStatus = $request->input('status');
       $enquiry = Call::find($itemId);
   
       if (!$enquiry) {
           return response()->json(['message' => 'Enquiry not found'], 404);
       }
       $enquiry->admin_id =  Auth::guard('admin')->user()->id;
       $enquiry->status = $newStatus;
       $enquiry->save();
   
       return response()->json(['message' => 'Status updated successfully']);
   }

}

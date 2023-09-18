<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProductsEnquiry;
use App\Http\Controllers\Controller;

class ProductEnquiries extends Controller
{
    Public function index(){
        $enquiry = ProductsEnquiry::latest()->get();
        return view('adminpanel.pages.enquiry.products.index', compact('enquiry'));
    }

    Public function modeldata(Request $request){
        $enquiry = ProductsEnquiry::findorfail($request->id);

      return view('adminpanel.components.enquryModelView', compact('enquiry'));
    }

    public function updateStatus(Request $request)
    {
        $itemId = $request->input('id');
        $newStatus = $request->input('status');
        $enquiry = ProductsEnquiry::find($itemId);
    
        if (!$enquiry) {
            return response()->json(['message' => 'Enquiry not found'], 404);
        }

        $enquiry->status = $newStatus;
        $enquiry->save();
    
        return response()->json(['message' => 'Status updated successfully']);
    }
}

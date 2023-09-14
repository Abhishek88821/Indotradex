<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsEnquiry;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;
use Illuminate\Support\Facades\Validator;

class ProductEnqueryController extends Controller
{   use UploadTraits;

    public function submit(Request $request)
    {

        $rules = [
            'qty' => 'required|numeric',
         
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); 
        }
        $enquiry = new ProductsEnquiry;
        $enquiry->user_id = Auth::user()->id;
        $enquiry->product_id = $request->product_id;
        $enquiry->type = $request->type;
        $enquiry->qty = $request->qty ?? null;
        $enquiry->quantity = $request->quantity ?? null;
        $enquiry->rate = $request->Rate ?? null;
        $enquiry->Payment = $request->payment ?? null;
        $enquiry->delivery = $request->delivery ?? null;
        $enquiry->quality_pdf =$this->createUpload($request->file('Quality_Report')) ?? null;
        $enquiry->photograph  = $this->createUpload($request->file('photograph')) ?? null;
        $enquiry->otherItems = $request->otherItems ?? null;
        $enquiry->forMaking = $request->forMaking ?? null;
        $enquiry->Pieces    = $request->number_of_pieces ?? null;
        $enquiry->remark    =   $request->remark ?? null;
        $enquiry->save();
        return response()->json(['message' => 'Enquiry Submitted Successfully']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BussinessEnquiry;
use Illuminate\Support\Facades\Auth;

class BussinessEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $buss_enq = new BussinessEnquiry;
        $buss_enq->user_id = Auth::user()->id;
        $buss_enq->type_of_support = $request->type_of_support;
        $buss_enq->bussiness = $request->bussiness;
        $buss_enq->remarks = $request->remarks;
        $buss_enq->save();
        
        return response()->json(['message' => 'Business Inquiry Sent Successfully']);
    }
    
}

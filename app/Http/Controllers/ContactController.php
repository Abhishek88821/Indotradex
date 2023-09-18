<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
   Public function index(){
     return view('frontend.pages.contact');
   }

   public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'org_nme' => 'required',
            'category' => 'required',
            'state' => 'required',
            'e_mail' => 'required|email',
            'mobile' => 'required',
            'Products' => 'required',
            'product' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()]);
        }
        
       $contact = new Contact;
       $contact->first_name = $request->first_name;
       $contact->org_nme = $request->org_nme;
       $contact->category = $request->category;
       $contact->state = $request->state;
       $contact->e_mail = $request->e_mail;
       $contact->mobile = $request->mobile;
       $contact->Products = $request->Products;
       $contact->product = $request->product;
       $contact->message = $request->message;
       $contact->save();
        return response()->json(['status' => 'success', 'message' => 'Request Send Successfully']);
    }
}

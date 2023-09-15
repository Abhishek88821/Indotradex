<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectEnquiry;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;

class ProjectEnquiryController extends Controller
{  use UploadTraits;

    public function saveInvestment(Request $request)
    {
        // Validate the form data
        $request->validate([
            'project_id' => 'required|integer',
            // 'project_name' => 'required|string',
            // 'interest' => 'required|string',
            // 'requirement' => 'required|string',
            // 'p_business' => 'required|string',
            // 'remark' => 'required|string',
        ]);

        // Create and save the investment record
        ProjectEnquiry::create([
            'user_id' => Auth::user()->id,
            'project_id' => $request->input('project_id'),
            'project_name' => $request->input('project_name'),
            'interest' => $request->input('interest'),
            'requirement' => $request->input('requirement'),
            'p_business' => $request->input('p_business'),
            'remark' => $request->input('remark'),
            'type'  => $request->input('type'),
            'photo' => $this->createUpload($request->file('photo')) ?? null,
        ]);

        // Return a success response
        return response()->json(['message' => 'Investment saved successfully']);
    }
}

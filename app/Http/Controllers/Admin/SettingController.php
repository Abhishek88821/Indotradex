<?php

namespace App\Http\Controllers\Admin;

use App\Models\setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $setting = setting::first();
       return view('adminpanel.pages.setting.index' , compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nav_header' => 'nullable|string',
            'about_footer' => 'required|string',
            'facebook' => 'nullable|string',
            'twiter' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'copyright' => 'nullable|string',
        ]);
    
        $setting = Setting::firstOrNew();
        $setting->fill($validatedData);
        $setting->save();
        return redirect()->route('setting.index')->with('success', 'Settings updated successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\Upload\UploadTraits;

class AboutController extends Controller
{    use UploadTraits;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  $about = About::first();
        return view('adminpanel.pages.about.index' , compact('about'));
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // 'meta_title' => 'nullable|string|max:255',
            // 'meta_keywords' => 'nullable|string|max:255',
            // 'meta_description' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate images
            'bgimages' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate background image
        ]);

        $about = About::firstOrCreate(
            ['id' => 1]
        );

                $about->title = $request->title;
                $about->description = $request->description;
                $about->meta_title = $request->meta_title;
                $about->meta_keywords = $request->meta_keywords;
                $about->meta_description = $request->meta_description;
        
        if ($request->hasFile('images')) {
            $imagePaths = [];
        
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $this->createUpload($image);
            }
        
            $about->images = implode(',',  $imagePaths);
        }
        
        if ($request->hasFile('bgimages')) {
            $about->bgimages = $this->createUpload($request->file('bgimages'));
        }
        
        $about->save();
        
        return redirect()->route('about.index')->with('success', 'About information has been successfully stored.');
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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\Upload\UploadTraits;

class SliderController extends Controller
{
    use UploadTraits;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::latest()->get();
       return view('adminpanel.pages.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpanel.pages.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'desc' => 'required|string',
            // 'order' => 'required|integer',
            'status' => 'required|in:0,1',
        ]);

        $slider = new Slider([
            'banner' =>  $this->createUpload($request->file('image')),
            'desc' => $request->input('desc'),
            'order' => $request->input('order') ?? Slider::max('order') + 1,
            'status' => $request->input('status'),
        ]);

        $slider->save();

        return redirect()->route('slider.index')->with('success', 'Slider added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slider = Slider::find($id);

        if ($slider) {
            $slider->status = $slider->status == 1 ? 0 : 1;
            $slider->save();
    
            return redirect()->route('slider.index')->with('success', 'Slider Status Updated successfully.');
        }
    
        return redirect()->route('slider.index')->with('error', 'Slider not found.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::find($id);

        if ($slider) {
            return view('adminpanel.pages.slider.edit', compact('slider'));
        }

        return redirect()->route('slider.index')->with('error', 'Slider not found.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::find($id);

        if ($slider) {
            if ($request->hasFile('image')) {
                $slider->banner = $this->createUpload($request->file('image'));
            }
            
            $slider->desc = $request->input('desc');
            $slider->order = $request->input('order') ?? Slider::max('order') + 1;
            $slider->status = $request->input('status');
            $slider->save();

            return redirect()->back()->with('success', 'Slider updated successfully');
        } else {
            return redirect()->back()->with('error', 'Slider not found.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        
        if ($slider) {
            $slider->delete();
            return redirect()->back()->with('success' , 'Slider deleted successfully');
        }

        return redirect()->route('slider.index')->with('error', 'Slider not found.');
    }
}

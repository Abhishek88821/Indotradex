<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\Upload\UploadTraits;

class TeamController extends Controller
{ use UploadTraits;
    /**
     * Display a listing of the resource.
     */
 
    public function index()
    {
        $team = Team::latest()->get();
       return view('adminpanel.pages.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpanel.pages.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string',
            'position' => 'required|string',
            // 'order' => 'required|integer',
            'status' => 'required|in:0,1',
        ]);

        $slider = new Team([
            'banner' =>  $this->createUpload($request->file('image')),
            'name' => $request->input('name'),
            'about' => $request->input('about'),
            'position' => $request->input('position'),
          
            'status' => $request->input('status'),
        ]);

        $slider->save();

        return redirect()->route('teams.index')->with('success', 'Team added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slider = Team::find($id);

        if ($slider) {
            $slider->status = $slider->status == 1 ? 0 : 1;
            $slider->save();
    
            return redirect()->route('teams.index')->with('success', 'Team Status Updated successfully.');
        }
    
        return redirect()->route('teams.index')->with('error', 'Team not found.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::find($id);

        if ($team) {
            return view('adminpanel.pages.team.edit', compact('team'));
        }

        return redirect()->route('teams.index')->with('error', 'Team not found.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

       
        $slider = Team::find($id);
      
        if ($slider) {
            if ($request->hasFile('image')) {
                $slider->banner = $this->createUpload($request->file('image'));
            }
            
            $slider->name = $request->name;
            $slider->about = $request->about;
            $slider->position = $request->position;
            $slider->status = $request->status;
            $slider->save();
            return redirect()->back()->with('success', 'Team updated successfully');
        } else {
            return redirect()->back()->with('error', 'Team not found.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Team::find($id);
        
        if ($slider) {
            $slider->delete();
            return redirect()->back()->with('success' , 'Team deleted successfully');
        }

        return redirect()->route('slider.index')->with('error', 'Team not found.');
    }
}

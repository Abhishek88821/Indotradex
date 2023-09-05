<?php

namespace App\Http\Controllers\Admin\Tranding;

use App\Models\project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TrandingCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;

class ProjectsController extends Controller
{
   
    use UploadTraits;
   
    
    public function index(Request $request)
    {
        $products = project::get();
        return view('adminpanel.pages.tranding.projects.index', compact('products'));
    }


    public function create(Request $request){
        $trandingCategory = TrandingCategory::get();
        return view('adminpanel.pages.tranding.projects.create', compact('trandingCategory'));
    }


    
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'features_key.*' => 'nullable|string',
                'features_value.*' => 'nullable|string',
                'parameters_key.*' => 'nullable|string',
                'parameters_value.*' => 'nullable|string',
                // 'display_order' => 'required|integer',
                'status' => 'required|boolean',
                // 'meta_title' => 'nullable|string|max:255',
                // 'meta_keywords' => 'nullable|string',
                // 'meta_description' => 'nullable|string',
                // 'slug' => 'required|string|max:255',
                'image' => 'required|image|max:2048',
                'download_pdf' => 'required|mimes:pdf|max:2048', 
                'resouces_images' => 'required',
                'category' => 'required',
                'resouces_about' => 'required',
            ]);
            $order = $request->display_order ?? Project::max('order') + 1;
            $project = Project::create([
                'name' => $request->name,
                'description' => $request->description,
                
                'status' => $request->status,
                'meta_title' => $request->meta_title,
                'meta_keywords' => $request->meta_keywords,
                'meta_description' => $request->meta_description,
                'slug' => Str::slug($request->slug , '-') ?? Str::slug($request->name, '-'),
                'image' => $this->createUpload($request->file('image')),
                'download_pdf' => $this->createUpload($request->file('download_pdf')),
                'created_by' => Auth::guard('admin')->user()->id,
                'category_id' => $request->category,
                'resouces_about' => $request->resouces_about,
                'order' => $order ?? 1,
            ]);
       
            $features = [];
            foreach ($validatedData['features_key'] as $index => $featureKey) {
                $features[] = [
                    'key' => $featureKey,
                    'value' => $validatedData['features_value'][$index],
                ];
            }
        
            $parameters = [];
            foreach ($validatedData['parameters_key'] as $index => $parameterKey) {
                $parameters[] = [
                    'key' => $parameterKey,
                    'value' => $validatedData['parameters_value'][$index],
                ];
            }
    
            $resourceImages = [];
            if ($request->hasFile('resouces_images')) {
                foreach ($request->file('resouces_images') as $image) {
                    $resourceImages[] = $this->createUpload($image);
                }
            }
        
            $project->update([
                'features' => json_encode($features),
                'parameters' =>  json_encode($parameters),
                'resouces_images' => json_encode($resourceImages),
            ]);
          
            return redirect()->route('admin.project')->with('success', 'Project created successfully');
        }
    
    
    Public function edit(Request $request , $id){
       $project = Project::findorfail($id);
       $trandingCategory = TrandingCategory::get();
       return view('adminpanel.pages.tranding.projects.edit', compact('project' ,'trandingCategory'));
    }
    
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'features_key.*' => 'nullable|string',
            'features_value.*' => 'nullable|string',
            'parameters_key.*' => 'nullable|string',
            'parameters_value.*' => 'nullable|string',
            // 'display_order' => 'required|integer',
            'status' => 'required|boolean',
            // 'meta_title' => 'nullable|string|max:255',
            // 'meta_keywords' => 'nullable|string',
            // 'meta_description' => 'nullable|string',
            'slug' => 'required|string|max:255',
            // 'image' => 'required|image|max:2048',
            // 'download_pdf' => 'required|mimes:pdf|max:2048', 
            // 'resouces_images' => 'required',
            'category' => 'required',
        ]);
        $project = Project::findorfail($request->id);
        $project->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'order' => $request->display_order ?? Project::max('order') + 1,
            'status' => $request->status,
            'meta_title' => $request->meta_title,
            'meta_keywords' =>  $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'slug' => Str::slug($request->slug, '-') ?? Str::slug( $request->name, '-'),
            'image' => $this->createUpload($request->file('image')) ?? $project->image,
            'download_pdf' => $this->createUpload($request->file('download_pdf')) ?? $project->download_pdf,
            'created_by' => Auth::guard('admin')->user()->id,
            'category_id' => $request->category,
            'resouces_about' => $request->resouces_about,
        ]);
   
        $features = [];
        foreach ($validatedData['features_key'] as $index => $featureKey) {
            $features[] = [
                'key' => $featureKey,
                'value' => $validatedData['features_value'][$index],
            ];
        }
    
        $parameters = [];
        foreach ($validatedData['parameters_key'] as $index => $parameterKey) {
            $parameters[] = [
                'key' => $parameterKey,
                'value' => $validatedData['parameters_value'][$index],
            ];
        }

        $resourceImages = [];
        if ($request->hasFile('resouces_images')) {
            foreach ($request->file('resouces_images') as $image) {
                $resourceImages[] = $this->createUpload($image);
            }
        }
    
        $project->update([
            'features' => empty($features) ? $project->features : json_encode($features),
            'parameters' => empty($parameters) ? $project->parameters : json_encode($parameters),
            'resouces_images' => empty($resourceImages) ? $project->resouces_images : json_encode($resourceImages),
        ]);
        
      
    
        return redirect()->back()->with('success', 'Tranding product Updated Successfully');
    }

    Public function status( Request $request , $id){
        $product = Project::findorfail($id);
        $product->status = $product->status == 1 ? 0 : 1;
        $product->update();
        return redirect()->back()->with('success', 'Tranding project Status Updated Successfully');
    }

    Public function destroy( $id ){
        $product = Project::findorfail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Tranding project Deleted Successfully');
    }
}

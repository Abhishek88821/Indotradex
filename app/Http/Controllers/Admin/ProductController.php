<?php 
namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Upload\UploadTraits;
use App\Http\Requests\trandingProductStore;
use App\Http\traits\ProductsTraits;
use App\Http\traits\SubCategoryTraits;


class ProductController extends Controller
{
    use ProductsTraits;
    use UploadTraits;
    use SubCategoryTraits;
    
    public function index(Request $request)
    {
        $TrandingProducts = $this->getAll();
        return view('adminpanel.Tranding.ProductsShow', compact('TrandingProducts' ));
    }


    public function create(Request $request){
        $trandingCategory = $this->getCategory();
        return view('adminpanel.Tranding.ProductsCreate' , compact('trandingCategory'));
    }


    public function productStore(trandingProductStore $request)
    {
        $productData = $request->only([
            'name', 'category_id', 'description', 'status',
             'meta_keywords', 'meta_description'
        ]);

        $product = new Product($productData);
        $product->slug = $request->slug ? Str::of($request->slug)->slug('-') :  Str::of($request->name)->slug('-');
        $product->image = $this->createUpload($request->file('image'));
        $product->icon = $this->createUpload($request->file('icon'));
        $product->created_by = Auth::guard('admin')->user()->id;
        $maxDisplayOrder = Product::max('display_order') ?? 0;
        $product->display_order = $request->display_order ?? $maxDisplayOrder + 1;
        $product->meta_title = $request->meta_title ?? $request->name;
        $product->specifications = json_encode(array_combine($request->input('specifications_key'), $request->input('specifications_value')));
        $product->save();
        return redirect()->back()->with('success', 'Tranding product Created Successfully');
    }
    
    Public function productEdit(Request $request , $id){
       $product = $this->ProductGetById($id);
       $trandingCategory = $this->getCategory();
       return view('adminpanel.Tranding.ProductEdit', compact('product' ,'trandingCategory'));
    }
    
    public function productUpdate(trandingProductStore $request)
    {
        $product = $this->ProductGetById($request->id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->meta_keywords = $request->meta_keywords;
        $product->meta_description = $request->meta_description;
        $product->meta_title = $request->meta_title ?? $request->name;
        
        if ($request->hasFile('image')) {
            $product->image = $this->createUpload($request->file('image'));
        }
    
        if ($request->hasFile('icon')) {
            $product->icon = $this->createUpload($request->file('icon'));
        }
    
        if ($request->slug) {
            $product->slug = Str::of($request->slug)->slug('-');
        } else {
            $product->slug = Str::of($request->name)->slug('-');
        }
    
        if($request->display_order){
            $product->display_order = $request->display_order;
        }else{
        $maxDisplayOrder = Product::max('display_order') ?? 0;
        $product->display_order = $maxDisplayOrder + 1;
        }

        $specifications = array_combine(
            $request->input('specifications_key'),
            $request->input('specifications_value')
        );
        $product->specifications = json_encode($specifications);
    
        $product->save();
    
        return redirect()->back()->with('success', 'Tranding product Updated Successfully');
    }

    Public function productStatus( Request $request , $id){
        $product = $this->ProductGetById($id);
        $product->status = $product->status == 1 ? 0 : 1;
        $product->update();
        return redirect()->back()->with('success', 'Tranding product Status Updated Successfully');
    }

    Public function productDestroy( $id ){
        $product = $this->ProductGetById($id);
        $product->delete();
        return redirect()->back()->with('success', 'Tranding product Deleted Successfully');
    }
     
}

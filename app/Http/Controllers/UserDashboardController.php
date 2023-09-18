<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Models\metting;
use App\Models\Visit;
use App\Models\Resources;
use Illuminate\Http\Request;
use App\Models\ProjectEnquiry;
use App\Models\ProductsEnquiry;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
  Public function index(){
    $supply =  ProductsEnquiry::with('product')->where(['type'=> 1 ,'user_id' => Auth::user()->id ])->sum('qty');
    $buy =  ProductsEnquiry::with('product')->where(['type'=> 2 ,'user_id' => Auth::user()->id ])->sum('qty');
    $resources =  ProductsEnquiry::with('product')->where(['type'=> 3 ,'user_id' => Auth::user()->id ])->sum('qty');
    $inversment =  ProjectEnquiry::where(['type'=> 1 ,'user_id' => Auth::user()->id ])->count() ?? 0;
    
     return view('frontend.pages.dashboard', compact('supply','buy','resources','inversment'));
  }


  Public function supply(){
   $products =  ProductsEnquiry::with('product')->where(['type'=> 1 , 'user_id' => Auth::user()->id ])->latest()->get();
    return view('frontend.pages.supply' , compact('products'));
  }
  
  public function delete($id){
    ProductsEnquiry::find($id)->delete();
    return redirect()->back()->with('success', 'Supply has been deleted');
  }


  Public function buy(){
    $products =  ProductsEnquiry::with('product')->where(['type'=> 2 , 'user_id' => Auth::user()->id ])->latest()->get();
    return view('frontend.pages.buy' , compact('products'));
  }
 

  Public function resources(){

    $resources = Resources::where(['role' => Auth::user()->role->id , 'status' => 1])->get();
    return view('frontend.pages.resources' , compact('resources'));
  }

  public function call()
  {
      $user = Auth::user();
      $plan = $user->plan ?? null;
      $currentDate = now();
  
      if ($plan === null || $plan->status !== 1 || $currentDate < \Carbon\Carbon::parse($plan->start_date) || $currentDate > \Carbon\Carbon::parse($plan->end_date)) {
          return redirect()->back()->with('error', ' You not have any active plan');
      }
  
      $totalcalldo = Call::where('user_id', $user->id)
          ->whereYear('created_at', $currentDate->year)
          ->whereMonth('created_at', $currentDate->month)
          ->count();
  
      $remain = max(3 - $totalcalldo, 0);
  
      return view('frontend.pages.call', compact('remain'));
  }
  
  public function callback(Request $request)
  {
      $user = Auth::user();
      $plan = $user->plan;
      $currentDate = now();
      if ($plan === null || $plan->status !== 1 || $currentDate < \Carbon\Carbon::parse($plan->start_date) || $currentDate > \Carbon\Carbon::parse($plan->end_date)) {
          return response()->json(['status' => 'error', 'message' => 'You do not have an active plan.']);
      }
  
      $currentDate = now();
      $totalCalls = Call::where('user_id', $user->id)
          ->whereYear('created_at', $currentDate->year)
          ->whereMonth('created_at', $currentDate->month)
          ->count();
  
      if ($totalCalls >= 3) {
          return response()->json(['status' => 'error', 'message' => 'You have reached the maximum number of calls for this month.']);
      }
  
      $call = new Call;
      $call->user_id = $user->id;
      $call->status = 1;
      $call->save();
  
      return response()->json(['status' => 'success', 'message' => 'Call Back request sent successfully.']);
  }
  

  Public function meeting(){
    $metting = metting::where(['user_id' => Auth::user()->id])->get();
    return view('frontend.pages.meeting', compact('metting'));
  }

  public function mettingStore(Request $request){
    $metting = new metting;
    $metting->user_id = Auth::user()->id;
    $metting->via = $request->via;
    $metting->time = $request->time;
    $metting->perpose = $request->perpose;
    $metting->message = $request->message;
    $metting->save();

      return redirect()->route('meeting')->with('success', 'Metting Request Send Successfully');
  }
  
  Public function mettingDelete($id){
     $metting = metting::find($id);
     $metting->delete();
     return redirect()->back()->with('success', 'Metting Request Delete Successfully');
  }

  Public function visit(){
    return view('frontend.pages.visit');
  }

      public function visitstore(Request $request)
    {
        $visit = new Visit;
        $visit->user_id = Auth::user()->id;
        $visit->massege = $request->input('comments'); 
        $visit->options = json_encode($request->input('options'));
        $visit->status = 1; 

        $visit->save();
        return redirect()->route('visit')->with('success', 'Visiting Request Success Send');
    }

  public function profile(){
    $profile = Auth::user();
    return view('frontend.pages.profile' , compact('profile'));
  }

  public function investment(){
    $project = ProjectEnquiry::where(['user_id' => Auth::user()->id , 'type' => 1 ])->get();
    return view('frontend.pages.investment' , compact('project'));
  }

  public function team(){
    return view('frontend.pages.our-team');
  }

 

}

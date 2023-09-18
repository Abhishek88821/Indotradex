<?php

use App\Models\User;
use App\Models\TrandingCategory;
use Illuminate\Support\Facades\Auth;

if (! function_exists('getTrendingCategory')) {
    function getTrendingCategory($id = null)
    { 
         return TrandingCategory::findorfail($id); 
    }
}

if (!function_exists('getModalTarget')) {
    function getModalTarget($modelname) {
        $user = Auth::user();
        $plan = $user->plan ?? null;
        $currentDate = now();

        if (auth()->check()) {
            if ($plan !== null && $plan->status === 1 && $currentDate >= \Carbon\Carbon::parse($plan->start_date) && $currentDate <= \Carbon\Carbon::parse($plan->end_date)) {
                return $modelname;
            } else {
                return '#AuthorizeModal';
            }
        } else {
            return '#LoginModal';
        }
    }
}

if (!function_exists('status')) {
    function status($status) {
        $statusLabels = [
            1 => 'pending',
            2 => 'completed',
            0 => 'cancel',
        ];
        return $statusLabels[$status] ?? 'Unknown';
    }
}





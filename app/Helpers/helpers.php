<?php

use App\Models\TrandingCategory;

if (! function_exists('getTrendingCategory')) {
    function getTrendingCategory($id = null)
    { 
         return TrandingCategory::findorfail($id); 
    }
}

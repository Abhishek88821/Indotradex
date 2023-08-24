<?php

namespace App\Http\traits\Tranding;

use App\Models\TrandingCategory;

trait TrandingCategoryTraits
{
    public function getCategory()
    {
        return TrandingCategory::get();
    }

    Public function getById($id){
       return TrandingCategory::findorfail($id);
    }
    
}

<?php

namespace App\Http\traits;

use App\Models\SubCategory;

trait SubCategoryTraits
{
    public function getCategory()
    {
        return SubCategory::get();
    }

    Public function getById($id){
       return SubCategory::findorfail($id);
    }
    
}

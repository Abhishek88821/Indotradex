<?php

namespace App\Http\traits;

use App\Models\Category;

trait CategoryTraits
{
    public function getAll()
    {
        return Category::get();
    }

    Public function getById($id){
       return Category::findorfail($id);
    }
    
}
    
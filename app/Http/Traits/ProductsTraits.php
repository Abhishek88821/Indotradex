<?php

namespace App\Http\traits;

use App\Models\Product;

trait ProductsTraits
{
    public function getAll()
    {
        return Product::with('images','icons')->get();
    }

    public function ProductGetById($id)
    {
        return Product::with('images','icons')->findorfail($id);
    }
}

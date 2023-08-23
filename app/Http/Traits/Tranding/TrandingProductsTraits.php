<?php

namespace App\Http\traits\Tranding;

use App\Models\TrandingProduct;

trait TrandingProductsTraits
{
    public function getAll()
    {
        return TrandingProduct::with('images','icons')->get();
    }

    public function ProductGetById($id)
    {
        return TrandingProduct::with('images','icons')->findorfail($id);
    }
}

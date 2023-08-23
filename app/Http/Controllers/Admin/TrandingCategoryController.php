<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\traits\Tranding\TrandingCategoryTraits;

class TrandingCategoryController extends Controller
{
    use TrandingCategoryTraits;

    Public function index(){
      $category = $this->getCategory();
      return view('adminpanel.Tranding.Category.index', compact('category'));
    }


    Public function create(){
        return view('adminpanel.Tranding.Category.create');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrandingCategory extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'tranding_categories';

    public function images()
    {
        return $this->belongsTo(Upload::class, 'image');
    }
    
    public function banners()
    {
        return $this->belongsTo(Upload::class, 'banner');
    }

    Public function childCount($id){
        return $this->where('category_id' , $id )->count();
    }
}

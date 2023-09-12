<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TradingCategory extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'tradingcategories';


    public function images()
    {
        return $this->belongsTo(Upload::class, 'image');
    }
    
    public function banners()
    {
        return $this->belongsTo(Upload::class, 'banner');
    }

    public function parentCategory()
    {
        return $this->belongsTo(TradingCategory::class, 'category_id');
    }

    public function childCategories()
    {
        return $this->hasMany(TradingCategory::class, 'category_id');
    }

    public function Products()
    {
        return $this->hasMany(Product::class, 'category_id' , 'id')->active();
    }


    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }


   
    
}

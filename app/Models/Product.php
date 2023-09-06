<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'filepath',
        'icon',
        'category_id',
        'shot_desc',
        'description',
        'specifications',
        'display_order',
        'status',
        'created_by',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];

    public function images()
    {
        return $this->belongsTo(Upload::class, 'image');
    }
    
    public function icons()
    {
        return $this->belongsTo(Upload::class,'icon');
    }

    public function categorys()
    {
        return $this->belongsTo(TradingCategory::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    
}

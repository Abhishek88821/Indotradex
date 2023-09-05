<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class project extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'short_description',
        'description',
        'category_id',
        'created_by',
        'features',
        'parameters',
        'resouces_about',
        'resouces_images',
        'download_pdf',
        'order',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
    
    public function images()
    {
        return $this->belongsTo(Upload::class, 'image');
    }
    public function pdf()
    {
        return $this->belongsTo(Upload::class, 'download_pdf');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}

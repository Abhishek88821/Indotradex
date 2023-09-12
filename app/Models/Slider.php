<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'banner',
        'image',
        'desc',
        'order',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }

    public function images()
    {
        return $this->belongsTo(Upload::class, 'banner');
    }
}

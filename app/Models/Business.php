<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Business extends Model
{
    use HasFactory , SoftDeletes;

    public function images()
    {
        return $this->belongsTo(Upload::class, 'image');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }
}

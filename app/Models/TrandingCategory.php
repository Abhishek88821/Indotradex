<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrandingCategory extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'trandingcategories';


    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }

}

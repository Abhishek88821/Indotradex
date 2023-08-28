<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tranding_category extends Model
{
    use HasFactory , SoftDeletes;

    public function images()
    {
        return $this->belongsTo(Upload::class, 'image');
    }
}

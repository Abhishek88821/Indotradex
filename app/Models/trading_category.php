<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class trading_category extends Model
{
    use HasFactory , SoftDeletes;


    public function images()
    {
        return $this->belongsTo(Upload::class, 'image');
    }
}

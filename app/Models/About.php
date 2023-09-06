<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'images',
        'bgimages',
        'status',
        'meta_description',
        'meta_title',
        'meta_keywords'
    ];

    public function bgimage()
    {
        return $this->belongsTo(Upload::class, 'bgimages');
    }

    public function images()
    {
        return $this->belongsTo(Upload::class, 'images');
    }

}

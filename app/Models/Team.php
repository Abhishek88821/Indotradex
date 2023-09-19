<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';
   
    protected $fillable = ['name', 'position', 'banner', 'about', 'status', 'admin_id'];

    
    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }

    public function images()
    {
        return $this->belongsTo(Upload::class, 'banner');
    }
}

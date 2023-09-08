<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['name', 'status'];

    public function scopeActive($query)
    {
        return $query->where('status', 1)->where('name', '!=', 'admin');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectEnquiry extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'project_id',
        'user_id',
        'type',
        'interest',
        'requirement',
        'p_business',
        'photo',
        'status',
        'remark',
        'admin_id',
    ];
}

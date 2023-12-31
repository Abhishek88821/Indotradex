<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan',
        'USD',
        'IDR',
        'INR',
        'status',
    ];
    
}

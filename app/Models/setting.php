<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'nav_header',
        'about_footer',
        'facebook',
        'twiter',
        'linkedin',
        'copyright',
       
    ];

}

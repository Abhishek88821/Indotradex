<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Ramsey\Uuid\Uuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , SoftDeletes;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'firstName',
        'LastName',
        'email',
        'password',
        'mobile',
        'website',
        'address',
        'city',
        'pinCode',
        'role_id',
        'photoId',
        'photo',
        'remark',
        'email_verified_at',
        'otp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }


    public function plan()
    {
        return $this->hasOne(Plan::class, 'user_id');
    }

    public function role()
    {
        return $this->hasOne(Role::class,'id','role_id');
    }

    public function photoIds()
    {
        return $this->belongsTo(Upload::class, 'photoId');
    }

    public function photos()
    {
        return $this->belongsTo(Upload::class, 'photo');
    }


    
}

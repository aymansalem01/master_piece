<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;



public function subscribtion()
{
    return $this->hasMany(Subscribtion::class);
}

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
    public function parent()
    {
        return $this->hasMany(UserRelation::class);
    }
    public function child()
    {
        return $this->hasMany(UserRelation::class);
    }

    public  function visa_info()
    {
        return $this->hasMany(Visainfo::class);
    }
    public function videos()
    {
        return $this->belongsToMany(Video::class,'progress')->withPivot('at');
    }
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone_number'
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
}

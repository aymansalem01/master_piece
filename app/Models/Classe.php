<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function coupon()
    {
        return $this->hasMany(Coupon::class);
    }

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }

    public function subscribtion()
    {
        return $this->hasMany(Subscribtion::class);
    }
}

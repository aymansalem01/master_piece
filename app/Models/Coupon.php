<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function classe()
    {
        return $this->belongsTo(Classe::class,'classe_id');
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribtion extends Model
{
    use HasFactory;
    protected $guarded = [];


    public  function classe()
    {
        return $this->belongsTo(Classe::class ,'classe_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public   function payment()
    {
        return $this->belongsTo(Payment::class , 'payment_id');
    }
}

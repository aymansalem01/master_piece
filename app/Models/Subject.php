<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function classe()
    {
        return $this->belongsTo(Classe::class,'classe_id');
    }

    public function vr()
    {
        return $this->hasMany(Vr::class);
    }

    public  function video()
    {
        return $this->hasMany(Video::class);
    }
}

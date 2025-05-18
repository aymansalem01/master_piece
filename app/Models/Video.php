<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function subject()
    {
        return $this->belongsTo(Subject::class , 'subject_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'progress')->withPivot('at');
    }
}

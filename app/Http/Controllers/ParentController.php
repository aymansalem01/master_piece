<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Progress;
use App\Models\UserRelation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParentController extends Controller
{
    public function index()
    {
        $children = UserRelation::with('child')->where('parent_id',auth()->user()->id)->get();

        return view('parent.parent',compact('children'));
    }
    public function child(string $id)
    {
        $child = User::with('videos')->where('id',$id)->first();
        return view('parent.child',compact('child'));
    }
}

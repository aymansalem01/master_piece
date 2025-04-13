<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Subject;
use App\Models\Vr;
use Illuminate\Http\Request;

class UsersideController extends Controller
{
    public function home()
    {
        return view('user.index');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function course()
    {
        $classes = Classe::get();
        return view('user.course',['classes' => $classes]);
    }
    public function subject(string $id)
    {
        $subjects = Subject::where('classe_id','=',$id)->get();
        return view('user.subject',['subjects' => $subjects]);
    }
    public function vr()
    {
        $vrs = Vr::with('subject')->get();
        return view('user.vr',['vrs' => $vrs]);
    }
}

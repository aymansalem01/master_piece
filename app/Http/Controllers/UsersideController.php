<?php

namespace App\Http\Controllers;

use App\Models\Vr;
use App\Models\Classe;
use App\Models\Subject;
use App\Models\Feedback;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function feedback(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'message' => 'required'
        ]);

        Feedback::create([
            'email' => $request->email,
            'message' => $request->message
        ]);
        return redirect()->back();
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required |unique:subscribes,email'
        ]);
        Subscribe::create([
            'email' => $request->email
        ]);
        return redirect()->back();
    }
}

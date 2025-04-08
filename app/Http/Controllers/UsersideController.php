<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        return view('user.course');
    }
    public function subject()
    {
        return view('user.subject');
    }
    public function vr()
    {
        return view('user.vr');
    }
}

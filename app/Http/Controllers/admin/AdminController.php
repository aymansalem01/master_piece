<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function feedback()
    {
        return view('admin.feedback');
    }
    public function subscribtion()
    {
        return view('admin.subscribtion');
    }
}

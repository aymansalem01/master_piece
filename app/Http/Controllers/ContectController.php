<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContectController extends Controller
{

    public function contact()
    {
        return view('user.contact');
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

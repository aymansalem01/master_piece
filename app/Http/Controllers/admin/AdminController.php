<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Payment;
use App\Models\Subscribe;
use App\Models\Subscribtion;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('admin.dashboard');
    }
    public function feedback()
    {
        $feedbacks = Feedback::paginate(15);
        $subscribes = Subscribe::paginate(15);
        return view('admin.feedback',['feedbacks' => $feedbacks , 'subscribes' => $subscribes]);
    }
    public function subscribtion()
    {
        $subscribtions = Subscribtion::with(['user','classe','payment'])->paginate(15);
        return view('admin.subscribtion',['subscribtions' => $subscribtions]);
    }
    public function payment()
    {
        $payments = Payment::with(['user','coupon'])->paginate(10);
        return view('admin.payment',['payments' => $payments]);
    }
}

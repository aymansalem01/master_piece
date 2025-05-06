<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Video;
use App\Models\Payment;
use App\Models\Subject;
use App\Models\Feedback;
use App\Models\Subscribe;
use App\Models\Subscribtion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vr;

class AdminController extends Controller
{
    public function dashboard()
    {
        $usersCount = User::count();
        $videosCount = Video::count();
        $subjectsCount = Subject::count();
        $vrsCount = Vr::count();
        $gamesCount = Video::where('has_game','!=',0)->count();
        $subscriptionsCount = Subscribtion::count();
        $paymentsCount = Payment::count();
        $totalRevenue = $subscriptionsCount*20;

        return view('admin.dashboard', compact(
            'usersCount',
            'videosCount',
            'subjectsCount',
            'vrsCount',
            'gamesCount',
            'subscriptionsCount',
            'paymentsCount',
            'totalRevenue'
        ));
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

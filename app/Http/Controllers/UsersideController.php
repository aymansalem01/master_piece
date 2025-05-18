<?php

namespace App\Http\Controllers;

use App\Models\Vr;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Video;
use App\Models\Classe;
use App\Models\Subject;
use App\Models\Feedback;
use App\Models\Visainfo;
use App\Models\Subscribe;
use App\Models\Subscribtion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Progress;
use App\Models\UserRelation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersideController extends Controller
{
    public function home()
    {
        return view('user.index');
    }


    public function course()
    {


        $classes = Classe::get();
        $subscribedClassIds = [];
        if (Auth::check()) {
            $subscribedClassIds = Subscribtion::where('user_id', auth()->user()->id)
                ->whereDate('start_date', '<=', Carbon::now())
                ->whereDate('end_date', '>=', Carbon::now())
                ->pluck('classe_id')
                ->toArray();
        }

        return view('user.course', [
            'classes' => $classes,
            'subscribedClassIds' => $subscribedClassIds,
        ]);
    }


    public function subject(string $id)
    {
        $subjects = Subject::where('classe_id', '=', $id)->get();
        return view('user.subject', ['subjects' => $subjects]);
    }


    public function vr()
    {
        $vrs = Vr::with('subject')->get();
        return view('user.vr', ['vrs' => $vrs]);
    }



    public function video(string $id)
    {
        Progress::create([
            'user_id' => auth()->user()->id,
            'video_id' => $id,
            'at' => Carbon::now()
        ]);
        $videos = Video::where('subject_id', '=', $id)->get();
        $show = Video::where('subject_id', '=', $id)->first();
        return view('user.video', ['videos' => $videos, 'show' => $show]);
    }
    public function show(string $id)
    {
        $show = Video::find($id);
        Progress::create([
            'user_id' => auth()->user()->id,
            'video_id' => $id,
            'at' => Carbon::now()
        ]);
        $videos = Video::where('subject_id', '=', $show->subject_id)->get();
        return view('user.video', ['videos' => $videos, 'show' => $show]);
    }

    public function dashboard()
    {
        $parent = UserRelation::with('parent')->where('child_id', auth()->user()->id)->first();
        $subscribtion = Subscribtion::where('user_id', auth()->user()->id)->with('classe')->first();
        return view('user.dashboard', ['subscribtion' => $subscribtion, 'parent' => $parent]);
    }
    public function addparent(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|',
            'phone_number' => 'required|regex:/^07[0-9]{8}$/',
        ]);
        $parent = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'parent',
            'phone_number' => $request->phone_number,
        ]);
        UserRelation::create([
            'parent_id' => $parent->id,
            'child_id' => auth()->user()->id
        ]);
        return redirect()->route('dashboard')->with('success', 'parent added successfuly');
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Classe;
use App\Models\Coupon;
use App\Models\Payment;
use App\Models\Visainfo;
use App\Models\Subscribtion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store()
    {
        $classes = Classe::get();
        $visa_info = Visainfo::where('user_id','1')->first();
        return view('user.store',['classes' => $classes,'visa_info'=>$visa_info]);
    }


    public function visa(Request $request)
    {
        $request->validate([
            'class' => 'required',
            'visa_no' => 'required |min:16 |max:16',
            'visa_name' => 'required',
            'visa_code' => 'required |min:3 |max:5'
        ]);
        $visa_info = Visainfo::find(Auth::user()->id);
        if ($visa_info == null) {
            Visainfo::create([
                'user_id' => Auth::user()->id,
                'visa_no' => $request->visa_no,
                'visa_name' => $request->visa_name,
                'visa_code' => $request->visa_code
            ]);
        }
        $payment = Payment::create([
            'user_id' => Auth::user()->id,
            'payment_type' => 'visa',
            'payment_date' => Carbon::now(),
        ]);
        Subscribtion::create([
            'user_id'   => Auth::user()->id,
            'classe_id' => $request->class,
            'vr_access' => $request->vr_access,
            'start_date' => Carbon::now(),
            'end_date'   => Carbon::now()->addMonths(3),
            'payment_id' => $payment->id
        ]);
        return redirect()->back()->with(['success' => 'thanks for join us']);
    }


    public function coupon(Request $request)
    {
        $request->validate([
            'coupon' => 'required'
        ]);
        $coupon = Coupon::where('code', $request->coupon)->first();
        if ($coupon == null) {
            return redirect()->back()->with(['error' => 'coupon not found']);
        }
        if($coupon->use_at != null)
        {
            return redirect()->back()->with(['error'=>'coupon already used']);
        }
        $coupon->update([
            'use_at' => Carbon::now()
        ]);
        $payment = Payment::create([
            'user_id' => Auth::user()->id,
            'payment_type' => 'coupon',
            'coupon_id' => $coupon->id,
            'payment_date' => Carbon::now(),
        ]);

        Subscribtion::create([
            'user_id' => Auth::user()->id,
            'classe_id' => $coupon->classe_id,
            'vr_access' => $coupon->vr_access,
            'start_date' => Carbon::now(),
            'end_date'   => Carbon::now()->addMonths(3),
            'payment_id' => $payment->id
        ]);
        return redirect()->back()->with(['success'=>'thank you for join us']);
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{

    public function index()
    {
        $coupons = Coupon::with('classe')->paginate(10);
        return view('admin.coupon.coupon',['coupons' => $coupons]);
    }

    public function create()
    {
        $classes = Classe::get();
        return view('admin.coupon.create',['classes' => $classes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required | min:10 ',
            'class' => 'required',
            'vr_access' => 'required'
        ]);
        Coupon::create([
            'code' => $request->code,
            'classe_id' => $request->class,
            'vr_access' => $request->vr_access
        ]);
        return redirect()->back()->with('success','coupon created successfully');
    }

    public function show(string $id)
    {
        $coupon =  Coupon::with('classe')->find($id);
        return view('admin.coupon.show',['coupon' => $coupon]);
    }

    public function edit(string $id)
    {
        $coupon = Coupon::find($id);
        $classes = Classe::get();
        return view('admin.coupon.edit',['classes' => $classes, 'coupon'=>$coupon]);

    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'code' => 'required | min:10 ',
            'class' => 'required',
            'vr_access' => 'required'
        ]);
        Coupon::find($id)->update([
            'code' => $request->code,
            'classe_id' => $request->class,
            'vr_access' => $request->vr_access
        ]);
        return redirect()->back()->with('success', 'Coupon updated successfully!');
    }

    public function destroy(string $id)
    {
        Coupon::destroy($id);
        return redirect()->back()->with('success', 'Coupon deleted successfully!');
    }
    }

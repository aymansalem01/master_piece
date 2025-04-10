<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.coupon.coupon');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.coupon.createcoupon');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


        return view('admin.coupon.showcoupon');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        return view('admin.coupon.editcoupon');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

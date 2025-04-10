<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user.user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.user.createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        return view('admin.user.createuser');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


        return view('admin.user.showuser');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        return view('admin.user.edituser');

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

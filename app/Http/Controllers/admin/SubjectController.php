<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.subject.subject');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


        return view('admin.subject.show');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {



        return view('admin.subject.edit');

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

<?php

namespace App\Http\Controllers\admin;

use App\Models\Vr;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VrController extends Controller
{

    public function index()
    {
        $vrs = Vr:: with('subject')->get();
        return view('admin.vr.vr',['vrs' => $vrs]);
    }

    public function create()
    {
        $subjects = Subject::get();
        return view('admin.vr.create',['subjects' => $subjects]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'subject' => 'required'
        ]);
        $image_path = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);

        Vr::create([
            'title' => $request->title,
            'link' => $request->link,
            'image' => $image_path,
            'subject_id' => $request->subject
        ]);
        return $this->index();
    }

    public function show(string $id)
    {
        $vr = Vr::with('subject')->find($id);
        return view('admin.vr.show',['vr' =>$vr]);
    }

    public function edit(string $id)
    {
        $vr = Vr::with('subject')->find($id);
        $subjects = Subject::get();
        return view('admin.vr.edit',['vr'=>$vr,'subjects' => $subjects]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'subject' => 'required'
        ]);
        $image_path = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);
        Vr::find($id)->updated([
            'title' => $request->title,
            'link' => $request->link,
            'image' => $image_path,
            'subject_id' => $request->subject
        ]);
        return $this->index();
    }

    public function destroy(string $id)
    {
        Vr::destroy($id);
        return $this->index();
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index()
    {
        $subjects = Subject::with('classe')->paginate(6);
        return view('admin.subject.subject',['subjects' => $subjects]);
    }

    public function create()
    {
        $classes = Classe::get();
        return view('admin.subject.create',['classes' => $classes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'class' => 'required'
        ]);
        $image_path = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);
        Subject::create([
            'name' => $request->name,
            'image' => $image_path,
            'classe_id' => $request->class
        ]);
        return redirect()->back()->with('success', 'subject added successfully!');
    }

    public function show(string $id)
    {
        $subject =  Subject::with('classe')->find($id);
        return view('admin.subject.show',['subject' => $subject]);

    }

    public function edit(string $id)
    {
        $subject = Subject::with('classe')->find($id);
        $classes = Classe::get();
        return view('admin.subject.edit',['subject'=>$subject,'classes'=>$classes]);

    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'class' => 'required'
        ]);
        $subject = Subject::find($id);

        if($request->image != null){
            $image_path = uniqid() . '-' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $image_path);
        }else{
            $image_path = $subject->image;
        }

        $subject->update([
            'name' => $request->name,
            'image' => $image_path,
            'classe_id' => $request->class
        ]);
        return redirect()->back()->with('success', 'subject updated successfully!');
    }

    public function destroy(string $id)
    {
        Subject::destroy($id);
        return redirect()->back()->with('success', 'subject deleted!');
    }
}

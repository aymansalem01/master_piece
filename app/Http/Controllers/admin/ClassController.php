<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Classe::get();
        return view('admin.classe.classes',['classes' => $classes ]);
    }

    public function create()
    {

        return view('admin.classe.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'integer | required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $image_path = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);

        Classe::create([
            'name' => $request->name ,
            'price' => $request->price,
            'image' => $image_path
        ]);
        return $this->index();
    }

    public function show(string $id)
    {

        return view('admin.classe.show');
    }

    public function edit(string $id)
    {
        $class = Classe::find($id);
        return view('admin.classe.edit',['class' => $class]);

    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'integer | required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $image_path = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);

        Classe::find($id)->updated([
            'name' => $request->name ,
            'price' => $request->price,
            'image' => $image_path
        ]);
        return $this->index();
    }

    public function destroy(string $id)
    {
        //
    }
}

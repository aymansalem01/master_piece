<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class User_adminController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.user.user',['users' => $users]);
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone_number' => 'required|regex:/^07[0-9]{8}$/',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role' => 'user'
        ]);
        return $this->index();
    }

    public function show(string $id)
    {
        $user = User::find($id);
        return view('admin.user.show',['user' => $user]);

    }
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.user.edit',['user' => $user]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone_number' => 'required|regex:/^07[0-9]{8}$/',
            'password' => 'required|min:8',
        ]);
        User::find($id)->update([
                'name' => $request->name,
                // 'phone_number' => $request->phone_number,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);


        return redirect()->back()->with(['message' => 'No changes detected']);
    }

    public function destroy(string $id)
    {
        User::destroy($id);
        return $this->index();
    }
}

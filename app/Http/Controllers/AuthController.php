<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'phone_number' => 'required|regex:/^07[0-9]{8}$/',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role' => 'user'
        ]);

        return redirect()->route('log');
    }

    public  function login(Request $request)
    {
        $request->validate([
            'email' => 'required | email ',
            'password' => 'required | min:8'
        ]);
        if(Auth::check()){
            Auth::logout();
        }
        $user = User::where('email', '=', $request->email)->first();
        if (Hash::check($request->password, $user->password)) {
            Auth::login(user: $user);
            $user->createToken($user->email)->accessToken;
            if ($user->role == 'user') {
                return redirect()->route('home');
            }
            if ($user->role == 'admin') {
                return redirect()->route('admin');
            }
            if ($user->role == 'parent') {
                return redirect()->route('owner');
            }
        } else {
            return redirect()->back()->with(['password' => 'wrong password']);
        }
    }

    public function logout()
    {
        $id = auth()->user()->id;
        Auth::user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        Auth::logout();
        return redirect()->route('log');
    }

    public function edit()
    {
        $id = auth()->user()->id;
        return redirect()->route('edit', $id);
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone_number' => 'required|regex:/^07[0-9]{8}$/',
            'password' => 'required|min:8|confirmed',
        ]);
        $user = User::find($id);
        if ($user->name != $request->name || $user->phone_number != $request->phone_number) {
            $user->update([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->back()->with(['success' => 'Update successful']);
        }

        return redirect()->back()->with(['success' => 'No changes detected']);
    }
}

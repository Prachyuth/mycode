<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function register(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role_id' =>  'required'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => $request->input('role_id')
        ]);

        Auth::login($user);

        if ($request->input('role_id') == 1) { // Redirect admin user to admin dashboard
            return  redirect()->route('admin');
        } else if ($request->input('role_id') == 2) { // Redirect regular user to regular dashboard
            return  redirect()->route('home');
        } else if ($request->input('role_id') == 3) { // Redirect regular user to regular dashboard
            return  redirect()->route('clienthome');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
             $user = Auth::user();
             if ($user->role_id == 1) { // Redirect admin user to admin dashboard
                return redirect()->route('admin');
            } else if ($user->role_id == 2) { // Redirect regular user to regular dashboard
                return redirect()->route('home');
            }else if ($user->role_id == 3) { // Redirect regular user to regular dashboard
                return redirect()->route('clienthome');
            }

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

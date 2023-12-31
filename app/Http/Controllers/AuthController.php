<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $users = new User();

        $users->nama = $request->nama;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);

        $users->save();
        return back()->with('success', 'Register successfully');
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)){
            return redirect('home')->with('success', 'Login Success');
        }
        return back()->with('error', 'Error Email or Password');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

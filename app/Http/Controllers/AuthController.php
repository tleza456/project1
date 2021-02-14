<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function doLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect("/");
        }
        return back()->withErrors(["message" => "ไม่พบข้อมูลที่กรอกเข้ามา"]);
    }
    public function register()
    {
        return view('auth.register');
    }
    public function doRegister(Request $request)
    {
    }
    public function logout()
    {
        auth::logout();
        return redirect('/auth/login');
    }
}

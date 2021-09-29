<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_GET(Request $request)
    {
        return view('fronts.admin.auth.login');
    }
    public function login_POST(Request $request)
    {
        
        $validated = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:6|max:25',
        ]);

        if ( $x = Auth::attempt(['email' => $request->email, 'password' => $request->password]) ) {
       
            return redirect('/admin');
        }

        return redirect()->back()->with('error', 'E-Posta veya Şifre hatalı, lütfen tekrar deneyin.')->withInput();
    }
    public function logout()
    {
        Auth::logout();
        
        return redirect('/');
    }
}

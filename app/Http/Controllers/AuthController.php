<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);
        $user = User::where('email', $request->email)->first();
        if ($user && \password_verify($request->password, $user->password)) {
            // simplified auth demo — in real app use Auth::login()
            session(['user_id' => $user->id]);
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['email'=>'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        return redirect('/');
    }
}

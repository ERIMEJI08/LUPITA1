<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->rol==='administrador'){
                return redirect()->route('dashboard');
            }

            return redirect()->route('home');
        } else {

            return back()->withErrors(['email' => 'Las credenciales no coinciden.']);
        }
    }


    public function showDashboard()
    {
        return view('dashboard');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        Auth::login($user);


        return redirect()->route('dashboard');
    }


    public function showRegisterForm()
    {
        return view('auth.register');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authenticateController extends Controller
{
    public function Login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'min:8|required',
        ]);

        if (Auth::attempt($validateData)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') { {
                    return redirect()->intended('dashboard');
                }
                return redirect('/');
            }
        }
        
        return back()->with('loginError', 'Email or Password is Wrong!');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'min:8|required',
        ]);

        $user = User::create($validateData);
        Auth::login($user);

        return redirect('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

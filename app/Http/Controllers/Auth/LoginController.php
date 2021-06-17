<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
     return view('auth.login');
    }

    public function signInUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Invalid login credentials.');
        }

        //redirect
        return redirect()->route('dashboard');
    }
}

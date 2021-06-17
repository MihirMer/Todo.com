<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view("auth.register");
    }

    public function registerUser(Request $request){
        //validate
        $this->validate($request, [
            'first-name' => 'required|max:255',
            'last-name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        //store
        User::create([
           'username' => $request->username,
           'first-name' => $request->post('first-name'),
           'last-name' => $request->post('last-name'),
           'email' => $request->email,
           'password' => Hash::make($request->password),

        ]);

        //sign user in
        auth()->attempt($request->only('email', 'password'));

        //redirect
        return redirect()->route('dashboard');

    }
}

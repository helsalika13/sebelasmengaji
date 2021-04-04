<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('showlogin');
    }

    public function login(Request $request)
    {
        $data = [
            'username'     => $request->input('username'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);
        dd($data);

        if (Auth::check()) {
            if (auth()->user()->role == 'superadmin') {
                return redirect()->route('superadmin');
            } else if (auth()->user()->role == 'admin') {
                return redirect()->route('admin');
            }
        } else { // false

            //Login Fail
            return redirect()->route('showlogin');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Teacher;

class MasukController extends Controller
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



    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('showlogin');
    }

    public function profile()
    {
        if (Auth::user()->role == 'superadmin') {
            $user = User::where('username', Auth::user()->username)->get();
            return view('sadmin.profile', compact('user'));
        } else if (Auth::user()->role == 'admin') {
            $user = User::where('nip_nis', Auth::user()->nip_nis)->get();
            return view('admin.profile', compact('user'));
        }
    }

    public function updateprofile(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (Auth::user()->role == 'superadmin') {
            return redirect()->route('sprofile');
        } else if (Auth::user()->role == 'admin') {
            return redirect()->route('profile');
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    public function login(Request $request)
    {
        $inputVal = $request->all();

        if (Auth::attempt(array('username' => $inputVal['username'], 'password' => $inputVal['password']))) {
            if (auth()->user()->role == 'superadmin') {
                return redirect()->route('superadmin');
            } else if (auth()->user()->role == 'admin') {
                return redirect()->route('admin');
            } else if (auth()->user()->role == 'srohani') {
                return redirect()->route('srohani');
            }
        }
    }
}

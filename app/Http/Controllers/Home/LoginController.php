<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('front.login');
    }

    public function forget_password()
    {
        return view('front.forget-password');
    }
    public function company_login_submit(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = [
            'username' =>$request->username,
            'password' =>$request->password
        ];
        if(Auth::guard('company')->attempt($credentials)){
            return redirect()->route('company_dashboard');
        }
        else{
            return redirect()->route('home_login')->with('error', 'Information is not correct');
        }

       
    }
}

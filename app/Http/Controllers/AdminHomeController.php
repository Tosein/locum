<?php

namespace App\Http\Controllers;

use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function admin_login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

       if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin_home');
       }else{
        return redirect()->route('admin_login')->with('error', 'wrong login details!');
       }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
    public function forget_password()
    {
        return view('admin.forget_password');
    }
    public function admin_forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $admin_data = Admin::where('email',$request->email)->first();
        if(!$admin_data)
        {
            return redirect()->back()->with('error', 'Email Address not found');
        }

        $token = hash('sha256', time());
        $admin_data->$token = $token;
        // $admin_data->update();



        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = "Reset Password";
        $message = 'Please click on the following link: <br>';
        $message .= '<a href=" '.$reset_link.' ">Click here</a>';

        Mail::to($request->email)->send(new Websitemail($subject , $message));

        return redirect()->route('admin_login')->with('success', 'A reset link sent to your emaill address');
    }

    public function admin_reset_password($token, $email)
    {
        $admin_data = Admin::where('token',$token)->where('email', $email)->first();
        if(!$admin_data){
            return redirect()->route('admin_login');
        }

        return view('admin.reset_password');
    }

    public function admin_reset_password_submit()
    {
        
    }
}
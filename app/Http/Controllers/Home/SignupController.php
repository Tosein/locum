<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;
use App\Models\Company;
use App\Models\Dentist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('front.signup');
    }

    public function company_signup_submit(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'contact_name' => 'required',
            'username' => 'required|unique:companies',
            'email' => 'required|email|unique:companies',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256',time());

        $company_signup = new Company();
        $company_signup->company_name = $request->company_name;
        $company_signup->contact_name = $request->contact_name;
        $company_signup->username = $request->username;
        $company_signup->email = $request->email;
        
        $company_signup->password = Hash::make($request->password);
        $company_signup->token = $token;
        $company_signup->save();


        return redirect()->route('home_login')->with(`success`, 'A message is sent to your email address');
    }

    public function dentist_signup_submit(Request $request)
    {
        $request->validate([
            'dentist_name' => 'required',
            'username' => 'required|unique:dentists',
            'email' => 'required|email|unique:dentists',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256',time());

        $dentist_signup = new Dentist();
        $dentist_signup->dentist_name = $request->dentist_name;
        $dentist_signup->username = $request->username;
        $dentist_signup->email = $request->email;
        $dentist_signup->password = Hash::make($request->password);
        $dentist_signup->token = $token;
        $dentist_signup->status = 0;
        $dentist_signup->save();

        $verify_link = url('dentist_signup_verify/'.$token.'/'.$request->email);
        $subject = "Dentist Signup verification";
        $message = 'Please click on the following link: <br>';
        $message .= '<a href=" '.$verify_link.' ">Click here</a>';

        Mail::to($request->email)->send(new Websitemail($subject , $message));

        return redirect()->route('home_login')->with('success', 'An email is sent to your email address. You must confirm your email to validate your signup');
    }

    public function dentist_signup_verify($token, $email)
    {
        $dentist_data = Dentist::where('token', $token)->where('email', $email)->first();
        if(!$dentist_data)
        {
            return redirect()->route('login');
        }

        $dentist_data->token = '';
        $dentist_data->status = 1;
        $dentist_data->update();

        return redirect()->route('home_login')->with('success', 'Your email is verified successfully. You can now login to the system');
    }
}



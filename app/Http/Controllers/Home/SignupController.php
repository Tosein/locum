<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Company;
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
            'dentist_username' => 'required|unique:dentists',
            'dentist_email' => 'required|email|unique:dentist',
            'dentist_password' => 'required',
            'retype_password' => 'required|same:dentist_password'
        ]);

        $token = hash('sha256',time());

        $dentist_signup = new Company();
        $dentist_signup->dentist_name = $request->dentist_name;
        $dentist_signup->dentist_username = $request->dentist_username;
        $dentist_signup->dentist_email = $request->dentist_email;
        $dentist_signup->email = $request->email;
        
        $dentist_signup->dentist_password = Hash::make($request->dentist_password);
        $dentist_signup->token = $token;
        $dentist_signup->save();


        return redirect()->route('home_login')->with(`success`, 'A message is sent to your email address');
    }
}



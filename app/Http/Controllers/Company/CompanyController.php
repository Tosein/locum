<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function dashboard()
    {
        return view('company.dashboard');
    }
    public function edit_profile()
    {

        return view('company.edit_profile');
    }

    public function edit_profile_update()
    {
        
    }
}

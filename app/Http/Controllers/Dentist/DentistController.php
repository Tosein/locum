<?php

namespace App\Http\Controllers\Dentist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DentistController extends Controller
{
    public function dashboard()
    {
        return view('dentist.dashboard');
    }

    public function edit_profile()
    {

        return view('dentist.edit_profile');
    }

    public function edit_profile_update()
    {
        return view('dentist.edit_profile');
    }

    public function education()
    {
        return view('dentist.education');
    }

    public function experience()
    {
        return view('dentist.experience');
    }

    public function skill()
    {
        return view('dentist.skill');
    }

    public function resume()
    {
        return view('dentist.resume');
    }
}

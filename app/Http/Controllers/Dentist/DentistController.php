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
}

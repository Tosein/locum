<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageOtherItem;

class AdminOtherPageController extends Controller
{
    public function index()
    {
        $page_other_data = PageOtherItem::where('id',1)->first();
        return view('admin.page_other', compact('page_other_data'));
    }

    public function update(Request $request)
    {
        $page_other_data = PageOtherItem::where('id',1)->first();

        $request->validate([
            'login_page_heading' => 'required',
            'signup_page_heading' => 'required',
            'forget_password_page_heading' => 'required',
        ]);
    }
}

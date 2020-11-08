<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RisyuController extends Controller
{
    public function create()
    {
        return view('registration');
    }
    public function confirm()
    {
        return view('confirm');
    }
    public function subjectIndex()
    {
        return view('course_list');
    }
    public function creditIndex()
    {
        return view('get_credit');
    }
    public function graduationSetting()
    {
        return view('graduation_credit');
    }
    public function passwordEdit()
    {
        return view('password_change');
    }
}
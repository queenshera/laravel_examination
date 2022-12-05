<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function contact_submit(Request $request)
    {
        return $request->all();
    }
}

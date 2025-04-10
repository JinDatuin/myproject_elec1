<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('layout.dashboardpage');
    }
    public function about()
    {
        return view('layout.aboutuspage');
    }
    public function contact()
    {
        return view('layout.contactuspage');
    }

}

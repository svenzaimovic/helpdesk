<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function contact()
    {
        return view('contact');
    }

    public function incident()
    {
        return view('incident');
    }

}

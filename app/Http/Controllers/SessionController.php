<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Request $request)
    {
      
        !$request->session()->has('session') ? $request->session()->put("session", false) : $request->session()->put('session', true);
  
        return view('session');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Request $request)
    {
      
        if(!$request->session()->has('session')){
            $request->session()->put("session", false);
        }
        else if($request->session()->get('session') == false){
            $request->session()->put('session', true);
        }
        return view('session');
    }
}

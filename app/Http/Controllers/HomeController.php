<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(Request $request){
        session()->put('email', $request->email);
        return view('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function logout(Request $request)
    {
        session()->forget('email');
        return $this->home();

    }

    public function faq()
    {
        return view('faq');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrackProgessRequest;
use DB;

class LoginController extends Controller
{
    public function create()
    {
        if(session()->has('email')) {
            $tickets = DB::table('tickets')->get();
            return view('tickets', ['tickets' => $tickets]);
        }
        else
            return view('login');
    }
    public function store(TrackProgessRequest $request)
    {
        session()->put('email', $request->email);
        $tickets = DB::table('tickets')->get();
        return view('tickets', ['tickets' => $tickets]);
    }
}

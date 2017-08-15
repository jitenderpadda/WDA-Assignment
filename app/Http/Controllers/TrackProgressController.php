<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrackProgessRequest;

class TrackProgressController extends Controller
{
    public function create()
    {
        if(session()->has('email'))
            return view('tickets');
        else
            return view('trackProgress');
    }
    public function store(TrackProgessRequest $request)
    {
        session()->put('email', $request->email);
        return view('tickets');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrackProgessRequest;

class TrackProgressController extends Controller
{
    public function create()
    {
        return view('trackProgress');
    }
    public function store(TrackProgessRequest $request)
    {
        return view('tickets');
    }
}

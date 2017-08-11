<?php

namespace App\Http\Controllers;

use App\Http\Requests\RaiseTicketFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RaiseTicketController extends Controller
{
    public function create()
    {
        return view('requestForm');
    }
    public function store(RaiseTicketFormRequest $request)
    {
        return view('trackProgress');
    }
}

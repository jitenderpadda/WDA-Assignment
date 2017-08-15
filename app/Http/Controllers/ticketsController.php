<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ticketsController extends Controller
{
    public function index()
    {
        $tickets = DB::table('tickets')->get();
        return view('tickets', ['tickets' => $tickets]);
    }
}

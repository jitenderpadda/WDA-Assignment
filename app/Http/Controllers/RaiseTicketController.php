<?php

namespace App\Http\Controllers;

use App\Http\Requests\RaiseTicketFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Ticket;

class RaiseTicketController extends Controller
{
    public function create()
    {
        return view('raiseTicket');
    }
    public function store(RaiseTicketFormRequest $request)
    {
        $ticket = $request->all();
        $ticket['status'] = 'pending';
        Ticket::create($ticket);
        return redirect()->route('viewTickets');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\RaiseTicketFormRequest;
use App\Mail\TicketRaised;
use App\Ticket;
use Illuminate\Support\Facades\Mail;


class RaiseTicketController extends Controller
{
    public function create()
    {
        return view('raiseTicket');
    }
    public function store(RaiseTicketFormRequest $request)
    {

        $ticket = $request->all();
        $ticket['status'] = 'Pending';
        Ticket::create($ticket);

        //mail
        Mail::to($request->email)->send(new TicketRaised($request));

        return redirect()->route('viewTickets.index');
    }
}

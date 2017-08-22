<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketRaised extends Mailable
{
    use Queueable, SerializesModels;
    protected $request;
    public function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function build()
    {
        return $this->view('email.mailRaiseTicket')->with([
            'name'=>$this->request->name,
            'email'=>$this->request->email,
            'software_issue'=>$this->request->software_issue,
            'operating_system'=>$this->request->operating_system,
            'comment'=>$this->request->comment
        ])->subject('Ticket raised with ITS');
    }
}

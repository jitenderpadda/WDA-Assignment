<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Ticket;
use Illuminate\Support\Facades\Session;
use View;
use App\Http\Requests\CommentRequest;

class ViewTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tickets = Ticket::orderBy('id', 'DESC')->where('email', session()->get('email'))->paginate(10);
        return view('Ticket.index', compact('tickets'))->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comment::all()->where('ticket_id',$id);
        $ticket = Ticket::find($id);
        return view('Ticket.show', compact('ticket', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, $id)
    {
        $comment = $request->all();
        $comment['ticket_id'] = $id;
        $comment['email']=session()->get('email');
        Comment::create($comment);

        $data = array(
            'status' => 'In Progress'
        );
        Ticket::find($id)->update($data);

        return redirect()->route('viewTickets.show', $id)->with('success', 'Comment added successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = array(
            'status' => 'Closed'
        );
        Ticket::find($id)->update($data);
        return redirect()->route('viewTickets.show', $id)->with('success', 'Ticket successfully closed');
    }
}

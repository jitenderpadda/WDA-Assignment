<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class APITicketController extends Controller
{
    public function index()
    {
        $tickets=Ticket::all();
        if (!$tickets) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $tickets,
            200
        );
    }

    public function show($id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $book = Ticket::find($id);

        return response()->json([
            $book,
        ], 200);
    }

    public function store(Request $request)
    {
        return Ticket::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());

        return $ticket;
    }

    public function delete(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return 204;
    }
}

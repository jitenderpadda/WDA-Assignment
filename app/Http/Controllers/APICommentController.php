<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class APICommentController extends Controller
{
    public function index($ticketId)
    {

        $Comments=Comment::where("ticket_id",$ticketId)->get();
        if (!$Comments) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $Comments,
            200
        );
    }

    public function show($id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $book = Comment::find($id);

        return response()->json([
            $book,
        ], 200);
    }

    public function store(Request $request)
    {
        return Comment::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Comment = Comment::findOrFail($id);
        $Comment->update($request->all());

        return $Comment;
    }

    public function delete(Request $request, $id)
    {
        $Comment = Comment::findOrFail($id);
        $Comment->delete();

        return 204;
    }
}

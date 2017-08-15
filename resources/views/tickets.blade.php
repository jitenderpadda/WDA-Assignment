
@extends('shared.master')
@section('title', 'ITS')
@section('content')
    <p>Tickets session</p>
            {{Session::get('email')}}
@endsection
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Comment</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->name}}</td>
                    <td>{{$ticket->email}}</td>
                    <td>{{$ticket->status}}</td>
                    <td>{{$ticket->comment}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
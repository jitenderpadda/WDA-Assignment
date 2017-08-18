@extends('shared.master')
@section('title', 'ITS')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Comment</th>
        </tr>
        @foreach ($tickets as $ticket)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{$ticket->name}}</td>
                <td>{{$ticket->email}}</td>
                <td>{{$ticket->status}}</td>
                <td>{{$ticket->comment}}</td>
            </tr>
        @endforeach
    </table>
    {!! $tickets->render() !!} <!--for pagination-->
@endsection
@extends('shared.master')
@section('title', 'ITS')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
        <div class="tickets">
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Issue Id</th>
                <th>Name</th>
                <th>Software Issue</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>TCK-{{$ticket->id}}</td>
                    <td><a href="{{ route('viewTickets.show',$ticket->id) }}">{{$ticket->name}}</a>
                    </td>
                    <td>{{$ticket->software_issue}}</td>
                    <td>{{$ticket->status}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('viewTickets.show',$ticket->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </table>
    {!! $tickets->render() !!} <!--for pagination-->
        </div>
    </div>
@endsection
@extends('shared.master')
@section('title', 'ITS')
@section('content')

    <div class="container">
        <div class="tickets">
        <table class="table table-striped table-hover">
            <tr>
                <th>#</th>
                <th>Issue Id</th>
                <th>Name</th>
                <th>Software Issue</th>
                <th>Status</th>
                <th></th>
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
                        <a href="{{ route('viewTickets.show',$ticket->id) }}" class="btn btn-info">
                            <span class="glyphicon glyphicon-eye-open"></span> View
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    {!! $tickets->render() !!} <!--for pagination-->
        </div>
    </div>
@endsection
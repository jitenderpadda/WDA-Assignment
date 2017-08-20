@extends('shared.master')
@section('title', 'ITS')
@section('content')
    <div class="container tickets">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <div class="well">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Ticket ID:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">TCK-{{ $ticket->id}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Raised By:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{ $ticket->name}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="contact">Contact Details:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{ $ticket->email}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="software issue">Software Issue:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{ $ticket->software_issue}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="software issue">Operating System:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{ $ticket->operating_system}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="software issue">Comments:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{ $ticket->comment}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="software issue">Status:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{ $ticket->status}}</p>
                    </div>
                </div>
            </form>
        </div>
        @foreach ($comments as $comment)
            <div class="well">
                <p>Comment: {{ $comment->description}}</p>
                <p>Commented By:{{ $comment->email}}</p>
                <p>Commented On:{{ $comment->created_at}}</p>
            </div>
        @endforeach
        <div>
            {!! Form::model($ticket, ['method' => 'PATCH','route' => ['viewTickets.update', $ticket->id]]) !!}
            <div class="form-group">
                {!! Form::label('Comment') !!}
                {!! Form::textarea('description', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Comment')) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit Comment',
                  array('class'=>'btn btn-success request-submit-button')) !!}
            </div>
        </div>
        {!! Form::close() !!}
        {!! Form::open(['method' => 'DELETE','route' => ['viewTickets.destroy', $ticket->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Close Ticket', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection
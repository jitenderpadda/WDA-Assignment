@extends('layouts.app')
@section('title', 'ITS')
@section('content')
    <div class="container tickets">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p><span class="glyphicon glyphicon-alert"></span>{{ $message }}</p>
            </div>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li><span class="glyphicon glyphicon-alert"></span>{{ $error }}</li>
            @endforeach
        </ul>
        <div class="well">
            <form class="form-horizontal">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="name">Ticket
                                ID:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <p class="form-control-static">TCK-{{ $ticket->id}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="name">Raised
                                By:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <p class="form-control-static">{{ $ticket->name}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="contact">Contact
                                Details:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <p class="form-control-static">{{ $ticket->email}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="software issue">Software
                                Issue:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <p class="form-control-static">{{ $ticket->software_issue}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="software issue">Operating
                                System:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <p class="form-control-static">{{ $ticket->operating_system}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3" for="software issue">Status:</label>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                @if($ticket->status == "Pending")
                                    <p style="color: red" class="form-control-static">{{ $ticket->status}}</p>
                                @elseif($ticket->status == "Closed")
                                    <p style="color: green" class="form-control-static">{{ $ticket->status}}</p>
                                @else
                                    <p style="color: #1f648b" class="form-control-static">{{ $ticket->status}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3" for="software issue">Comments:</label>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <p class="form-control-static">{{ $ticket->comment}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @foreach ($comments as $comment)
            <div class="well">
                <form class="form-horizontal">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="software issue">Comment:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <p class="form-control-static">{{ $comment->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="software issue">Commented By:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <p class="form-control-static">{{ $comment->email}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="software issue">Commented At:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <p class="form-control-static">{{ $comment->created_at}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        @endforeach
    </div>
@endsection
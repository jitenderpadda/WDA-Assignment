@extends('layouts.app')
@section('title', 'Submit Request')
@section('content')
    <div class="container request-form">
        <h1>RAISE TICKET</h1>
        <ul>
            @foreach($errors->all() as $error)
                <li><span class="glyphicon glyphicon-alert"></span>{{ $error }}</li>
            @endforeach
        </ul>
        {!! Form::open(array('route' => 'raiseTicket_store', 'class' => 'form')) !!}
        <div class="form-group">
            {!! Form::label('Your Name') !!}
            {!! Form::text('name', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your name')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your E-mail Address') !!}
            <input value="{{ Auth::user()->email }}" type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            {!! Form::label('Software Issue') !!}
            {!! Form::text('software_issue', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Issue Summary')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Operating System') !!}
            {!! Form::text('operating_system', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Operating System')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Comment') !!}
            {!! Form::textarea('comment', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Comment')) !!}
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-success request-submit-button">
                <span class="glyphicon glyphicon-plus-sign"></span> Raise Ticket
            </button>
        </div>

        {!! Form::close() !!}
    </div>
@endsection
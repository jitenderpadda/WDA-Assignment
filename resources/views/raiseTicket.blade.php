@extends('shared.master')
@section('title', 'Submit Request')
@section('content')
    <div class="container request-form">
        <h1>RAISE TICKET</h1>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
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
            {!! Form::text('email', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your e-mail address')) !!}
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
                      'placeholder'=>'Software Issue')) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Raise Ticket',
              array('class'=>'btn btn-success request-submit-button')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
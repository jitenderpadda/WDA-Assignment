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
        {!! Form::open(array('route' => 'raise_ticket_store', 'class' => 'form')) !!}
        <div class="form-group">
            {!! Form::label('Service Area') !!}
            {{ Form::select('department', [
                'RMIT Training' => 'RMIT Training',
                'Buisness Systems' => 'Buisness Systems',
                'ARG' => 'ARG',
                'Human Resources' => 'Human Resources',
                'Web and Digital Services' => 'Web and Digital Services',
                'Information Technology' => 'Information Technology'],
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Service Area')
            ) }}
        </div>
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
            {!! Form::label('Subject') !!}
            {!! Form::text('subject', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Issue Summary')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your Issue') !!}
            {!! Form::textarea('issue', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your Issue')) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Raise Ticket',
              array('class'=>'btn btn-primary request-submit-button')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
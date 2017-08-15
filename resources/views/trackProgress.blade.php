@extends('shared.master')
@section('title', 'Track Progress')
@section('content')
    <div class="container request-form">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        {!! Form::open(array('route' => 'track-progress-store', 'class' => 'form')) !!}
        <div class="form-group">
            {!! Form::label('Your E-mail Address') !!}
            {!! Form::text('email', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your e-mail address')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Show Ticket',
              array('class'=>'btn btn-success request-submit-button')) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
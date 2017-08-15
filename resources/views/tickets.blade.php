
@extends('shared.master')
@section('title', 'ITS')
@section('content')
    <p>Tickets session</p>
            {{Session::get('email')}}
@endsection
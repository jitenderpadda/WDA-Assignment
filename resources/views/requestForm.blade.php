@extends('shared.master')
@section('title', 'Submit Request')
@section('content')
    <div class="container request-form">
    <form>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" id="department">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email Address</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label for="issue">Issue</label>
            <input type="text" class="form-control" id="issue" placeholder="Enter Issue Summary">
        </div>
        <div class="form-group">
            <label for="issueDescription">Issue Description</label>
            <textarea class="form-control" id="issueDescription" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary request-submit-button">Raise Ticket</button>
    </form>
    </div>
@endsection
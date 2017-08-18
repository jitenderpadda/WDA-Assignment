<html>
<head>
    <link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/themeStyle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container tickets">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('viewTickets.index') }}">Back</a>
            </div>
        </div>
    </div>
    <div class="well">
        <form class="form-horizontal">
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
</div>
</body>
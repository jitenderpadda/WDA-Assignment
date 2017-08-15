<header class="site-header">

    <div class="top">
        <div class="container">
            <div class="row">
                <div id="user-name">
                    <p>Welcome
                        @if(Session::has('email'))
                             {{Session::get('email')}}
                        @else
                              User
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a href="home" class="navbar-brand">
                <img src={{ asset('img/logo.png') }} alt="Logo">
            </a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                <ul class="nav navbar-nav main-navbar-nav">
                    <li ><a href="home">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="raise_ticket">Raise Ticket</a></li>
                    <li><a href="view_tickets">View Tickets</a></li>
                    @if(Session::has('email'))
                        <li><a href="logout">Logout</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- END MAIN NAVIGATION -->
        </div>
    </nav>
</header>
<header class="site-header">

    <div class="top">
        <div class="container">
            <div class="row">
                <div id="user-name">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            Welcome {{ Auth::user()->name }} |
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </ul>
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
                <img src={{ asset('img/logo_transparent.png') }} alt="Logo">
            </a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                <ul class="nav navbar-nav main-navbar-nav">
                    <li ><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    @if (!Auth::guest())
                        <li><a href="{{ route('raiseTicket') }}">Raise Ticket</a></li>
                        <li><a href="{{ route('viewTickets.index') }}">View Tickets</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- END MAIN NAVIGATION -->
        </div>
    </nav>
</header>
<header class="site-header">
    <div class="top">
        <div class="container">
            <div class="row">
                <div id="user-name">
                    <p>Welcome User!</p>
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
                    <li class="active"><a href="home">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Raise Ticket
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="request-form">RMIT Training</a></li>
                            <li class="divider"></li>
                            <li><a href="request-form">Buisness Systems</a></li>
                            <li class="divider"></li>
                            <li><a href="request-form">ARG</a></li>
                            <li class="divider"></li>
                            <li><a href="request-form">Human Resources</a></li>
                            <li class="divider"></li>
                            <li><a href="request-form">Web and Digital Services</a></li>
                            <li class="divider"></li>
                            <li><a href="request-form">Information Technology Services</a></li>
                        </ul>
                    </li>
                    <li><a href="trackProgress">Track Progress</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- END MAIN NAVIGATION -->
        </div>
    </nav>
</header>
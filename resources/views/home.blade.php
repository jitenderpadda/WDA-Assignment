
@extends('shared.master')
@section('title', 'ITS')
@section('content')
    <div class="container">
        <img id = "home-page-image" src={{ asset('img/home-page-image.jpg') }} alt="Logo">
    </div>
    <section class="boxes_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="box">
                        <h3>Hours of operation</h3>
                        <p>Phone support
                            Monday to Friday 8.00 am to 8.00 pm
                            Saturday 8.30 am to 4.30 pm</p>
                        <i class="fa fa-cogs"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <h3>Walk-up support locations</h3>
                        <p>Swanston Academic Building (SAB) – Building 80 Level 3 -
                            Monday to Friday 8.00 am to 8.00 pm, Saturday 8.30 am to 4.30 pm</p>
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <h3>Tracking requests</h3>
                        <p>Service and Support Centre requests can now be logged and tracked using the Service and
                            Support website</p>
                        <i class="fa fa-clipboard"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <h2 class="section-title">SERVICES</h2>
        <p class="desc">Find assistance for all your information technology queries</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">RMIT Training</h4>
                            <p>
                                We support academics and professionals with our Informit products and services such as
                                EduTV and
                                TVNews, and we provide English language and tailored training solutions to students and
                                professionals
                                all over the world.
                                We are committed to helping learners achieve their goals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-user-md"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Buisness Systems</h4>
                            <p>E-Business Systems enable businesses to operate online using the Internet
                                and the world-wide web. In this course you will develop the necessary
                                skills to appraise the use of web-based information systems from both
                                business and technical points of view. The course will also cover the design
                                and development of a small e-business system..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-stethoscope"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">ARG</h4>
                            <p>Providing feedback about services or request new types of services. We record the
                                request conduct the surverys and deliver the best to the user to our knowledge.
                                These queries are directly addressed by the senior HR Manager. We will do our best to
                                guide you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Human Resources</h4>
                            <p>Any request or complaints can be made via this portal to human resources department.
                            Leave issues or salary related request, Loans against salary. You can write any request,
                            and we will do our best to address you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-file-text-o"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Web and Digital Services</h4>
                            <p>Digital & CX owns and maintains the web policy suite,
                                which provides clear direction for the creation, delivery and governance of web content,
                                management and design. The suite comprises the Web content, User experience,
                                Accessibility, New websites, Mobile channel and Social media policies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-heartbeat"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Information Technology Service</h4>
                            <p>We deal with all kinds of problems including google emails,
                            telephone and voicemail, research and data storage, shared drive issues,
                            wireless setup, password assistance, capture me, printing device forms,
                            general IT enquiry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
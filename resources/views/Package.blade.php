<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Title -->
    <title>Lifestyle - Professional Bootstrap Template</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/nexus.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    <style>
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: #546E7A;
        }

        .wrapper {
            max-width: 18rem;
            padding: 0 0.5rem;
            margin-left: auto;
            margin-right: auto;
            padding-top: 4rem;
        }

        label {
            font-size: 1.5rem;
            font-weight: 400;
            display: block;
            margin-bottom: 0.5rem;
            color: #546E7A;;
            border: 1px solid #ECEFF1;
            padding: 0.5rem 0.75rem;
            border-radius: 0.5rem;
        }

        input {
            font-family: 'Roboto', sans-serif;
            display: block;
            border: none;
            border-radius: 0.25rem;
            border: 1px solid transparent;
            line-height: 1.5rem;
            padding: 0;
            font-size: 2rem;
            color: #607D8B;
            width: 100%;
            margin-top: 0.5rem;
        }

        input:focus {
            outline: none;
        }

        #ui-datepicker-div {
            display: none;
            background-color: #fff;
            box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.1);
            margin-top: 0.25rem;
            border-radius: 0.5rem;
            padding: 0.5rem;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .ui-datepicker-calendar thead th {
            padding: 0.25rem 0;
            text-align: center;
            font-size: 1.2rem;
            font-weight: 400;
            color: #78909C;
        }

        .ui-datepicker-calendar tbody td {
            width: 3rem;
            text-align: center;
            padding: 0;
        }

        .ui-datepicker-calendar tbody td a {
            display: block;
            border-radius: 0.25rem;
            line-height: 2rem;
            transition: 0.3s all;
            color: #546E7A;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .ui-datepicker-calendar tbody td a:hover {
            background-color: #E0F2F1;
        }

        .ui-datepicker-calendar tbody td a.ui-state-active {
            background-color: #009688;
            color: white;
        }

        .ui-datepicker-header a.ui-corner-all {
            cursor: pointer;
            position: absolute;
            top: 0;
            width: 2rem;
            height: 2rem;
            margin: 0.5rem;
            border-radius: 0.25rem;
            transition: 0.3s all;
        }

        .ui-datepicker-header a.ui-corner-all:hover {
            background-color: #ECEFF1;
        }

        .ui-datepicker-header a.ui-datepicker-prev {
            left: 0;
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
            background-repeat: no-repeat;
            background-size: 12px;
            background-position: 50%;
            transform: rotate(180deg);
        }

        .ui-datepicker-header a.ui-datepicker-next {
            right: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
            background-repeat: no-repeat;
            background-size: 12px;
            background-position: 50%;
        }

        .ui-datepicker-header a>span {
            display: none;
        }

        .ui-datepicker-title {
            text-align: center;
            line-height: 2rem;
            margin-bottom: 0.25rem;
            font-size: 15px;
            font-weight: 500;
            padding-bottom: 0.25rem;
        }

        .ui-datepicker-week-col {
            color: #78909C;
            font-weight: 400;
            font-size: 1rem;
        }

    </style>
</head>

<body>
    <div id="body-bg">
        <div id="pre-header" class="container">
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="{{ '/' }}" class="fa-home">Home</a>
                                </li>
                                <li>
                                    <a href="{{ '/' }}"><span class="fa-gears">International
                                            Tour</span></a>
                                </li>
                                <li>
                                    <a href="{{ '/' }}"><span class="fa-copy">India's Tour</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('Blogs-page') }}"><span class="fa-font">Blog</span></a>
                                </li>
                                <li>
                                    <a href="{{ '/contact-us' }}" class="fa-comment">Contact</a>
                                </li>
                                <li>
                                    @if (Session::has('user_id'))

                                        <a href="{{ route('user.login.success') }}">@php
                                            foreach ($username as $key) {
                                                echo $key['fname'];
                                            }
                                        @endphp</a>
                                    @else
                                        <a href="{{ url('/user-login') }}"><span
                                                class="fa-user">Login</span></a>

                                    @endif

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Menu -->

        <div id="post_header" class="container" style="height: 40px">
            <!-- Spacing below header -->
        </div>

        <!-- === END HEADER === -->

        <!-- === BEGIN CONTENT === -->

        <div id="content">
            <div class="container no-padding">
                <div class="row">

                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <div class="clearfix"></div>
                        <div class="carousel-inner">
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($multi_image as $item)
                                <div class="item @php 
                                    if($count==0){
                              echo "
                                    active"; } else{ echo " " ; } @endphp">
                                    <img src="http://localhost:8000/img/package/@php
                                        echo $item['image'];
                                        $count++;
                                    @endphp">
                                </div>
                            @endforeach
                        </div>

                        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

                </div>
            </div>
            @foreach ($data as $item)


                <div class="container background-gray-lighter">
                    <div class="row padding-vert-20">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                </div>
                <div class="container background-gray-lighter">
                    <div class="col-md-9">
                        <div class="row padding-vert-40">
                            <div class="tabs alternative">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#sample-2a" data-toggle="tab">Itinerary</a>
                                    </li>
                                    <li>
                                        <a href="#sample-2b" data-toggle="tab">Activites</a>
                                    </li>
                                    <li>
                                        <a href="#sample-2c" data-toggle="tab">More Details</a>
                                    </li>
                                    <li>
                                        <a href="#sample-2d" data-toggle="tab">Policy</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="sample-2a">
                                        <div class="row">
                                            <div class="col-md-7">
                                                @php
                                                    echo $item['dayplanning'];
                                                @endphp

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="sample-2b">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="http://localhost:8000/img/package/@php echo $item['poster_image'];@endphp"
                                                    alt="filler image">
                                            </div>
                                            <div class="col-md-7">
                                                @php
                                                    echo $item['activity'];
                                                @endphp
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="sample-2c">
                                        <ul>
                                            <li> Departure & Return Location : <b>{{ $item->origin }}</b></li>
                                            <li>Duration <b>{{ $item->days }} Days </b>&<b> {{ $item->nights }}Nights</b> </li>
                                            <li>Bookings end on {{ $item->end_date }}</li>
                                            <li>Only <b>Veg</b> and <b>Jain</b> dines are availible </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade in" id="sample-2d">
                                        @php
                                            echo $item['policy'];
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Early bird offer</h3>
                                <br>
                                <h3>@php
                                    echo $item['price'] . ' ₹';
                                @endphp</h3>
                            </div>
                            @if(Session::has('user_id'))
                            <div class="panel-body">
                                <form action="{{route('book-package')}}" method="post">
                                    @csrf
                                    <p style="    font-size: 15px;">Book From</p>
                                    <span class="input-group-text" id="basic-addon1" class="fa-calendar"></span>
                                        <input type="text" class="form-control" name="book_date" id="datepicker" autocomplete="off">
                                    <br>
                                    <input type="text" class="form-control" name="people" autocomplete="off" placeholder="Number of People...">
                                    <input type="hidden" class="form-control" name="pack_id" value="{{$item->pack_id}}" autocomplete="off" placeholder="Number of People...">
                                    <input type="hidden" class="form-control" name="price" value="{{$item->price}}" autocomplete="off" placeholder="Number of People...">
                                    <input type="hidden" class="form-control" name="user_id" value="{{Session::get('user_id')}}" autocomplete="off" placeholder="Number of People...">
                                    <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary form-control">
                            </form>
                            </div>
                            @else
                            <div class="panel-body">
                                <p style="font-size: 15px;">For Booking Please Login</p>
                                <a href="{{ url('/user-login') }}" class="btn btn-green"><span
                                    class="fa-user">Login</span></a>
                                
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
        <!-- === END CONTENT === -->
        <!-- === BEGIN FOOTER === -->
        <div id="content-bottom-border" class="container">
        </div>
        <div id="base">
            <div class="container padding-vert-30 margin-top-60">
                <div class="row">
                    <div class="col-md-4 margin-bottom-20">
                        <h3 class="margin-bottom-10">Contact Details</h3>
                        <p>
                            <span class="fa-phone">Telephone:</span>(+91)88888 88888
                            <br>
                            <span class="fa-envelope">Email:</span>
                            <a href="#">safarnama@aol.com</a>
                            <br>
                            <span class="fa-link">Website:</span>
                            <a href="#">www.safarnama.com</a>
                        </p>
                        <p>E Block, Central Secretariat,
                            <br>New Delhi,
                            <br>Delhi 110011,
                            <br>India
                        </p>
                    </div>

                    <div class="col-md-3 margin-bottom-20">
                        <h3 class="margin-bottom-10">About</h3>
                        <ul class="menu">
                            <li>
                                <a class="fa-tasks" href="{{ '\about-us' }}">About us</a>
                            </li>
                            <li>
                                <a class="fa-users" href="{{ route('Blogs-page') }}">Blog</a>
                            </li>
                            <li>
                                <a class="fa-signal" href="{{ route('package-page') }}">Holidays in India</a>
                            </li>
                            <li>
                                <a class="fa-coffee" href="{{ route('international-package-page') }}">Holidays in
                                    Foreign</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-3 margin-bottom-20 padding-vert-30 text-center">
                        <h3 class="color-gray margin-bottom-10"></h3>
                        <p>
                            Term & Conditions
                            <br>MEDICAL CERTIFICATE & NOC

                            <a href="{{ url('assets/Medical-Certificate-SafarNama.pdf') }}"
                                download="Medical-Certificate-SafarNama.pdf"><button
                                    class="btn btn-primary btn-lg margin-top-20" id="medical"
                                    type="button">Download</button></a>
                        </p>
                        <br>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="container">
                <div class="row">
                    <div id="copyright" class="col-md-12">
                        <p class="pull-right">(c) Safarnama 2022</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Footer Menu -->
        <!-- JS -->
        <script type="text/javascript" src="{{ url('js/jquery.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ url('js/scripts.js') }}"></script>

        <script type="text/javascript" src="{{ url('js/jquery.isotope.js') }}" type="text/javascript"></script>

        <script type="text/javascript" src="{{ url('js/jquery.slicknav.js') }}" type="text/javascript"></script>

        <script type="text/javascript" src="{{ url('js/jquery.visible.js') }}" charset="utf-8"></script>

        <script type="text/javascript" src="{{ url('js/jquery.sticky.js') }}" charset="utf-8"></script>

        <script type="text/javascript" src="{{ url('js/slimbox2.js') }}" charset="utf-8"></script>

        <script src="{{ url('js/modernizr.custom.js') }}" type="text/javascript"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
</body>
<script>
    $(document).ready(function() {
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: "yy-mm-dd",
                duration: "fast",
                minDate: 0
            });
        });
    });
</script>

</html>
<!-- === END FOOTER === -->

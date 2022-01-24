<html>

<head>
    
    
    
    
    
    
    
    
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/nexus.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css"><link rel="stylesheet" href="{{ url('css/raj.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        .more:hover {
            background-color: #e9e9e9;
            border-radius: 50px 50px;
        }

        .more {
            padding: 5px 12px;
        }
        a:link{
            text-decoration: none;
            color: black;
        }a:hover{
            text-decoration: none;
            color: black;
        }
        a:active{
            text-decoration: none;
            color: black;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container" style="font-size: 15px">
        <div class="page-inner no-page-title">
            <ul id="hornavmenu" class="nav navbar-nav">
                <li>
                    <a href="{{ '/' }}" class="fa-home">Home</a>
                </li>
                <li>
                    <a href="{{ route('international-package-page') }}"><span class="fa-gears">International Tour</span></a>
                </li>
                <li>
                    <a href="{{ route('package-page') }}"><span class="fa-copy">India's Tour</span></a>
                </li>
                <li>
                    <a href="{{ route('Blogs-page') }}"><span class="fa-font">Blog</span></a>
                </li>
                <li>
                    <a href="{{ '/about-us' }}"><span class="fa-th">About us</span></a>

                </li>
                <li>
                    <a href="{{ '/contact-us' }}" class="fa-comment">Contact</a>
                </li>
            </ul>
            <!-- start page main wrapper -->
            <div class="col-md-10">
                <div class="card card-white grid-margin">
                    <div class="card-heading clearfix">
                        <h4 class="card-title"> <a href="{{route('user.login.success')}}">Profile</a> <b>></b> Booking </h4>
                    </div>
                    <div class="card-body">
                        <table>
                            <th>Tour Name</th>
                            <th>Travel Date</th>
                            <th>Source Location</th>
                            <th>Duration</th>
                            <th>Persons</th>
                            <th>Total Amount</th>
                            <th>Payment Status</th>
                            @php
                                $x = sizeof($data);
                            @endphp
                                @for ($i=0; $i < $x; $i++) 
                            <tr>
                                <td>@php
                                    echo $data[$i]['pack_title'];
                                @endphp</td>
                                <td>@php
                                    echo $data[$i]['date'];
                                @endphp</td>
                                <td>@php
                                    echo $data[$i]['origin'];
                                @endphp</td>
                                <td>@php
                                    echo $data[$i]['people'];
                                @endphp</td>
                                <td>@php
                                    echo $data[$i]['days'].' Days - '.$data[$i]['nights'].' Nights';
                                @endphp</td>
                                <td>@php
                                    echo $data[$i]['payment_status'];
                                @endphp</td>
                            </tr>
                            @endfor
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <!-- end page main wrapper -->
            <div class="page-footer">
                <p>Copyright © 2020 Evince All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

<script type="text/javascript" src="{{ url('js/jquery.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ url('js/scripts.js') }}"></script>

<script type="text/javascript" src="{{ url('js/jquery.isotope.js') }}" type="text/javascript"></script>

<script type="text/javascript" src="{{ url('js/jquery.slicknav.js') }}" type="text/javascript"></script>

<script type="text/javascript" src="{{ url('js/jquery.visible.js') }}" charset="utf-8"></script>

<script type="text/javascript" src="{{ url('js/jquery.sticky.js') }}" charset="utf-8"></script>

<script type="text/javascript" src="{{ url('js/slimbox2.js') }}" charset="utf-8"></script>

<script src="{{ url('js/modernizr.custom.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('description');
    });
</script>

</html>

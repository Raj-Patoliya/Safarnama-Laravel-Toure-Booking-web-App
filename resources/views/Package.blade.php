
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
        <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('css/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/font-awesome.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/nexus.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/custom.css')}}" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>

    <body>
            <div id="body-bg">
                <div id="pre-header" class="container" >
                    @if(Session::has('user_id'))
                    <a href="{{route('user.login.success')}}"><button class="btn btn-primary btn-lg margin-top-20" style="position: fixed;margin-left: 70%;z-index: 99;background: transparent;border: none;" >@php
                    foreach ($username as $key) {
                        echo $key['fname'];
                    }
                @endphp</button></a>
            
            @else
                <a href="{{url('/user-login')}}"><button class="btn btn-primary btn-lg margin-top-20" style="position: fixed;margin-left: 70%;z-index: 99;background: transparent;border: none;" >Login?</button></a>
            @endif
                <div id="hornav" class="container no-padding">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="text-center visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="{{'/'}}" class="fa-home">Home</a>
                                    </li>
                                    <li>
                                        <span class="fa-gears">International Tour</span>
                                        <ul>
                                            <li class="parent">
                                                 <ul>
                                                    <li>
                                                        <a href="features-typo-basic.html">Britain</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-typo-blockquotes.html">Spain</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-typo-blockquotes.html">Finland</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-typo-blockquotes.html">Amsterdam</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-typo-blockquotes.html">Santorini</a>
                                                    </li>
                                                    <li>
                                                        <a href="features-typo-blockquotes.html">Barcelona</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="fa-copy">National Tours</span>
                                        <ul>
                                            <li>
                                                <a href="pages-about-us.html">About Us</a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{'/about-us'}}"><span class="fa-th">About us</span></a>
                                        
                                    </li>
                                    <li>
                                        <a href="{{'/Blog'}}"><span class="fa-font">Blog</span></a>
                                    </li>
                                    <li>
                                        <a href="{{'/contact-us'}}" class="fa-comment">Contact</a>
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
                              echo "active";  
                            }
                            else{
                                echo " ";
                            }
                                @endphp">
                                    <img src="http://localhost:8000/img/package/@php echo $item['image']; $count++;@endphp">
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
                                            <img src="http://localhost:8000/img/package/@php echo $item['poster_image'];@endphp" alt="filler image">
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
                                        <li> Departure & Return Location : <b>{{$item->origin}}</b></li>
                                        <li>Duration <b>{{$item->days}} Days </b>&<b> {{$item->nights}} Nights</b> </li>
                                        <li>Bookings end on {{$item->created_at->format('M') }}-{{$item->created_at->format('Y') }} </li>
                                        <li>Pellentesque fermentum</li>
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
                                <br>India</p>
                        </div>

                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">About</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">About us</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Blog</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Holiday Package</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">One Day Trip</a>
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

                            <a href="{{url('assets/Medical-Certificate-SafarNama.pdf')}}" download="Medical-Certificate-SafarNama.pdf"><button class="btn btn-primary btn-lg margin-top-20" id="medical"  type="button">Dowmload</button></a>
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
                            <p class="pull-right">(c) 2014 Your Copyright Info</p>
                        </div>
                    </div>
                </div>
            </div>
<!-- End Footer Menu -->
            <!-- JS -->
            <script type="text/javascript" src="{{url('js/jquery.min.js')}}" type="text/javascript"></script>
            <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script type="text/javascript" src="{{url('js/scripts.js')}}"></script>

            <script type="text/javascript" src="{{url('js/jquery.isotope.js')}}" type="text/javascript"></script>

            <script type="text/javascript" src="{{url('js/jquery.slicknav.js')}}" type="text/javascript"></script>

            <script type="text/javascript" src="{{url('js/jquery.visible.js')}}" charset="utf-8"></script>

            <script type="text/javascript" src="{{url('js/jquery.sticky.js')}}" charset="utf-8"></script>

            <script type="text/javascript" src="{{url('js/slimbox2.js')}}" charset="utf-8"></script>

            <script src="{{url('js/modernizr.custom.js')}}" type="text/javascript"></script>
    </body>
</html>
<!-- === END FOOTER === -->
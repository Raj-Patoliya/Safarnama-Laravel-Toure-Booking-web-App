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
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('css/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/nexus.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/custom.css') }}" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <div id="header">
                <div class="container">
                    <div class="row">
                        <div class="logo">
                            <h1 style="font-size: 75px;color:white">|| SAFARNAMA ||</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
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
                                <li>
                                    @if (Session::has('user_id'))
    
                                        <a href="{{ route('user.login.success') }}">@php
                                            foreach ($username as $key) {
                                                echo $key['fname'];
                                            }
                                        @endphp</a>
                                    @else
                                    <a href="{{ url('/user-login') }}"><span class="fa-user">Login</span></a>
    
                                    @endif
    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>Safarnama International Pacakages</h2>
                            <!-- Filter Buttons -->
                            <!-- End Filter Buttons -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 portfolio-group no-padding">
                            <!-- Portfolio Item -->
                            @foreach ($data as $item)
                            <div class="col-md-6 portfolio-item margin-bottom-40 filer-code">
                                <div>
                                    <a href="{{ route('single-package', $item->pack_id) }}">
                                        <figure>
                                            <img alt="image1" src="http://localhost:8000/img/package/@php echo $item['poster_image'];@endphp">
                                            <figcaption>
                                                <h3>{{ $item->pack_title }}</h3>
                                                <h4>Rs.{{ $item->price }}/- Per Person</h4>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            <!-- End Portfolio Item -->
                        </div>
                        <div class="text-right">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
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
                                    <a class="fa-tasks" href="{{'\about-us'}}">About us</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="{{route('Blogs-page')}}">Blog</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="{{route('package-page')}}">Holidays in India</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="{{route('international-package-page')}}">Holidays in Foreign</a>
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
                                        type="button">Dowmload</button></a>
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

            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
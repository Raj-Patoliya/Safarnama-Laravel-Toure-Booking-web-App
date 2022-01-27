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
</head>
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

        <!-- End Top Menu -->
        <div id="post_header" class="container" style="height: 40px">
            <!-- Spacing below header -->
        </div>
        <div id="content-top-border" class="container">
        </div>
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id="content">
            <div class="container background-white">
                <div class="row margin-vert-30">
                    <!-- Main Column -->
                    <div class="col-md-12">
                        <!-- Blog Post -->
                        @foreach ($blogs as $blog)


                            <div class="blog-post padding-bottom-20">
                                <!-- Blog Item Header -->
                                <div class="blog-item-header">
                                    <!-- Title -->
                                    <h2>
                                        <a href="#">{{ $blog->title }}</a>
                                    </h2>
                                    <div class="clearfix"></div>
                                    <!-- End Title -->
                                </div>
                                <!-- End Blog Item Header -->
                                <!-- Blog Item Details -->
                                <div class="blog-post-details">
                                    <!-- Author Name -->
                                    <div class="blog-post-details-item blog-post-details-item-left">
                                        <i class="fa fa-user color-gray-light"></i>
                                        <a href="#">Admin</a>
                                    </div>
                                    <!-- End Author Name -->
                                    <!-- Date -->
                                    <div class="blog-post-details-item blog-post-details-item-left">
                                        <i class="fa fa-calendar color-gray-light"></i>
                                        <a href="#">22nd Apr, 2014</a>
                                    </div>
                                    <!-- End Date -->
                                    <!-- Tags -->

                                    <!-- End Tags -->
                                    <!-- # of Comments -->
                                    <div
                                        class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                        <a href="">
                                            <i class="fa fa-comments color-gray-light"></i>
                                            7 Comments
                                        </a>
                                    </div>
                                    <!-- End # of Comments -->
                                </div>
                                <!-- End Blog Item Details -->
                                <!-- Blog Item Body -->
                                <div class="blog">
                                    <div class="clearfix"></div>
                                    <div class="blog-post-body row margin-top-15">
                                        <div class="col-md-5">
                                            <img class="margin-bottom-20"
                                                src="http://localhost:8000/img/post/@php echo $blog['attechment']; @endphp" alt="thumb1">
                                        </div>
                                        <div class="col-md-7">
                                            @php
                                                echo $blog['description'];
                                            @endphp
                                            <!-- Read More -->
                                            <a href="read-blogs-page/@php echo $blog['post_id'];@endphp" class="btn btn-primary">
                                                Read More
                                                <i class="icon-chevron-right readmore-icon"></i>
                                            </a>
                                            <!-- End Read More -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Item Body -->
                            </div>
                        @endforeach
                        <!-- End Blog Item -->
                        <!-- Pagination -->
                        <div class="text-right">
                            {{ $blogs->links() }}
                        </div>

                        </ul>
                        <!-- End Pagination -->
                    </div>
                    <!-- End Main Column -->
                    <!-- Side Column -->

                    <!-- End Side Column -->
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
        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Sticky Div -->
        <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
        <!-- Slimbox2-->
        <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->
</body>

</html>
<!-- === END FOOTER === -->

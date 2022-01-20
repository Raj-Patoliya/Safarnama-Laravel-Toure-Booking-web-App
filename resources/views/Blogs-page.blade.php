
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
    </head>
    <body>
            <div id="body-bg">
                <ul class="social-icons pull-right hidden-xs">
                    <li class="social-rss">
                        <a href="#" target="_blank" title="RSS"></a>
                    </li>
                    <li class="social-twitter">
                        <a href="#" target="_blank" title="Twitter"></a>
                    </li>
                    <li class="social-facebook">
                        <a href="#" target="_blank" title="Facebook"></a>
                    </li>
                    <li class="social-googleplus">
                        <a href="#" target="_blank" title="GooglePlus"></a>
                    </li>
                </ul>
                <div id="pre-header" class="container" style="height:340px">
                    <a href="{{url('/user-login')}}"><button class="btn btn-primary btn-lg margin-top-20" style="position: fixed;margin-left: 70%;z-index: 99;background: transparent;border: none;" >Login?</button></a>
                </div>
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="logo">
                                <h1 style="font-size: 75px;color:white">||  SAFARNAMA  ||</h1>
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
                                        <span class="fa-copy">Pages</span>
                                        <ul>
                                            <li>
                                                <a href="pages-about-us.html">About Us</a>
                                            </li>
                                            <li>
                                                <a href="pages-services.html">Services</a>
                                            </li>
                                            <li>
                                                <a href="pages-faq.html">F.A.Q.</a>
                                            </li>
                                            <li>
                                                <a href="pages-about-me.html">About Me</a>
                                            </li>
                                            <li>
                                                <a href="pages-full-width.html">Full Width</a>
                                            </li>
                                            <li>
                                                <a href="pages-left-sidebar.html">Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="pages-right-sidebar.html">Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="pages-login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="pages-sign-up.html">Sign-Up</a>
                                            </li>
                                            <li>
                                                <a href="pages-404.html">404 Error Page</a>
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
                        <div class="col-md-9">
                            <!-- Blog Post -->
                            @foreach ($blogs as $blog)
                                
                            
                            <div class="blog-post padding-bottom-20">
                                <!-- Blog Item Header -->
                                <div class="blog-item-header">
                                    <!-- Title -->
                                    <h2>
                                        <a href="#">{{$blog->title}}</a>
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
                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                        <i class="fa fa-tag color-gray-light"></i>
                                        <a href="#">PHP</a>,
                                        <a href="#">HTML</a>,
                                        <a href="#">Ruby</a>
                                    </div>
                                    <!-- End Tags -->
                                    <!-- # of Comments -->
                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
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
                                            <img class="margin-bottom-20" src="http://localhost:8000/img/post/@php echo $blog['attechment']; @endphp" alt="thumb1">
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
                            <ul class="pagination">
                                <li class="">
                                    {{$blogs->links()}}
                                </li>
                            
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
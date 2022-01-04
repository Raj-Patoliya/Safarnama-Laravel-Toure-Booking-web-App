<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Safarnama</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

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
                                        @foreach ($continent as $item)
                                        <li class="parent">
                                            <span>{{$item->continent_name}}</span>
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
                                        @endforeach
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

            <div id="post_header" class="container" style="height:340px">
            </div>
            <div id="content-top-border" class="container">
            </div>

            <div id="content">
                <div class="container no-padding">
                    <div class="row">

                        <div id="carousel-example" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="clearfix"></div>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{url('img/slideshow/slide1.jpg')}}">
                                </div>
                                <div class="item">
                                    <img src="{{url('img/slideshow/slide2.jpg')}}">
                                </div>
                                <div class="item">
                                    <img src="{{url('img/slideshow/slide3.jpg')}}">
                                </div>
                                <div class="item">
                                    <img src="{{url('img/slideshow/slide4.jpg')}}">
                                </div>
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
                <div class="container background-gray-lighter">
                    <div class="row margin-vert-40">
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <i class="fa-clock-o fa-5x color-primary"></i>
                            </div>
                            <div class="col-md-8">
                                <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                                <p>WORKING HOURS</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <i class="fa-tachometer fa-5x color-primary"></i>
                            </div>
                            <div class="col-md-8">
                                <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                                <p>WORKING HOURS</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <i class="fa-users fa-5x color-primary"></i>
                            </div>
                            <div class="col-md-8">
                                <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                                <p>WORKING HOURS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container background-white">
                    <div class="row margin-vert-30">

                        <div class="col-md-12">
                            <h2 class="text-center">Welcome to LifeStyle</h2>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="text-center">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                augue duis dolore te feugait nulla facilisi. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Curabitur eget nisl
                                a risus.</p>
                        </div>

                    </div>
                </div>
                <div class="container background-gray-lighter">
                    <div class="row padding-vert-20">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">

                            <ul class="portfolio-group">

                                <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInLeft">
                                            <img alt="image1" src="{{url('img/frontpage/image1.jpg')}}">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>

                                <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInRight">
                                            <img alt="image2" src="{{url('img/frontpage/image2.jpg')}}">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>

                                <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInLeft">
                                            <img alt="image3" src="{{url('img/frontpage/image3.jpg')}}">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>

                                <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInRight">
                                            <img alt="image4" src="{{url('img/frontpage/image4.jpg')}}">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>

                                <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInLeft">
                                            <img alt="image5" src="{{url('img/frontpage/image5.jpg')}}">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>

                                <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                                    <a href="#">
                                        <figure class="animate fadeInRight">
                                            <img alt="image6" src="{{url('img/frontpage/image6.jpg')}}">
                                            <figcaption>
                                                <h3>Placerat facer possim</h3>
                                                <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>

                            </ul>

                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                </div>
                <div class="container background-white">
                    <div class="row padding-vert-40">
                        <div class="col-md-12">
                            <h2 class="animate fadeIn text-center">WE ARE CURRENTLY HIRING!</h2>
                            <p class="animate fadeIn text-center">If you like to work with a creative team in a lively and friendly enviroment then call us today!.</p>
                            <p class="animate fadeInUp text-center">
                                <button class="btn btn-primary btn-lg" type="button">View Details</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
    <script>
        $( document ).ready(function() {
   $("#medical").click(function (){
   });
});
    </script>
</html>

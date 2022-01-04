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
        <link rel="stylesheet" href="{{url('css/raj.css')}}" rel="stylesheet">

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
            <div id="pre-header" class="container" style="height: 40px">
                <!-- Spacing above header -->
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
  <!-- Top Menu -->
            <!-- End Top Menu -->
            <div id="post_header" class="container" style="height: 40px">
                <!-- Spacing below header -->
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            @foreach ($data as $item)
            @php
                $i=0;
            @endphp
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        <div class="col-md-9">
                            <!-- Blog Post -->
                            <div class="blog-post padding-bottom-20">
                                <!-- Blog Item Header -->
                                <div class="blog-item-header">
                                    <!-- Title -->
                                    <h2>{{$item->title}}</h2>
                                    <div class="clearfix"></div>
                                    <!-- End Title -->
                                </div>
                                <!-- End Blog Item Header -->
                            </div>    
                                <!-- Blog Item Details -->
                                <div class="blog-post-details">
                                    <!-- Author Name -->
                                    <div class="blog-post-details-item blog-post-details-item-left">
                                        <i class="fa fa-user color-gray-light"></i>
                                        <a href="#"></a>
                                    </div>
                                    <!-- End Author Name -->
                                    <!-- Date -->
                                    <div class="blog-post-details-item blog-post-details-item-left">
                                        <i class="fa fa-calendar color-gray-light"></i>
                                        <a href="#">{{$item->created_at}}</a>
                                    </div>
                                    <!-- End Date -->
                                    <!-- Tags -->
                                    <!-- End Tags -->
                                    <!-- # of Comments -->
                                    <!-- End # of Comments -->
                                </div>
                                <!-- End Blog Item Details -->
                                <!-- Blog Item Body -->
                                <div class="blog">
                                    <div class="clearfix"></div>
                                    <div class="blog-post-body row margin-top-15">
                                        <div class="col-md-5">
                                            <img class="margin-bottom-20" src="http://127.0.0.1:8000/img/post/@php echo $item['attechment'];@endphp" alt="" />
                                        </div>
                                        <div class="col-md-7">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                                                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                            <!-- Read More -->
                                            <a href="#" class="btn btn-primary">
                                                {{$item->status}}
                                                <i class="icon-chevron-right readmore-icon"></i>
                                            </a>
                                            <!-- End Read More -->
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Item Body -->
                            </div>
                            </div>
                            @php
                                $i++;
                                @endphp
                            @endforeach
                        </div>
                        </div>
                        </div>
                            <!-- End Blog Item -->
                            <!-- End Blog Tags -->
                            <!-- Recent Posts -->
                            
                            <!-- End Recent Posts -->
                        <!-- End Side Column -->
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->            
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

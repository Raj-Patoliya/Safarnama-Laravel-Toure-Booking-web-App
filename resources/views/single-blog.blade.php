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
        <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('css/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/font-awesome.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/nexus.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/custom.css')}}" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
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
            <div id="pre-header" class="container" style="height: 40px">
                <!-- Spacing above header -->
            </div>
            <div id="header">
                <div class="container">
                        <!-- Logo -->
                        <div class="row">
                            <div class="logo">
                                <h1 style="font-size: 75px;color:white">||  SAFARNAMA  ||</h1>
                            </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- Top Menu -->
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
                            <div class="blog-post">
                                <div class="blog-item-header">
                                    <h2>
                                        <a href="#">
                                      @foreach ($blog as $item)
                                    @php
                                        echo $item['title'];
                                    @endphp
                                      
                                    </a>
                                    </h2>
                                </div>
                                <div class="blog-post-details">
                                    <!-- Author Name -->
                                    <div class="blog-post-details-item blog-post-details-item-left user-icon">
                                        <i class="fa fa-user color-gray-light"></i>
                                        @foreach ($user as $user)
                                        {{$user->fname}} {{$user->lname}}
                                        @endforeach  
                                    </div>
                                    <!-- End Author Name -->
                                    <!-- Date -->
                                    <div class="blog-post-details-item blog-post-details-item-left">
                                        <i class="fa fa-calendar color-gray-light"></i>
                                        @php echo $item['created_at']; @endphp
                                    </div>
                                    <!-- End Date -->
                                    <!-- Tags -->
                                    <!-- End Tags -->
                                    <!-- # of Comments -->
                                    
                                    <!-- End # of Comments -->
                                </div>
                                <div class="blog-item">
                                    <div class="clearfix"></div>
                                    <div class="blog-post-body row margin-top-15">
                                        <div class="col-md-12">
                                            <img class="margin-bottom-20" src="	http://127.0.0.1:8000/img/post/@php echo $item['attechment']; @endphp" alt="image1">
                                        </div>
                                        <div class="col-md-12">
                                            @php
                                                echo $item['description'];
                                            @endphp
                                        </div>
                                    </div>
                                    @endforeach  
                                    <div class="blog-item-footer">
                                        <!-- About the Author -->
                                        <!-- Comments -->
                                        <div class="blog-recent-comments panel panel-default margin-bottom-30">
                                            <div class="panel-heading">
                                                <h3>Comments</h3>
                                            </div>
                                            <ul class="list-group">
                                                @foreach ($cdata as $item)
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2 profile-thumb">
                                                            <a href="#">
                                                               
                                                                <img class="media-object" src="	http://127.0.0.1:8000/img/profiles/@php echo $item['images']@endphp" alt="sds">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h4>
                                                                @php
                                                                echo $item['cusername'];
                                                            @endphp</h4>
                                                            <p>@php
                                                                echo $item['comment'];
                                                            @endphp</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                                @if(Session::has('user_id'))
                                                <!-- Comment Form -->
                                                <li class="list-group-item">
                                                    <div class="blog-comment-form">
                                                        <div class="row margin-top-20">
                                                            <div class="col-md-12">
                                                                <div class="pull-left">
                                                                    <h3>Leave a Comment</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row margin-top-20">
                                                            <div class="col-md-12">
                                                                <form action="{{route('post-comment')}}">
                                                                    <label>Message</label>
                                                                    <div class="row margin-bottom-20">
                                                                        <div class="col-md-11 col-md-offset-0">
                                                                            <textarea class="form-control" rows="8" name="comment"></textarea>
                                                                            @foreach($blog as $blog)
                                                                                <input type="hidden" name="post_id" value = "{{$blog->post_id}}">
                                                                            @endforeach
                                                                            <input type="hidden" name="user_id" value="{{Session::get('user_id')}}">
                                                                        </div>
                                                                    </div>
                                                                    <p>
                                                                        <button class="btn btn-primary" type="submit">Comment</button>
                                                                    </p>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @else
                                                <li class="list-group-item">
                                                    <div class="blog-comment-form">
                                                        <div class="row margin-top-20">
                                                            <div class="col-md-12">
                                                                <div class="pull-left">
                                                                    <h3>To Leave a Comment Please Login</h3>
                                                                    <h6>Click <a href="{{url('user-login')}}">HERE </a>to login to your account.</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </li>
                                                @endif
                                                <!-- End Comment Form -->
                                            </ul>
                                        </div>
                                        <!-- End Comments -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Post -->
                        </div>
                        <!-- End Main Column -->
                        <!-- Side Column -->
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

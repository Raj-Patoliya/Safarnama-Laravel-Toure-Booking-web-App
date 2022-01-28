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
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" method="POST" action="{{ route('insert.register')}}" enctype="multipart/form-data">
                                @csrf
                                @if(Session::has('message'))
                                    <p class="alert" style="color:red;font-size:2rem">{{Session::get('message') }}</p>
                                    @endif
                                    @php 
                                        Illuminate\Support\Facades\Session::forget('message'); 
                                        @endphp
                                <div class="signup-header">
                                    <h2>Register a new account</h2>
                                    <p>Already a member? Click
                                        <a href="{{'/user-login'}}">HERE</a> to login to your account.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="fname">First Name
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-10" id="fname" name="fname" type="text" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lname">Last Name
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-10" id="lname" name="lname" type="text" required>
                                    </div>
                                </div>
                                <Label class=""> Gender <span class="color-red">*</span></Label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-inline-input" type="radio" name="gender" id="inlineRadio1" value="male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="other">
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                  </div>
                                  
                                  <div class="dropdown dropdownMenuLink margin-bottom-10">
                                      <Label>Date of birth <span class="color-red"> *</span></Label>
                                    
                                      <select name="day" id="" class="btn btn-primary dropdown-toggle">
                                          <option class="dropdown-menu" value=""><span class="dropdown-item">Date</span></option>
                                          <option  value="1"><span class="dropdown dropdown-item">1</span></option>
                                          <option  value="2"><span class="dropdown-item">2</span></option>
                                          <option  value="3"><span class="dropdown-item">3</span></option>
                                          <option  value="4"><span class="dropdown-item">4</span></option>
                                          <option  value="5"><span class="dropdown-item">5</span></option>
                                          <option  value="6"><span class="dropdown-item">6</span></option>
                                          <option  value="7"><span class="dropdown-item">7</span></option>
                                          <option  value="8"><span class="dropdown-item">8</span></option>
                                          <option  value="9"><span class="dropdown-item">9</span></option>
                                          <option  value="10"><span class="dropdown-item">10</span></option>
                                          <option  value="11"><span class="dropdown-item">11</span></option>
                                          <option  value="12"><span class="dropdown-item">12</span></option>
                                          <option  value="13"><span class="dropdown-item">13</span></option>
                                          <option  value="14"><span class="dropdown-item">14</span></option>
                                          <option  value="15"><span class="dropdown-item">15</span></option>
                                          <option  value="16"><span class="dropdown-item">16</span></option>
                                          <option  value="17"><span class="dropdown-item">17</span></option>
                                          <option  value="18"><span class="dropdown-item">18</span></option>
                                          <option  value="19"><span class="dropdown-item">19</span></option>
                                          <option  value="20"><span class="dropdown-item">20</span></option>
                                          <option  value="21"><span class="dropdown-item">21</span></option>
                                          <option  value="22"><span class="dropdown-item">22</span></option>
                                          <option  value="23"><span class="dropdown-item">23</span></option>
                                          <option  value="24"><span class="dropdown-item">24</span></option>
                                          <option  value="25"><span class="dropdown-item">25</span></option>
                                          <option  value="26"><span class="dropdown-item">26</span></option>
                                          <option  value="27"><span class="dropdown-item">27</span></option>
                                          <option  value="28"><span class="dropdown-item">28</span></option>
                                          <option  value="29"><span class="dropdown-item">29</span></option>
                                          <option  value="30"><span class="dropdown-item">30</span></option>
                                          <option  value="31"><span class="dropdown-item">31</span></option>
                                        </select>                                 
                                  <select name="month" id="" class="btn btn-primary dropdown-toggle">
                                    <option class="dropdown-menu" value=""><span class="dropdown-item">Month</span></option>
                                    <option  value="01"><span class="dropdown-item">Jan</span></option>
                                    <option  value="02"><span class="dropdown-item">Feb</span></option>
                                    <option  value="03"><span class="dropdown-item">Mar</span></option>
                                    <option  value="04"><span class="dropdown-item">Apr</span></option>
                                    <option  value="05"><span class="dropdown-item">May</span></option>
                                    <option  value="06"><span class="dropdown-item">Jun</span></option>
                                    <option  value="07"><span class="dropdown-item">Jul</span></option>
                                    <option  value="08"><span class="dropdown-item">Aug</span></option>
                                    <option  value="09"><span class="dropdown-item">Sep</span></option>
                                    <option  value="10"><span class="dropdown-item">Oct</span></option>
                                    <option  value="11"><span class="dropdown-item">Nov</span></option>
                                    <option  value="12"><span class="dropdown-item">Dec</span></option>
                                  </select>
                                  
                                  <select name="year" id="" class="btn btn-primary dropdown-toggle">
                                    <option class="dropdown-menu" value="1"><span class="dropdown-item">Year</span></option>
                                    <option  value="1999"><span class="dropdown-item">1984</span></option>
                                    <option  value="1999"><span class="dropdown-item">1985</span></option>
                                    <option  value="1999"><span class="dropdown-item">1986</span></option>
                                    <option  value="1999"><span class="dropdown-item">1987</span></option>
                                    <option  value="1999"><span class="dropdown-item">1988</span></option>
                                    <option  value="1999"><span class="dropdown-item">1989</span></option>
                                    <option  value="1999"><span class="dropdown-item">1990</span></option>
                                    <option  value="1999"><span class="dropdown-item">1991</span></option>
                                    <option  value="1999"><span class="dropdown-item">1992</span></option>
                                    <option  value="1999"><span class="dropdown-item">1993</span></option>
                                    <option  value="1999"><span class="dropdown-item">1994</span></option>
                                    <option  value="1999"><span class="dropdown-item">1995</span></option>
                                    <option  value="1999"><span class="dropdown-item">1996</span></option>
                                    <option  value="1999"><span class="dropdown-item">1997</span></option>
                                    <option  value="1999"><span class="dropdown-item">1998</span></option>
                                    <option  value="1999"><span class="dropdown-item">1999</span></option>
                                    <option  value="2000"><span class="dropdown-item">2000</span></option>
                                    <option  value="2001"><span class="dropdown-item">2001</span></option>
                                    <option  value="2002"><span class="dropdown-item">2002</span></option>
                                    <option  value="2003"><span class="dropdown-item">2003</span></option>
                                    <option  value="2004"><span class="dropdown-item">2004</span></option>
                                    <option  value="2005"><span class="dropdown-item">2005</span></option>
                                    <option  value="2006"><span class="dropdown-item">2006</span></option>
                                    <option  value="2007"><span class="dropdown-item">2007</span></option>
                                    <option  value="2008"><span class="dropdown-item">2008</span></option>
                                    <option  value="2009"><span class="dropdown-item">2009</span></option>
                                    <option  value="2010"><span class="dropdown-item">2010</span></option>
                                    <option  value="2011"><span class="dropdown-item">2011</span></option>
                                    <option  value="2012"><span class="dropdown-item">2012</span></option>
                                    <option  value="2013"><span class="dropdown-item">2013</span></option>
                                    <option  value="2014"><span class="dropdown-item">2014</span></option>
                                    <option  value="2015"><span class="dropdown-item">2015</span></option>
                                    <option  value="2016"><span class="dropdown-item">2016</span></option>
                                    <option  value="2017"><span class="dropdown-item">2017</span></option>
                                    <option  value="2018"><span class="dropdown-item">2018</span></option>
                                    <option  value="2019"><span class="dropdown-item">2019</span></option>
                                    <option  value="2020"><span class="dropdown-item">2020</span></option>
                                    <option  value="2021"><span class="dropdown-item">2021</span></option>
                                  </select>
                                </div>
                                  
                                <label>Email Address
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="email" name="email">
                                
                                
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-group" id="show_hide_password">
                                              <input class="form-control" name="password" id="pass" type="password" required>
                                              <div class="input-group-addon">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                    
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <div class="input-group" id="show_hide_cpassword">
                                          <input class="form-control" name="cpass" id="cpass" type="password" required>
                                          <div class="input-group-addon">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                          </div>
                                        </div>
                                    </div>
                                    
                                
                                <label>Conact Number    
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="phone" required>
                                <div class="form-group">
                                    <label for="address">Contact Address <span class="color:red;">*</span></label>
                                    <textarea class="form-control" id="address" name="address"rows="3"></textarea>
                                  </div>
                                
                                <label for="formFile" class="form-label">
                                    Profile Picture
                                </label>
                                <input class="form-control" type="file" name="profile" id="formFile">
                                <hr>
                                
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label class="checkbox">
                                            <input type="checkbox">I read the
                                            <a href="#">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Register Box -->
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
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
    
    $("#show_hide_cpassword a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_cpassword input').attr("type") == "text"){
            $('#show_hide_cpassword input').attr('type', 'password');
            $('#show_hide_cpassword i').addClass( "fa-eye-slash" );
            $('#show_hide_cpassword i').removeClass( "fa-eye" );
        }else if($('#show_hide_cpassword input').attr("type") == "password"){
            $('#show_hide_cpassword input').attr('type', 'text');
            $('#show_hide_cpassword i').removeClass( "fa-eye-slash" );
            $('#show_hide_cpassword i').addClass( "fa-eye" );
        }
    });
});
    </script>
</html>
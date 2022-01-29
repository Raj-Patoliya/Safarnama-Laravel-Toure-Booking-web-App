<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Safarnama</title>
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
                            <form class="signup-page" method="POST" action="{{ route('update-profile')}}" enctype="multipart/form-data">
                                @csrf
                                @if(Session::has('message'))
                                    <p class="alert" style="color:red;font-size:2rem">{{Session::get('message') }}</p>
                                    @endif
                                    @php 
                                        Illuminate\Support\Facades\Session::forget('message'); 
                                    @endphp
                                    @foreach ($data as $data)
                                        

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="fname">First Name
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-10" id="fname" name="fname" type="text" value="@php echo $data['fname'];@endphp" required>
                                        <input class="form-control margin-bottom-10" id="user_id" name="user_id" type="hidden" value="@php echo $data['user_id'];@endphp">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lname">Last Name
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-10" id="lname" name="lname" type="text" value="@php echo $data['lname']; @endphp" required>
                                    </div>
                                </div>                                
                                <label>Email Address
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="email" name="email" value="@php echo $data['email']; @endphp">
                                
                                
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-group" id="show_hide_password">
                                              <input class="form-control" name="password" id="pass" type="password" value="@php echo $data['password']; @endphp" required>
                                              <div class="input-group-addon">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                    
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <div class="input-group" id="show_hide_cpassword">
                                          <input class="form-control" name="cpass" id="cpass" type="password" value="@php echo $data['password']; @endphp" required>
                                          <div class="input-group-addon">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                          </div>
                                        </div>
                                    </div>
                                    
                                
                                <label>Conact Number    
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="phone" value="@php echo $data['phone']; @endphp" required>
                                <div class="form-group">
                                    <label for="address">Contact Address <span class="color:red;">*</span></label>
                                    <textarea class="form-control" id="address" name="address"rows="3">@php
                                        echo $data['address'];
                                    @endphp</textarea>
                                  </div>
                                
                                <label for="formFile" class="form-label">
                                    Profile Picture
                                </label>
                                <input class="form-control" type="file" name="profile" id="formFile">
                                <input type="hidden" name="profile" value="@php echo $data['images']; @endphp">
                                <img src="	http://localhost:8000/img/profiles/@php echo $data['images']; @endphp" class="user-profile-image rounded-circle" alt="asds" />
                                <hr>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-8 text-right">
                                        <button class="btn btn-primary btn-lg" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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

                            <a href="{{url('assets/Medical-Certificate-SafarNama.pdf')}}" download="Medical-Certificate-SafarNama.pdf"><button class="btn btn-primary btn-lg margin-top-20" id="medical"  type="button">Download</button></a>
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
        $(document).ready(function() {
            $('#cpass').focusout(function (){
            var pass = $('#pass').val();            
            var cpass = $('#cpass').val();
            if( cpass == pass)
            {
                $('#submit').removeAttr('disabled');
                $('#pass').css( "border-color",'' );
                $('#cpass').css( "border-color",'' );
            }
            else
            {
                $('#pass').css( "border-color",'red' );
                $('#cpass').css( "border-color",'red' );
                alert("Make sure password and Confrim password are same....");            
            }
            });
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
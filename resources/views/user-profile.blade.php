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
    <div class="container">
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
            <div dataidmain-wrapper">
                <div class="row">
                    <div class="col-lg-5 col-xl-3">
                        <div class="card card-white grid-margin">
                            <div class="card-heading clearfix">
                                <h4 class="card-title">User Profile</h4>
                            </div>
                            <div class="card-body user-profile-card mb-3">
                                <img src="img/profiles/@php echo $userdata['images']; @endphp"
                                    class="user-profile-image rounded-circle" alt="" />
                                <h4 class="text-center h6 mt-2"></h4>
                                    @php
                                        echo $userdata['fname'].' '. $userdata['lname'];
                                    @endphp
                            </div>
                            <hr />
                            <div class="card-heading clearfix mt-3">
                                <h4 class="card-title">Contact Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0 text-muted">
                                        <tbody style="font-size: 10px;">
                                            <tr>
                                                <th scope="row">Email:</th>
                                                <td>{{ $userdata->email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone:</th>
                                                <td>{{ $userdata->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td>{{ $userdata->address}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <form action="{{ route('create.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-white grid-margin">
                                <div class="card-body">
                                    <div class="post">
                                        <input class="form-control" type="text" name="title"
                                            placeholder="Title of your Blog...">
                                        <br>
                                        <textarea class="form-control" id="editor" name="description"
                                            placeholder="New Blog" rows="4"></textarea>
                                        <div class="post-options">
                                            <input type="file" class="file" name="attechment" id="">
                                            <input type="hidden" name="user_id" value="{{ Session::get('user_id') }}">
                                            <hr />
                                            <input type="submit" class="btn btn-outline-primary float-right" Value="Post">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                        @foreach ($newdata as $item)
                            <div class="profile-timeline">
                                <ul class="list-unstyled">
                                    <li class="timeline-item">
                                        <div class="card card-white grid-margin">
                                            <div class="card-body">
                                                <div class="timeline-item-header">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                        alt="" />
                                                    <span>@php echo $userdata['fname'].' '.$userdata['lname'];@endphp
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </span>
                                                    <i class="fa fa-ellipsis-v more " id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        data-id="@php echo $item['post_id'];@endphp"></i>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li  data-id="@php echo $item['post_id']; @endphp">
                                                            <a class="dropdown-item" href="etid-post/@php echo $item['post_id']; @endphp">Edit Post</a>
                                                        </li>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="delete-post/@php echo $item['post_id']; @endphp">Detele Post</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="timeline-item-post">
                                                    <h3>@php echo $item['title'];@endphp</h3>
                                                    @php echo $item['description'];@endphp
                                                    <img src="img/post/@php echo $item['image'];@endphp" alt="" />
                                                    <br>
                                                    <br>
                                                    @foreach ($item['comment'] as $itemsss)
                                                    <div class="timeline-comment">
                                                        <div class="timeline-comment-header">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                                alt="" />
                                                            
                                                                 @php echo $itemsss['cusername']; @endphp
                                                                <br><p>@php echo $itemsss['comment'];@endphp</p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                <form action="{{route('reply-comment')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="post_id" value ="@php echo $item['post_id']; @endphp">
                                                    <input type="hidden" name="user_id" value ="{{Session::get('user_id')}}">
                                                    <textarea class="form-control" placeholder="Replay" name='comment'></textarea>
                                                    <input type="submit" class="btn btn-success"value="Reply" name="submit">
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="card card-white grid-margin">
                            <div class="card-heading clearfix">
                                <h4 class="card-title">Actions</h4>
                            </div>
                            <div class="card-body">
                                <div class="team-member">
                                    <a class='btn btn-danger btn-sm' href="{{ 'user-logout' }}">Logout</a>
                                    <a class='btn btn-secondary btn-sm' href="{{route('edit-profile',Session::get('user_id'))}}">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-white grid-margin">
                            <div class="card-heading clearfix">
                                <h4 class="card-title">Some Info</h4>
                            </div>
                            <div class="card-body">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                    architecto.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
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

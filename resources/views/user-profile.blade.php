<html>

<head>
    <link rel="stylesheet" href="{{ url('css/raj.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <style>
        .more:hover {
            background-color: #e9e9e9;
            border-radius: 50px 50px;
        }

        .more {
            padding: 5px 12px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="page-inner no-page-title">
            <!-- start page main wrapper -->
            <div dataidmain-wrapper">
                <div class="row">
                    <div class="col-lg-5 col-xl-3">
                        <div class="card card-white grid-margin">
                            <div class="card-heading clearfix">
                                <h4 class="card-title">User Profile</h4>
                            </div>
                            <div class="card-body user-profile-card mb-3">
                                <img src="{{ url('img/profiles/' . Session::get('images')) }}"
                                    class="user-profile-image rounded-circle" alt="" />
                                <h4 class="text-center h6 mt-2"></h4>
                                @if (Session::has('fname'))
                                    {{ Session::get('fname') }} {{ Session::get('lname') }}
                                @endif
                            </div>
                            <hr />
                            <div class="card-heading clearfix mt-3">
                                <h4 class="card-title">Contact Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0 text-muted">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Email:</th>
                                                <td>{{ Session::get('email') }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone:</th>
                                                <td>{{ Session::get('phone') }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td>{{ Session::get('address') }}</td>
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
                                            <input type="submit" class="btn btn-outline-primary float-right"
                                                Value="Post">
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
                                                    <span>{{ Session::get('fname') }} {{ Session::get('lname') }}
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </span>
                                                    <i class="fa fa-ellipsis-v more " id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        data-id="@php echo $item['post_id'];@endphp"></i>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li class="dropdown-item postid" data-id="@php echo $item['post_id']; @endphp">
                                                            Edit Post</li>
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
                                                    <textarea class="form-control" placeholder="Replay"></textarea>
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
                                    <a class='btn btn-danger btn-sm' href="{{ 'logout' }}">Logout</a>
                                    <a class='btn btn-secondary btn-sm' href="">Edit Profile</a>
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
<script>
    $(document).ready(function() {
        CKEDITOR.replace('description');

        $(".postid").click(function() {
            var dataid = $(this).attr("data-id");
            alert(dataid);
        });
    });
</script>

</html>

@include('admin.header')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Contact Us List</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Success</h4>
                    <div class="alert-body">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>Subject</th>
                                        <th>Reference</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($showcontactUs as $list)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $list->userName }}</td>
                                            <td>{{ $list->userEmail }}</td>
                                            <td>{{ $list->userMobile }}</td>
                                            <td>{{ $list->userSubject }}</td>
                                            <td>{{ $list->userReference }}</td>
                                            <td>{{ Str::limit($list->userMessage, 30) }}</td>
                                            <td>{{ $list->created_at }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" style="text-align: center;">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.footer')

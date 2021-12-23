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
                        <h2 class="content-header-title float-left mb-0">Banner List</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a href="{{ asset('relevarch/admin/addBanner') }}" class="btn btn-primary ag-grid-export-btn">Add New Banner</a>
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
                                        <th>Heading</th>
                                        <th>Sub Heading</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($bannerList as $list)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $list->bname }}</td>
                                            <td>{{ $list->bheading }}</td>
                                            <td>{{ Str::limit($list->bsubheading, 50) }}</td>
                                            <td>
                                                <img src="{{ asset('/images/Banners/' . $list->bimage) }}" tooltip="{{ $list->bname }}" class="avatar mr-75" height="45" width="45" alt="{{ $list->bname }}" />
                                            </td>
                                            <td>
                                                <a class="btn btn-flat-primary" href="{{ route('relevarch.admin.editBanner', $list->id) }}" title="Edit">Edit</a>
                                                <a class="btn btn-flat-danger" href="{{ route('relevarch.admin.deleteBanner', $list->id) }}" title="Delete">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" style="text-align: center;">No Data Found</td>
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

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
                        <h2 class="content-header-title float-left mb-0">Portfolio List</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a href="{{ asset('relevarch/admin/addPortfolio') }}"
                            class="btn btn-primary ag-grid-export-btn">Add New Record</a>
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
                                        <th class="col-md-3">Sr No</th>
                                        <th class="col-md-3">Category</th>
                                        <th class="col-md-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($portfolioList as $list)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="col-md-3">{{ $list->category_name }}</td>
                                            <td class="col-md-3">
                                                <a class="btn btn-flat-primary"
                                                    href="{{ route('relevarch.admin.addPortfolio') }}?id={{ $list->category }}"
                                                    title="Edit">Edit</a>
                                                <a class="btn btn-flat-danger"
                                                    href="{{ route('relevarch.admin.deletePortfolio', $list->category) }}"
                                                    title="Delete">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" style="text-align: center;">No Data Found</td>
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
<script>
    setTimeout(function() {
        $('.alert-success').hide()
    }, 5000);
</script>
@include('admin.footer')

@include('admin.header')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="alert-body">
                <div id="success_message"></div>
            </div>
            <section id="form-and-scrolling-components">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Social List</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('social.store') }}" method="POST">
                                    @csrf
                                    <div class="content-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <h4 class="card-title">Facebook</h4>
                                                                <input id="largeInput" name="fb"
                                                                    class="form-control form-control-lg" value="{{ (isset($social->fb)) ? $social->fb : '' }}"
                                                                    type="text">
                                                            </div>

                                                            <div class="col-sm-6 col-12">
                                                                <div class="form-group">
                                                                    <h4 class="card-title">YouTube</h4>
                                                                    <input id="largeInput" name="yt"
                                                                        class="form-control form-control-lg" value="{{ (isset($social->yt)) ? $social->yt : '' }}"
                                                                        type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single file upload ends -->

                                        <!-- Floating Label Inputs start -->
                                        <section id="basic-select2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card mb-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-group">
                                                                        <h4 class="card-title">Instagram</h4>
                                                                        <input id="largeInput" name="ig"
                                                                            class="form-control form-control-lg"
                                                                            value="{{ (isset($social->ig)) ? $social->ig : '' }}" type="text">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-group">
                                                                        <h4 class="card-title">Twitter</h4>
                                                                        <input id="largeInput" name="tw"
                                                                            class="form-control form-control-lg"
                                                                            value="{{ (isset($social->tw)) ? $social->tw : '' }}" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Floating Label Inputs end -->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="dropdown">
                                                                    <button type="submit" class="btn btn-primary ag-grid-export-btn">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.footer')

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
                        <h2 class="content-header-title float-left mb-0">Add Banner</h2>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('relevarch.admin.insertBanner') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content-body">
                <!-- single file upload starts -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <h4 class="card-title">Banner Name</h4>
                                            <input id="largeInput" name="bname" class="form-control form-control-lg"
                                                value="{{ old('bname') }}" type="text" placeholder="Banner Name" />
                                        </div>
                                        @error('bname')
                                            <p class="text-danger">{{ 'Please Enter Banner Name' }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <h4 class="card-title">Heading</h4>
                                            <input id="largeInput" name="bheading" class="form-control form-control-lg"
                                                value="{{ old('bheading') }}" type="text" placeholder="Heading" />
                                        </div>
                                        @error('bheading')
                                            <p class="text-danger">{{ 'Please Enter Banner Heading Name' }}</p>
                                        @enderror
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group">
                                                <h4 class="card-title">Sub Heading</h4>
                                                <div class="form-label-group">
                                                    <textarea class="form-control" name="bsub-heading"
                                                        id="label-textarea" rows="3"
                                                        placeholder="Sub Heading">{{ old('bsub-heading') }}</textarea>
                                                </div>
                                            </div>
                                            @error('bsub-heading')
                                                <p class="text-danger">{{ 'Please Enter Banner Sub Heading' }}</p>
                                            @enderror
                                        </div>


                                        <div class="col-sm-6 col-12">
                                            <h4 class="card-title">Upload Banner</h4>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image"
                                                    id="customFile1" />
                                                <label class="custom-file-label" for="customFile1">Choose
                                                    <strong>Banner</strong> to upload.</label>
                                            </div>
                                            @error('image')
                                                <p class="text-danger">
                                                    {{ 'Image Dimensions Should be of 1900px X 750px only' }}</p>
                                            @enderror
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
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dropdown">
                                            <button type="submit"
                                                class="btn btn-primary ag-grid-export-btn">Save</button>
                                            <a href="{{ asset('relevarch/admin/bannerList') }}"
                                                class="btn btn-danger waves-effect waves-float waves-light">Cancel</a>
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
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.footer')

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
                        <h2 class="content-header-title float-left mb-0">Update Portfolio</h2>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div class="content-body">
            <!-- single file upload starts -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <h4 class="card-title">Upload Single Image</h4>
                                    <span class="btn btn-success fileinput-button">
                                        <span>Upload Attachment</span>
                                        <input type="file" name="image" id="upload_img" value="{{ $portfolio->image }}" >
                                    </span>
                                    <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview"></div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <h4 class="card-title">Title</h4>
                                        <input id="largeInput" name="title" class="form-control form-control-lg"
                                            type="text" placeholder="Title" value="{{ $portfolio->title }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single file upload ends -->

            <!-- Floating Label Inputs start -->
            <section id="floating-label-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <h4 class="card-title">Category</h4>
                                            <input id="largeInput" name="category" class="form-control form-control-lg" type="text" value="{{ $portfolio->category }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <h4 class="card-title">Upload Multiple Images</h4>
                                            <input type="file" name="images[]" class="form-control" style="height:45px" Multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Floating Label Inputs end -->

            <!-- full Editor start -->
            <section class="full-editor">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Description</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <textarea class="form-control" name="description" id="label-textarea" rows="3">{{ $portfolio->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- full Editor end -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="dropdown">
                                        <button type="submit" class="btn btn-primary ag-grid-export-btn">Add</button>
                                        <a href="{{ asset('relevarch/admin/Dashboard') }}"
                                            class="btn btn-danger waves-effect waves-float waves-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.footer')

<script>
    var imgUpload = document.getElementById('upload_img'),
        imgPreview = document.getElementById('img_preview'),
        imgUploadForm = document.getElementById('img-upload-form'),
        totalFiles, previewTitle, previewTitleText, img;

    imgUpload.addEventListener('change', previewImgs, false);

    function previewImgs(event) {
        totalFiles = imgUpload.files.length;
        if (!!totalFiles) {
            imgPreview.classList.remove('quote-imgs-thumbs--hidden');
            previewTitle = document.createElement('p');
            previewTitle.style.fontWeight = 'bold';
            previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
            previewTitle.appendChild(previewTitleText);
            imgPreview.appendChild(previewTitle);
        }

        for (var i = 0; i < totalFiles; i++) {
            img = document.createElement('img');
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add('img-preview-thumb');
            imgPreview.appendChild(img);
        }
    }
</script>

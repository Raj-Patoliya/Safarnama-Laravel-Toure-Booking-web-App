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
                        <h2 class="content-header-title float-left mb-0">Add Portfolio</h2>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('relevarch.admin.insertPortfolio') }}" method="POST" id="img-upload-form"
            enctype="multipart/form-data" class="invoice-repeater">
            @csrf
            <div class="content-body">
                <input type="hidden" name="pid" value="{{ $id != '' ? $id : '' }}">
                <!-- Floating Label Inputs start -->
                <section id="basic-select2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group">
                                                <h4 class="card-title">Category</h4>
                                                <select name="category"
                                                    class="select2 form-control form-control-lg select2-hidden-accessible">
                                                    <option value="">Select Category</option>
                                                    @foreach ($category as $cat_name)
                                                        <option value="{{ $cat_name->id }}"
                                                            {{ $cat_name->id == $id ? 'selected' : '' }}>
                                                            {{ $cat_name->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="form-control-repeater">
                    <div class="row">
                        <!-- Invoice repeater -->
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4 class="card-title">Invoice</h4>
                                </div> -->
                                <div class="card-body">
                                    <div id="new_fields">
                                        @if (count($Portfolio) > 0)
                                            @foreach ($Portfolio as $p)
                                                <div id="row{{ $loop->iteration }}" data-repeater-list="invoice">
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">
                                                            <div class="col-md-4 col-12">
                                                                <div class="form-group">
                                                                    <label for="itemname">Image <strong>(Image upload
                                                                            size: 565px by 464px)</strong></label>
                                                                    <input type="file" class="form-control"
                                                                        id="itemname" aria-describedby="itemname"
                                                                        name="invoice[{{ $loop->iteration }}][images]"
                                                                        placeholder="Vuexy Admin Template" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-12">
                                                                <div class="form-group">
                                                                    <label for="itemcost">Title</label>
                                                                    <input type="text" class="form-control"
                                                                        id="itemcost"
                                                                        name="invoice[{{ $loop->iteration }}][title]"
                                                                        aria-describedby="itemcost"
                                                                        value="{{ $p->title }}" placeholder="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-12">
                                                                <div class="form-group">
                                                                    <label for="itemquantity">Sub Title</label>
                                                                    <input type="text" class="form-control"
                                                                        name="invoice[{{ $loop->iteration }}][sub_title]"
                                                                        id="itemquantity" value="{{ $p->sub_title }}"
                                                                        aria-describedby="itemquantity"
                                                                        placeholder="" />
                                                                </div>
                                                            </div>
                                                            @if ($loop->iteration > 1)
                                                                <div class="col-md-2 col-12 mb-50">
                                                                    <div class="form-group">
                                                                        <button
                                                                            onclick="remove({{ $loop->iteration }})"
                                                                            class="btn btn-outline-danger text-nowrap px-1"
                                                                            data-repeater-delete type="button">
                                                                            <i data-feather="x"
                                                                                class="mr-25"></i>
                                                                            <span>Delete</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <input type="hidden"
                                                            name="invoice[{{ $loop->iteration }}][hdn_image]"
                                                            value="{{ $p->images }}">
                                                        <img src="{{ asset('images/Portfolio/' . $p->images) }}"
                                                            width="100" height="100" alt="">
                                                        <hr />
                                                    </div>
                                                </div>

                                            @endforeach
                                        @else
                                            <div data-repeater-list="invoice">
                                                <div data-repeater-item>
                                                    <div class="row d-flex align-items-end">
                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="itemname">Image <strong>(Image upload size:
                                                                        565px by 464px)</strong></label>
                                                                <input type="file" class="form-control" id="itemname"
                                                                    aria-describedby="itemname"
                                                                    name="invoice[1][images]"
                                                                    placeholder="Vuexy Admin Template" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="itemcost">Title</label>
                                                                <input type="text" class="form-control" id="itemcost"
                                                                    name="invoice[1][title]" aria-describedby="itemcost"
                                                                    placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="itemquantity">Sub Title</label>
                                                                <input type="text" class="form-control"
                                                                    name="invoice[1][sub_title]" id="itemquantity"
                                                                    aria-describedby="itemquantity" placeholder="" />
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-md-2 col-12 mb-50">
                                                        <div class="form-group">
                                                            <button onclick="remove(1)"
                                                                class="btn btn-outline-danger text-nowrap px-1"
                                                                data-repeater-delete type="button">
                                                                <i data-feather="x" class="mr-25"></i>
                                                                <span>Delete</span>
                                                            </button>
                                                        </div>
                                                    </div> --}}
                                                    </div>
                                                    <hr />
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-icon btn-primary add_more" type="button"
                                                data-repeater-create>
                                                <i data-feather="plus" class="mr-25"></i>
                                                <span>Add New</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice repeater -->
                    </div>
                </section>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dropdown">
                                            <button type="submit"
                                                class="btn btn-primary ag-grid-export-btn">Add</button>
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
        </form>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.footer')

{{-- single upload --}}
<script>
    //I added event handler for the file upload control to access the files properties.
    document.addEventListener("DOMContentLoaded", init, false);

    //To save an array of attachments
    var AttachmentArray = [];

    //counter for attachment array
    var arrCounter = 0;

    //to make sure the error message for number of files will be shown only one time.
    var filesCounterAlertStatus = false;

    //un ordered list to keep attachments thumbnails
    var ul = document.createElement("ul");
    ul.className = "thumb-Images";
    ul.id = "imgList";

    function init() {
        //add javascript handlers for the file upload event
        var el = document.querySelector("#singleFile");
        if (el) {
            el.addEventListener("change", handleFileSelect, false);
        }
    }

    //the handler for file upload event
    function handleFileSelect(e) {
        //to make sure the user select file/files
        if (!e.target.files) return;

        //To obtaine a File reference
        var files = e.target.files;

        // Loop through the FileList and then to render image files as thumbnails.
        for (var i = 0, f;
            (f = files[i]); i++) {
            //instantiate a FileReader object to read its contents into memory
            var fileReader = new FileReader();

            // Closure to capture the file information and apply validation.
            fileReader.onload = (function(readerEvt) {
                return function(e) {
                    //Apply the validation rules for attachments upload
                    ApplyFileValidationRules(readerEvt);

                    //Render attachments thumbnails.
                    RenderThumbnail(e, readerEvt);

                    //Fill the array of attachment
                    FillAttachmentArray(e, readerEvt);
                };
            })(f);

            fileReader.readAsDataURL(f);
        }
        document.getElementById("singleFile").addEventListener("change", handleFileSelect, false);
    }

    //To remove attachment once user click on x button
    jQuery(function($) {
        $("div").on("click", ".img-wrap .close", function() {
            var id = $(this).closest(".img-wrap").find("img").data("id");

            //to remove the deleted item from array
            var elementPos = AttachmentArray.map(function(x) {
                return x.FileName;
            }).indexOf(id);
            if (elementPos !== -1) {
                AttachmentArray.splice(elementPos, 1);
            }

            //to remove image tag
            $(this).parent().find("img").not().remove();

            //to remove div tag that contain the image
            $(this).parent().find("div").not().remove();

            //to remove div tag that contain caption name
            $(this).parent().parent().find("div").not().remove();

            //to remove li tag
            var lis = document.querySelectorAll("#imgList li");
            for (var i = 0;
                (li = lis[i]); i++) {
                if (li.innerHTML == "") {
                    li.parentNode.removeChild(li);
                }
            }
        });
    });

    //Apply the validation rules for attachments upload
    function ApplyFileValidationRules(readerEvt) {
        //To check file type according to upload conditions
        if (CheckFileType(readerEvt.type) == false) {
            alert(
                "The file (" +
                readerEvt.name +
                ") does not match the upload conditions, You can only upload jpg/png/gif files"
            );
            e.preventDefault();
            return;
        }

        //To check file Size according to upload conditions
        if (CheckFileSize(readerEvt.size) == false) {
            alert(
                "The file (" +
                readerEvt.name +
                ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
            );
            e.preventDefault();
            return;
        }

        //To check files count according to upload conditions
        if (CheckFilesCount(AttachmentArray) == false) {
            if (!filesCounterAlertStatus) {
                filesCounterAlertStatus = true;
                alert(
                    "You have added more than 1 files. According to upload conditions you can upload 1 file maximum"
                );
                return false;
            }
            e.preventDefault();
            return;
        }
    }

    //To check file type according to upload conditions
    function CheckFileType(fileType) {
        if (fileType == "image/jpeg") {
            return true;
        } else if (fileType == "image/png") {
            return true;
        } else if (fileType == "image/gif") {
            return true;
        } else {
            return false;
        }
        return true;
    }

    //To check file Size according to upload conditions
    function CheckFileSize(fileSize) {
        if (fileSize < 300000) {
            return true;
        } else {
            return false;
        }
        return true;
    }

    //To check files count according to upload conditions
    function CheckFilesCount(AttachmentArray) {
        //Since AttachmentArray.length return the next available index in the array,
        //I have used the loop to get the real length
        var len = 0;
        for (var i = 0; i < AttachmentArray.length; i++) {
            if (AttachmentArray[i] !== undefined) {
                len++;
            }
        }
        //To check the length does not exceed 10 files maximum
        if (len > 1) {
            return false;
        } else {
            return true;
        }
    }

    //Render attachments thumbnails.
    function RenderThumbnail(e, readerEvt) {
        var li = document.createElement("li");
        ul.appendChild(li);
        li.innerHTML = [
            '<div class="img-wrap"> <span class="close">&times;</span>' +
            '<img class="thumb" src="',
            e.target.result,
            '" title="',
            escape(readerEvt.name),
            '" data-id="',
            readerEvt.name,
            '"/>' + "</div>"
        ].join("");

        var div = document.createElement("div");
        div.className = "FileNameCaptionStyle";
        li.appendChild(div);
        div.innerHTML = [readerEvt.name].join("");
        document.getElementById("Filelist").insertBefore(ul, null);
    }

    //Fill the array of attachment
    function FillAttachmentArray(e, readerEvt) {
        AttachmentArray[arrCounter] = {
            AttachmentType: 1,
            ObjectType: 1,
            FileName: readerEvt.name,
            FileDescription: "Attachment",
            NoteText: "",
            MimeType: readerEvt.type,
            Content: e.target.result.split("base64,")[1],
            FileSizeInBytes: readerEvt.size
        };
        arrCounter = arrCounter + 1;
    }
</script>

{{-- multiple upload --}}
<script>
    //I added event handler for the file upload control to access the files properties.
    document.addEventListener("DOMContentLoaded", initmulti, false);

    //To save an array of attachments
    var AttachmentArraymulti = [];

    //counter for attachment array
    var arrCountermulti = 0;

    //to make sure the error message for number of files will be shown only one time.
    var filesCounterAlertStatusmulti = false;

    //un ordered list to keep attachments thumbnails
    var ulmulti = document.createElement("ul");
    ulmulti.className = "thumb-Images";
    ulmulti.id = "imgListsmulti";

    function initmulti() {
        //add javascript handlers for the file upload event
        var eles = document.querySelector("#upload_imgs");
        if (eles) {
            eles.addEventListener("change", handleFileSelectmulti, false);
        }
    }

    //the handler for file upload event
    function handleFileSelectmulti(e) {
        //to make sure the user select file/files
        if (!e.target.files) return;

        //To obtaine a File reference
        var files = e.target.files;

        // Loop through the FileList and then to render image files as thumbnails.
        for (var i = 0, f;
            (f = files[i]); i++) {
            //instantiate a FileReadermulti object to read its contents into memory
            var fileReadermulti = new FileReader();

            // Closure to capture the file information and apply validation.
            fileReadermulti.onload = (function(readerEvtmulti) {
                return function(e) {
                    //Apply the validation rules for attachments upload
                    ApplyFileValidationRulesmulti(readerEvtmulti);

                    //Render attachments thumbnails.
                    RenderThumbnailmulti(e, readerEvtmulti);

                    //Fill the array of attachment
                    FillAttachmentArraymulti(e, readerEvtmulti);
                };
            })(f);

            // Read in the image file as a data URL.
            // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
            // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
            fileReadermulti.readAsDataURL(f);
        }
        document.getElementById("upload_imgs").addEventListener("change", handleFileSelectmulti, false);
    }

    //To remove attachment once user click on x button
    jQuery(function($) {
        $("div").on("click", ".img-wrap .close", function() {
            var id = $(this).closest(".img-wrap").find("img").data("id");

            //to remove the deleted item from array
            var elementPosmulti = AttachmentArraymulti.map(function(x) {
                return x.FileName;
            }).indexOf(id);
            if (elementPosmulti !== -1) {
                AttachmentArraymulti.splice(elementPosmulti, 1);
            }

            //to remove image tag
            $(this).parent().find("img").not().remove();

            //to remove div tag that contain the image
            $(this).parent().find("div").not().remove();

            //to remove div tag that contain caption name
            $(this).parent().parent().find("div").not().remove();

            //to remove li tag
            var limulti = document.querySelectorAll("#imgListsmulti li");
            for (var i = 0;
                (li = limulti[i]); i++) {
                if (li.innerHTML == "") {
                    li.parentNode.removeChild(li);
                }
            }
        });
    });

    //Apply the validation rules for attachments upload
    function ApplyFileValidationRulesmulti(readerEvtmulti) {
        //To check file type according to upload conditions
        if (CheckFileTypemulti(readerEvtmulti.type) == false) {
            alert(
                "The file (" +
                readerEvtmulti.name +
                ") does not match the upload conditions, You can only upload jpg/png/gif files"
            );
            e.preventDefault();
            return;
        }

        //To check file Size according to upload conditions
        if (CheckFileSizemulti(readerEvtmulti.size) == false) {
            alert(
                "The file (" +
                readerEvtmulti.name +
                ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
            );
            e.preventDefault();
            return;
        }

        //To check files count according to upload conditions
        if (CheckFilesCountmulti(AttachmentArraymulti) == false) {
            if (!filesCounterAlertStatusmulti) {
                filesCounterAlertStatusmulti = true;
                alert(
                    "You have added more than 10 files. According to upload conditions you can upload 10 files maximum"
                );
            }
            e.preventDefault();
            return;
        }
    }

    //To check file type according to upload conditions
    function CheckFileTypemulti(fileTypemulti) {
        if (fileTypemulti == "image/jpeg") {
            return true;
        } else if (fileTypemulti == "image/png") {
            return true;
        } else if (fileTypemulti == "image/gif") {
            return true;
        } else {
            return false;
        }
        return true;
    }

    //To check file Size according to upload conditions
    function CheckFileSizemulti(fileSizemulti) {
        if (fileSizemulti < 300000) {
            return true;
        } else {
            return false;
        }
        return true;
    }

    //To check files count according to upload conditions
    function CheckFilesCountmulti(AttachmentArraymulti) {
        //Since AttachmentArraymulti.length return the next available index in the array,
        //I have used the loop to get the real length
        var lenmulti = 0;
        for (var i = 0; i < AttachmentArraymulti.length; i++) {
            if (AttachmentArraymulti[i] !== undefined) {
                lenmulti++;
            }
        }
        //To check the length does not exceed 10 files maximum
        if (lenmulti > 9) {
            return false;
        } else {
            return true;
        }
    }

    //Render attachments thumbnails.
    function RenderThumbnailmulti(e, readerEvtmulti) {
        var multili = document.createElement("li");
        ulmulti.appendChild(multili);
        multili.innerHTML = [
            '<div class="img-wrap"> <span class="close">&times;</span>' +
            '<img class="thumb" src="',
            e.target.result,
            '" title="',
            escape(readerEvtmulti.name),
            '" data-id="',
            readerEvtmulti.name,
            '"/>' + "</div>"
        ].join("");

        var divmulti = document.createElement("div");
        divmulti.className = "FileNameCaptionStyle";
        multili.appendChild(divmulti);
        divmulti.innerHTML = [readerEvtmulti.name].join("");
        document.getElementById("multiLists").insertBefore(ulmulti, null);
    }

    //Fill the array of attachment
    function FillAttachmentArraymulti(e, readerEvtmulti) {
        AttachmentArraymulti[arrCountermulti] = {
            AttachmentType: 1,
            ObjectType: 1,
            FileName: readerEvtmulti.name,
            FileDescription: "Attachment",
            NoteText: "",
            MimeType: readerEvtmulti.type,
            Content: e.target.result.split("base64,")[1],
            FileSizeInBytes: readerEvtmulti.size
        };
        arrCountermulti = arrCountermulti + 1;
    }


    var n = {{ count($Portfolio) > 0 ? count($Portfolio) : 1 }}
    $('.add_more').click(function() {
        n++;
        var html = '';
        html = '<div id="row' + n + '" data-repeater-list="invoice"><div data-repeater-item>' +
            '<div class="row d-flex align-items-end">' +
            '<div class="col-md-4 col-12">' +
            '<div class="form-group">' +
            '<label for="itemname">Image <strong>(Image upload size: 565px by 464px)</strong></label>' +
            '<input type="file" class="form-control" id="itemname"' +
            'aria-describedby="itemname" name="invoice[' + n + '][images]"' +
            'placeholder="Vuexy Admin Template" />' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3 col-12">' +
            '<div class="form-group">' +
            '<label for="itemcost">Title</label>' +
            '<input type="text" class="form-control" id="itemcost"' +
            'name="invoice[' + n + '][title]" aria-describedby="itemcost"' +
            'placeholder="" />' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3 col-12">' +
            '<div class="form-group">' +
            '<label for="itemquantity">Sub Title</label>' +
            '<input type="text" class="form-control" name="invoice[' + n + '][sub_title]"' +
            'id="itemquantity" aria-describedby="itemquantity"' +
            'placeholder="" />' +
            '</div>' +
            '</div>' +
            '<div class="col-md-2 col-12 mb-50">' +
            '<div class="form-group">' +
            '<button onclick="remove(' + n + ')" class="btn btn-outline-danger text-nowrap px-1"' +
            'data-repeater-delete type="button">' +
            '<i data-feather="x" class="mr-25"></i>' +
            '<span>Delete</span>' +
            '</button>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<hr />' +
            '</div></div>';
        $('#new_fields').append(html);
    });

    function remove(i) {
        $('#row' + i).remove();
    }
</script>

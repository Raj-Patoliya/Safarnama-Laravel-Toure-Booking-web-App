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
                                <h4 class="card-title">Category List</h4>
                            </div>
                            <div class="card-body">
                                <div class="demo-inline-spacing">
                                    <div class="form-modal-ex">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                            data-target="#AddCategoryModal">
                                            Add Category</button>

                                        <!-- Add Modal -->
                                        <div class="modal fade text-left" id="AddCategoryModal" tabindex="-1"
                                            role="dialog" aria-labelledby="AddCategoryModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="AddCategoryModalLabel">Add
                                                            Category
                                                        </h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul id="save_msgList"></ul>
                                                        <label>Category Name </label>
                                                        <div class="form-group">
                                                            <input type="text" name="category_name"
                                                                placeholder="Category Name"
                                                                class="category_name form-control" required />
                                                        </div>
                                                        <label>Select Category</label>
                                                        <div class="form-group">
                                                            <select name="category"
                                                                class="select2 form-control form-control-lg select2-hidden-accessible list-category">
                                                                <option value="">Select Category</option>
                                                                <option value="0">Parent Category</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary add_category"
                                                            data-dismiss="modal" aria-label="Close"
                                                            style="padding: 10px;">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Edit Modal -->
                                        <div class="modal fade text-left" id="EditCategoryModal" tabindex="-1"
                                            role="dialog" aria-labelledby="EditCategoryModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="EditCategoryModalLabel">Edit
                                                            Category
                                                        </h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="#">
                                                        <div class="modal-body">
                                                            <ul id="update_msgList"></ul>
                                                            <input type="hidden" id="cat_id" />
                                                            <label>Category Name </label>
                                                            <div class="form-group">
                                                                <input type="text" name="category_name" id="cat_name"
                                                                    placeholder="Category Name"
                                                                    class="category_name form-control cat_name" value=""
                                                                    required />
                                                            </div>
                                                            <label>Select Category</label>
                                                            <div class="form-group">
                                                                <select name="category"
                                                                    class="select2 form-control form-control-lg select2-hidden-accessible category_id list-category">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-primary update_category">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Delete Modal -->
                                        <div class="modal fade text-left" id="DeleteCategoryModal" tabindex="-1"
                                            role="dialog" aria-labelledby="DeleteCategoryModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="DeleteCategoryModalLabel">Delete
                                                            Category
                                                        </h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="#">
                                                        <div class="modal-body">
                                                            <label>Are you Sure You want to Delete category ?</label>
                                                            <input type="hidden" id="delete_cat_name">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-primary delete_category">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Parent Category</th>
                                            <th>Sub Category Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
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

<script>
    $(document).ready(function() {
        fetchCategory();

        function fetchCategory() {
            $.ajax({
                type: "GET",
                url: "/relevarch/admin/fetchCategory",
                dataType: "json",
                success: function(response) {
                    $('tbody').html("");
                    var html = '';
                    var i = 0;
                    $.each(response.categoryList, function(key, item) {
                        i++;
                        html = '<tr>' +
                            '<td>' + i + '</td>' +
                            '<td>' + item.category_name + '</td><td><ul class="list-unstyled">';
                        var sub_category = item.sub;
                        for (var j = 0; j < sub_category.length; j++) {
                            html +=
                                '<li class="mb-2"><span class="badge badge-pill badge-light-primary mr-1">' +
                                sub_category[j]
                                .category_name + '</span></li>';

                        }
                        html += '</ul></td><td>';
                        if (sub_category.length > 0) {
                            for (var k = 0; k < sub_category.length; k++) {
                                html += '<button type="button" value="' + sub_category[k]
                                    .id +
                                    '" class="editbtn btn btn-flat-primary mb-1" cat_name="' +
                                    sub_category[k].category_name + '"  parents_id="' +
                                    sub_category[k].parents_id +
                                    '" >Edit</button> <button type="button" value="' +
                                    sub_category[k].id +
                                    '"class="deletebtn btn btn-flat-danger mb-1">Delete</button><br>';
                            }
                        } else {
                            html += '<button type="button" value="' + item.id +
                                '" class="editbtn btn btn-primary btn-cart move-cart waves-effect waves-float waves-light mb-1" cat_name="' +
                                item.category_name + '"  parents_id="' +
                                item.parents_id +
                                '" >Edit</button> <button type="button" value="' +
                                item.id +
                                '"class="deletebtn btn btn-danger btn-cart move-cart waves-effect waves-float waves-light mb-1">Delete</button><br>';
                        }
                        html += '</td></tr>';
                        $('tbody').append(html);
                    });

                    var html2 =
                        '<option value="">Select Category</option><option value="0">Parent Category</option>';
                    $.each(response.categoryList, function(key, item) {
                        html2 += '<option value="' + item.id + '">' + item
                            .category_name + '</option>';
                    });
                    $('.list-category').html(html2);
                }
            });
        }

        $(document).on('click', '.add_category', function(e) {
            e.preventDefault();
            var data = {
                'category_name': $('.category_name').val(),
                'category': $('.select2').val(),
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/relevarch/admin/categoryInsert",
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#save_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('#AddCategoryModal').modal('show');
                        $('.category_name').focus();
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success p-1');
                        $('#success_message').text(response.message);
                        $('#AddCategoryModal').find('input').val('');
                        $('#AddCategoryModal').modal('hide');
                        fetchCategory();
                        setTimeout(function() {
                            $('.alert-success').hide()
                        }, 5000);
                    }
                }
            });
            $(document).on('click', '.close', function() {
                $('#AddCategoryModal').modal('hide');
            });
        });

        $(document).on('click', '.editbtn', function(e) {
            e.preventDefault();
            $('#cat_id').val('');
            $('.cat_name').val('');
            $('.category_id').val('').change();
            var cat_id = $(this).val();
            var name = $(this).attr('cat_name');
            var parents_id = $(this).attr('parents_id');
            $('#EditCategoryModal').modal('show');
            $('.cat_name').val(name);
            $('.category_id').val(parents_id).change();
            $('#cat_id').val(cat_id);
            $(document).on('click', '.close', function() {
                $('#EditCategoryModal').modal('hide');
            });
        });

        $(document).on('click', '.update_category', function(e) {
            e.preventDefault();
            var id = $('#cat_id').val();

            var data = {
                'category_name': $('#cat_name').val(),
                'parents_id': $('.category_id').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/relevarch/admin/categoryUpdate/" + id,
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_category').text('Update');
                    } else {
                        $('#update_msgList').html("");

                        $('#success_message').addClass('alert alert-success p-1');
                        $('#success_message').text(response.message);
                        $('#EditCategoryModal').find('input').val('');
                        $('.update_category').text('Update');
                        $('#EditCategoryModal').modal('hide');
                        fetchCategory();
                        setTimeout(function() {
                            $('.alert-success').hide()
                        }, 5000);
                    }
                }
            });

        });

        $(document).on('click', '.deletebtn', function() {
            var cat_id = $(this).val();
            $('#DeleteCategoryModal').modal('show');
            $('#delete_cat_name').val(cat_id);
            $(document).on('click', '.close', function() {
                $('#DeleteCategoryModal').modal('hide');
            });
        });

        $(document).on('click', '.delete_category', function(e) {
            e.preventDefault();
            $(this).text('Deleting..');
            var id = $('#delete_cat_name').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/relevarch/admin/categoryDelete/" + id,
                dataType: "json",
                success: function(response) {
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success p-1');
                        $('#success_message').text(response.message);
                        $('.delete_category').text('Yes, Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success p-1');
                        $('#success_message').text(response.message);
                        $('.delete_category').text('Yes, Delete');
                        $('#DeleteCategoryModal').modal('hide');
                        fetchCategory();
                        setTimeout(function() {
                            $('.alert-success').hide()
                        }, 5000);
                    }

                }
            });
        });
    });
</script>

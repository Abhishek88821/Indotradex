<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2 d-flex justify-content-between">
                            <h4 class="mb-0">Tranding Category </h4>
                            <a data-bs-toggle="modal" data-bs-target="#category-modal" class="btn btn-success">Create
                                New</a>
                        </div>
                        <div class="">
                            <table id="file_export"
                                class="table border table-striped table-bordered display text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name </th>
                                        <th>Status </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tranding as $key => $item)
                                        <tr id="{{ $item->id }}">
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                 <a href="javascript:void(0);"  class="text-primary status-category"  data-id="{{ $item->id }}" >
                                                     <i class="fa-solid {{ $item->status == 1 ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="text-primary p-2"> <i class="fa-solid fa-eye"></i> </a>
                                                <a href="javascript:void(0);"
                                                    class="text-primary edit-category" data-id="{{ $item->id }}"> 
                                                    <i class="fa-solid fa-pen-to-square"> </i>
                                                </a>
                                                <a href="javascript:void(0);" class="text-danger delete-category"
                                                    data-id="{{ $item->id }}">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="category-modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h2> Create New Category </h2>
                    </div>

                    <form id="categoryForm" class="ps-3 pr-3">
                        @csrf <!-- Add CSRF token -->
                        <div class="mb-3">
                            <label for="categoryInput">Category</label>
                            <input class="form-control" type="text" required="" id="categoryInput"
                                placeholder="Enter Category Here ... " />
                        </div>

                        <div class="mb-3">
                            <label for="displayOrderInput">Display Order</label>
                            <input class="form-control" type="number" id="displayOrderInput"
                                placeholder="Enter Display Order" />
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-rounded btn-light-info text-info font-medium">Create</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div id="edit-category-modal" class="modal fade"  tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h2> Edit New Category </h2>
                    </div>

                    <form id="editCategoryForm" class="ps-3 pr-3">
                        @csrf <!-- Add CSRF token -->
                        <div class="mb-3">
                            <label for="categoryInput"> Category Id</label>
                            <input class="form-control" type="number" required="" id="editCategoryId"
                            readonly />
                        </div>
                        <div class="mb-3">
                            <label for="categoryInput">Category</label>
                            <input class="form-control" type="text" required="" id="editCategoryName"
                                placeholder="Enter Category Here ... " />
                        </div>
                        <div class="mb-3">
                            <label for="categoryInput"> Category Slug</label>
                            <input class="form-control" type="text" required="" id="editCategorySlug"
                                placeholder="Enter Category Slug Here ... " />
                        </div>

                        <div class="mb-3">
                            <label for="displayOrderInput">Display Order</label>
                            <input class="form-control" type="number" id="editDisplayOrder"
                                placeholder="Enter Display Order" />
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-rounded btn-light-info text-info font-medium">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
 $(document).ready(function() {
    // Create category
    $("#categoryForm").submit(function(event) {
        event.preventDefault();

        $.ajax({
            type: "POST",
            url: "{{ route('admin.tranding.category.store') }}",
            data: {
                _token: "{{ csrf_token() }}",
                name: $("#categoryInput").val(),
                displayOrder: $("#displayOrderInput").val(),
            },
            success: function(response) {
                if (response.status == true) {
                    var newRow = '<tr>' +
                        ' <td>' + response.data.id + '</td>' +
                        ' <td>' + response.data.name + '</td>' +
                        ' <td> <a href="/admin/tranding/category/status/' + response.data.id + '" class="text-primary"> ' +
                        '<i class="fa-solid fa-toggle-on"></i>' +
                        '</a></td>' +
                        '<td>' +
                        '<a href="text-primary p-2"> <i class="fa-solid fa-eye"></i> </a>' +
                        '<a href="/admin/tranding/category/edit/' + response.data.id +
                        '" class="text-success p-2"> <i class="fa-solid fa-pen-to-square"></i> </a>' +
                        ' <a href="javascript:void(0);" class="text-danger delete-category" data-id="' +
                        response.data.id + '">' +
                        ' <i class="fa-solid fa-trash"></i>' +
                        '</a>' +
                        '</td>' +
                        ' </tr>';

                    $("#file_export tbody").append(newRow);

                    // Clear the form fields
                    $("#categoryInput").val('');
                    $("#displayOrderInput").val('');

                    // Close the modal
                    $("#category-modal").modal('hide');
                } else {
                    alert("Something went wrong");
                }
            },
            error: function(error) {
                alert("Error submitting form: " + error);
            },
        });
        return false;
    });

    // Delete category
    $("body").on("click", ".delete-category", function() {
        var categoryId = $(this).data("id");
        if (confirm("Are you sure you want to delete this category?")) {
            $.ajax({
                type: "DELETE",
                url: "/admin/tranding/category/destroy/" + categoryId,
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    if (response.status == true) {
                        $('#' + categoryId).remove();
                    } else {
                        alert('Something went wrong');
                    }
                },
                error: function(error) {
                    alert("Error deleting category: " + error);
                },
            });
        }
    });

    // Update category status
    $("body").on("click", ".status-category", function() {
        var Id = $(this).data("id");

        $.ajax({
            type: "get",
            url: "/admin/tranding/category/status/" + Id,
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                $('#'+ Id + ' i').removeClass('fa-toggle-on fa-toggle-off');
                if (response.status == true) {
                    if (response.data.status == 1) {
                        $('#'+ Id + ' i').addClass('fa-toggle-on');
                    } else {
                        $('#'+ Id + ' i').addClass('fa-toggle-off');
                    }
                } else {
                    alert('Something went wrong');
                }
            },
            error: function(error) {
                console.log("Error updating category status: " + error);
            },
        });
    });
});



// Edit category
$("body").on("click", ".edit-category", function() {
    var categoryId = $(this).data("id");
    $.ajax({
        type: "GET",
        url: "/admin/tranding/category/edit/" + categoryId,
        data: {
            _token: "{{ csrf_token() }}",
        },
        success: function(response) {
            if (response.status == true) {
                console.log(response.data);
                $("#editCategoryId").val(response.data.id);
                $("#editCategoryName").val(response.data.name);
                $("#editDisplayOrder").val(response.data.order);
                $("#editCategorySlug").val(response.data.slug);

                $("#edit-category-modal").modal("show");
            } else {
                alert('Something went wrong');
            }
        },
        error: function(error) {
            alert("Error fetching category data: " + error);
        },
    });
});

// Handle the edit form submission
$("#editCategoryForm").submit(function(event) {
    event.preventDefault();

    var categoryId = $("#editCategoryId").val();

    $.ajax({
        type: "PUT",
        url: "/admin/tranding/category/update",
        data: {
            _token: "{{ csrf_token() }}",
            categoryId: categoryId,
            name: $("#editCategoryName").val(),
            order: $("#editDisplayOrder").val(),
            slug: $("#editCategorySlug").val(),
        },
        success: function(response) {
            if (response.status == true) {
                var row = $("#" + categoryId);
                row.find("td:eq(1)").text(response.data.name);
                $("#edit-category-modal").modal("hide");
            } else {
                alert('Something went wrong');
            }
        },
        error: function(error) {
            alert("Error updating category: " + error);
        },
    });
});


    </script>

</x-app-layout>

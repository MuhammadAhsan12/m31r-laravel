@extends('admin.master')

@section('pagecontent')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card bg-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">User List</h4>
                    <a class="btn btn-info d-none d-md-block" style="color: white" data-toggle="modal" data-target="#add-model">Add User</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data table</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>S.No #</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Last Update</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- add model --}}
    <div class="modal fade" id="add-model" style="margin-top: -70px" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-user-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role" required>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="addUser()">Save</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- edit model --}}
    <div class="modal fade" id="edit-model" style="margin-top: -70px" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-user-form">
                        @csrf
                        <input type="hidden" id="edit-id" name="id">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="edit-name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="edit-email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="edit-password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="edit-role" name="role" required>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="edit-status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="editUser()">Save</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- view model --}}
    <div class="modal fade" id="view-model" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">View Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Name
                        </span>
                        <span class="float-right text-muted" id="view-name"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Email
                        </span>
                        <span class="float-right text-muted" id="view-email"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Role
                        </span>
                        <span class="float-right text-muted" id="view-role"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Status
                        </span>
                        <span class="float-right text-muted" id="view-status"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Updated at
                        </span>
                        <span class="float-right text-muted" id="view-update"></span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('adminfiles/assets/js/jquery.min.js') }}"></script>
<script>
    

    $(document).ready(function() {

        $('#order-listing').DataTable({

            "ajax": {
                "url": "{{route('userData')}}", // Replace with your API endpoint
                "dataSrc": ""
            },
            "columns": [{
                    "data": null,
                    "render": function(data, type, row, meta) {
                        // Use meta.row to get the current row index
                        return meta.row + 1; // Add 1 to start the serial number from 1
                    }
                },
                {
                    "data": "name"
                },
                {
                    "data": "email"
                },
                {
                    "data": "role"
                },
                {
                    "data": "updated_at",
                    "render": function(data, type, row) {
                        // Use the formatDateTime function to format the date
                        return formatDateTime(data);
                    }
                },
                {
                    "data": "status",
                    "render": function(data, type, row) {
                        // Use the formatDateTime function to format the date
                        return `<label class="${row.status === 'active' ? 'badge badge-success' : 'badge badge-danger'}">${row.status}</label>`;
                    }
                },

                {
                    "data": "id",
                    "render": function(data, type, row) {
                        return '<button onclick="getUserDataView(' + data + ')" class="btn btn-outline-primary"  data-toggle="modal" data-target="#view-model" ><i class="mdi mdi-eye text-primary"></i></button>  <button onclick="getUserDataEdit(' + data + ')" class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-model" ><i class="mdi mdi-pencil text-primary"></i></button> <button onclick="userDelete(' + data + ')"  class="btn btn-outline-primary delete-person-btn" ><i class="mdi mdi-close text-danger"></i></button>';
                    }
                }
            ],
        });
    });


    function formatDateTime(dateTimeString) {
        const date = new Date(dateTimeString);

        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        const hours = String(date.getHours()).padStart(2, '0');
        const minutes = String(date.getMinutes()).padStart(2, '0');
        const seconds = String(date.getSeconds()).padStart(2, '0');

        const formattedDateTime = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

        return formattedDateTime;
    }

    function addUser() {
        var formData = $('#add-user-form').serialize();
        $.ajax({
            type: 'POST',
            url: "{{ route('adduserdata') }}",
            data: formData,
            success: function(response) {
                showSuccessToast(text = response.message);
                $('#add-model').modal('hide');
                $('#add-user-form')[0].reset();
                $('#order-listing').DataTable().ajax.reload(null, false);
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message);
            }
        });
    }

    function getUserDataView(id) {
        $.ajax({
            type: 'GET',
            url: "{{ route('viewuser', ':id') }}".replace(':id', id),

            success: function(response) {
                document.getElementById("view-name").innerHTML = response.name;
                document.getElementById("view-email").innerHTML = response.email;
                document.getElementById("view-role").innerHTML = response.role;
                document.getElementById("view-status").innerHTML = response.status;
                document.getElementById("view-update").innerHTML = formatDateTime(response.updated_at);
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message)
            }
        });
    }

    function getUserDataEdit(id) {
        $.ajax({
            type: 'GET',
            url: "{{ route('viewuser', ':id') }}".replace(':id', id),

            success: function(response) {
                console.log(response);
                document.getElementById("edit-id").value = response.id;
                document.getElementById("edit-name").value = response.name;
                document.getElementById("edit-email").value = response.email;
                document.getElementById("edit-role").value = response.role;
                document.getElementById("edit-status").value = response.status;
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message)
            }
        });
    }

    function editUser() {
        var formDataEdit = $('#edit-user-form').serialize();
        var id = document.getElementById("edit-id").value;
        $.ajax({
            type: 'POST',
            url: "{{ route('edituserdata', ':id') }}".replace(':id', id),
            data: formDataEdit,
            success: function(response) {
                showSuccessToast(text = response.message);
                $('#edit-model').modal('hide');
                $('#edit-user-form')[0].reset();
                $('#order-listing').DataTable().ajax.reload(null, false);
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message);
            }
        });
    }

    function userDelete(id) {
        event.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3f51b5',
            cancelButtonColor: '#ff4081',
            confirmButtonText: 'Great ',
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: false,
                    visible: true,
                    className: "btn btn-danger",
                    closeModal: true,
                },
                confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "btn btn-primary",
                    closeModal: true
                }
            }
        }).then((result) => {
            if (result) {
                $.ajax({
                    type: 'DELETE',
                    url: "{{ route('deleteUser', ':id') }}".replace(':id', id),
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        showSuccessToast(text = response.message);
                        $('#order-listing').DataTable().ajax.reload(null, false);
                    },
                    error: function(error) {
                        showDangerToast(text = error.responseJSON.message)
                    }
                });
            } else if (result.isDismissed) {
                swal('Cancelled', 'User deletion was cancelled', 'info');
            }
        });
    }

</script>
@stop
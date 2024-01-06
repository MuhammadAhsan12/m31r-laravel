@extends('admin.master')

@section('pagecontent')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card bg-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">Company List</h4>
                    <a class="btn btn-info d-none d-md-block" style="color: white" data-toggle="modal" data-target="#add-model">Add Company</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Company Data Table</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>S.No #</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Last Update</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="companyList">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- add model --}}
    <div class="modal fade" id="add-model" style="margin-top: -40px" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Add Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-company-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" name="website" placeholder="Website" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact_person_name">Contact Person Name</label>
                                    <input type="text" class="form-control" id="contact_person_name" name="contact_person_name" placeholder="Contact Person Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_person_email">Contact Person Email</label>
                                    <input type="email" class="form-control" id="contact_person_email" name="contact_person_email" placeholder="Contact Person Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="country_or_registration">Country/Registration</label>
                                    <input type="text" class="form-control" id="country_or_registration" name="country_or_registration" placeholder="Country/Registration" required>
                                </div>
                                <div class="form-group">
                                    <label for="registration_year">Registration Year</label>
                                    <input type="text" class="form-control" id="registration_year" name="registration_year" placeholder="Registration Year" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="addCompany()">Save</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- edit model --}}
    <div class="modal fade" id="edit-model" style="margin-top: -40px" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Edit Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-company-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" id="edit-id">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="edit-name" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="edit-website" name="website" placeholder="Website" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="edit-phone" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="edit-email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact_person_name">Contact Person Name</label>
                                    <input type="text" class="form-control" id="edit-contact_person_name" name="contact_person_name" placeholder="Contact Person Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_person_email">Contact Person Email</label>
                                    <input type="email" class="form-control" id="edit-contact_person_email" name="contact_person_email" placeholder="Contact Person Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="country_or_registration">Country/Registration</label>
                                    <input type="text" class="form-control" id="edit-country_or_registration" name="country_or_registration" placeholder="Country/Registration" required>
                                </div>
                                <div class="form-group">
                                    <label for="registration_year">Registration Year</label>
                                    <input type="text" class="form-control" id="edit-registration_year" name="registration_year" placeholder="Registration Year" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="editCompany()">Save</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- view model --}}
    <div class="modal fade" id="view-model" style="margin-top: -40px" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                            Phone
                        </span>
                        <span class="float-right text-muted" id="view-phone"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Website
                        </span>
                        <span class="float-right text-muted" id="view-website"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Contact Peron Name
                        </span>
                        <span class="float-right text-muted" id="view-contact_person_name"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Contact Person Email
                        </span>
                        <span class="float-right text-muted" id="view-contact_person_email"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Country or Regestration
                        </span>
                        <span class="float-right text-muted" id="view-country_or_registration"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Regestration Year
                        </span>
                        <span class="float-right text-muted" id="view-registration_year"></span>
                    </p>
                    <p class="clearfix pb-3">
                        <span class="float-left">
                            Updated at
                        </span>
                        <span class="float-right text-muted" id="view-updated_at"></span>
                    </p>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-success">Send message</button> --}}
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
                "url": "{{route('companyData')}}", // Replace with your API endpoint
                "dataSrc": ""
            },
            "columns": [{
                    "data": null,
                    "render": function(data, type, row, meta) {
                        return meta.row + 1; // Add 1 to start the serial number from 1
                    }
                },
                {
                    "data": "name"
                },
                {
                    "data": "phone"
                },
                {
                    "data": "email"
                },
                {
                    "data": "contact_person_name"
                },
                {
                    "data": "updated_at",
                    "render": function(data, type, row) {
                        // Use the formatDateTime function to format the date
                        return formatDateTime(data);
                    }
                },
                {
                    "data": "id",
                    "render": function(data, type, row) {
                        return '<button onclick="getCompanyDataView(' + data + ')" class="btn btn-outline-primary"  data-toggle="modal" data-target="#view-model" ><i class="mdi mdi-eye text-primary"></i></button>  <button onclick="getCompanyDataEdit(' + data + ')" class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-model" ><i class="mdi mdi-pencil text-primary"></i></button> <button onclick="companyDelete(' + data + ')"  class="btn btn-outline-primary delete-person-btn" ><i class="mdi mdi-close text-danger"></i></button>';
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



    function addCompany() {
        var formData = $('#add-company-form').serialize();

        $.ajax({
            type: 'POST',
            url: "{{ route('addCompanyData') }}",
            data: formData,
            success: function(response) {
                showSuccessToast(text = response.message);
                $('#add-model').modal('hide');
                $('#add-company-form')[0].reset();
                $('#order-listing').DataTable().ajax.reload(null, false);
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message);
            }
        });
    }

    function getCompanyDataView(id) {
        $.ajax({
            type: 'GET',
            url: "{{ route('viewCompany', ':id') }}".replace(':id', id),

            success: function(response) {
                // document.getElementById("view-id").value = response.id;
                document.getElementById("view-name").innerHTML = response.name;
                document.getElementById("view-website").innerHTML = response.website;
                document.getElementById("view-phone").innerHTML = response.phone;
                document.getElementById("view-email").innerHTML = response.email;
                document.getElementById("view-contact_person_name").innerHTML = response
                    .contact_person_name;
                document.getElementById("view-contact_person_email").innerHTML = response
                    .contact_person_email;
                document.getElementById("view-country_or_registration").innerHTML = response
                    .country_or_registration;
                document.getElementById("view-registration_year").innerHTML = response.registration_year;
                document.getElementById("view-updated_at").innerHTML = formatDateTime(response.updated_at);
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message)
            }
        });
    }

    function getCompanyDataEdit(id) {
        $.ajax({
            type: 'GET',
            url: "{{ route('viewCompany', ':id') }}".replace(':id', id),

            success: function(response) {
                document.getElementById("edit-id").value = response.id;
                document.getElementById("edit-name").value = response.name;
                document.getElementById("edit-website").value = response.website;
                document.getElementById("edit-phone").value = response.phone;
                document.getElementById("edit-email").value = response.email;
                document.getElementById("edit-contact_person_name").value = response.contact_person_name;
                document.getElementById("edit-contact_person_email").value = response
                    .contact_person_email;
                document.getElementById("edit-country_or_registration").value = response
                    .country_or_registration;
                document.getElementById("edit-registration_year").value = response.registration_year;
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message)
            }
        });
    }

    function editCompany() {
        var formDataEdit = $('#edit-company-form').serialize();
        var id = document.getElementById("edit-id").value;
        $.ajax({
            type: 'POST',
            url: "{{ route('editCompanyData', ':id') }}".replace(':id', id),
            data: formDataEdit,
            success: function(response) {
                showSuccessToast(text = response.message);
                $('#edit-model').modal('hide');
                $('#edit-company-form')[0].reset();
                $('#order-listing').DataTable().ajax.reload(null, false);
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message);
            }
        });
    }

    function companyDelete(id) {
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
                    url: "{{ route('deleteCompany', ':id') }}".replace(':id', id),
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        showSuccessToast(text = response.message)
                        $('#order-listing').DataTable().ajax.reload(null, false);
                    },
                    error: function(error) {
                        showDangerToast(text = error.responseJSON.message)
                    }
                });
            } else if (result.isDismissed) {
                swal('Cancelled', 'Company deletion was cancelled', 'info');
            }
        });
    }

</script>
@endsection
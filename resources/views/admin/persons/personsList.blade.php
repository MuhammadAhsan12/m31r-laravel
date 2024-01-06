@extends('admin.master')

@section('pagecontent')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card bg-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">Person List</h4>
                    <a class="btn btn-info d-none d-md-block" style="color: white" data-toggle="modal" data-target="#add-model">Add Person</a>
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
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Role</th>
                                    <th>Last Update</th>
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
    <div class="modal fade" id="add-model" style="margin-top: -40px;" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Add Person</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-person-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                                </div>
                                <div class="form-group">
                                    <label for="region">Region</label>
                                    <input type="text" class="form-control" id="region" name="region" placeholder="Region" required>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="education_level">Education Level</label>
                                    <input type="text" class="form-control" id="education_level" name="education_level" placeholder="Education Level" required>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="Project Manager">Project Manager</option>
                                        <option value="Expert">Expert</option>
                                        <option value="Qualitative Interviewer">Qualitative Interviewer</option>
                                        <option value="Enumerator">Enumerator</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>PDF upload</label>
                                    <input type="file" name="file" id="file" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload PDF">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="addPerson()">Save</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- edit model --}}
    <div class="modal fade" id="edit-model" style="margin-top: -40px;" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Edit Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-person-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="hidden" id="edit-id">

                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="edit-first_name" name="first_name" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="edit-last_name" name="last_name" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="edit-gender" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="edit-email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="edit-phone" name="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="edit-country" name="country" placeholder="Country">
                                </div>
                                <!-- Add more fields for editing a company here -->
                                <div class="form-group">
                                    <label for="region">Region</label>
                                    <input type="text" class="form-control" id="edit-region" name="region" placeholder="Region">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input type="date" class="form-control" id="edit-date_of_birth" name="date_of_birth">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="education_level">Education Level</label>
                                    <input type="text" class="form-control" id="edit-education_level" name="education_level" placeholder="Education Level">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="form-control" id="edit-role" name="role">
                                        <!-- <option value="">Select</option> -->
                                        <option value="Project Manager">
                                            Project Manager</option>
                                        <option value="Expert">Expert</option>
                                        <option value="Qualitative Interviewer">Qualitative Interviewer</option>
                                        <option value="Enumerator">Enumerator
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>PDF upload</label>
                                    <input type="file" name="file" id="edit-file" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload PDF">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="editPerson()">Save</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- view model --}}
    <div class="modal fade" id="view-model" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">View Person Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Name
                                </span>
                                <span class="float-right text-muted" id="name-view">

                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Email
                                </span>
                                <span class="float-right text-muted" id="email-view">

                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Phone
                                </span>
                                <span class="float-right text-muted" id="phone-view">

                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Gender
                                </span>
                                <span class="float-right text-muted" id="gender-view">

                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Country
                                </span>
                                <span class="float-right text-muted" id="country-view">

                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Region
                                </span>
                                <span class="float-right text-muted" id="region-view">

                                </span>
                            </p>
                        </div>
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-5">
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Date of Birth
                                </span>
                                <span class="float-right text-muted" id="dob-view">

                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Educational Level
                                </span>
                                <span class="float-right text-muted" id="education-view">

                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Role
                                </span>
                                <span class="float-right text-muted" id="role-view">

                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    File
                                </span>
                                <span class="float-right text-muted">
                                    <a class="btn btn-primary" style="color: white;" id="file-view" onclick="fetchPDF()" target="_blank">View PDF</a>
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Updated at
                                </span>
                                <span class="float-right text-muted" id="update-view">

                                </span>
                            </p>
                        </div>
                    </div>
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
                "url": "{{route('personData')}}", // Replace with your API endpoint
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
                    "data": null,
                    "render":function(data,type,row){
                        return row.first_name+" "+row.last_name;
                    }
                },
                {
                    "data": "email"
                },
                {
                    "data": "phone"
                },
                {
                    "data": "country"
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
                    "data": "id",
                    "render": function(data, type, row) {
                        return '<button onclick="getPersonDataView(' + data + ')" class="btn btn-outline-primary"  data-toggle="modal" data-target="#view-model" ><i class="mdi mdi-eye text-primary"></i></button>  <button onclick="getPersonDataEdit(' + data + ')" class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-model" ><i class="mdi mdi-pencil text-primary"></i></button> <button onclick="PersonDelete(' + data + ')"  class="btn btn-outline-primary delete-person-btn" ><i class="mdi mdi-close text-danger"></i></button>';
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


    function addPerson() {
        var formData = new FormData($('#add-person-form')[0]);
        var fileInput = document.getElementById('file');
        var file = fileInput.files[0]; // Get the file from the input

        function readFileAsBase64(file) {
            return new Promise((resolve, reject) => {
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var base64String = event.target.result.split(',')[1];
                        resolve(base64String); // Resolve the promise with the base64 string
                    };
                    reader.onerror = function(error) {
                        reject(error); // Reject the promise if there's an error
                    };
                    reader.readAsDataURL(file);
                } else {
                    reject('No file chosen.');
                }
            });
        }

        if (file) {
            readFileAsBase64(file)
                .then((base64String) => {
                    formData.set('file', base64String);
                    for (var pair of formData.entries()) {
                        console.log(pair[0] + ', ' + pair[1]);
                    }
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('addPersonData') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        enctype: 'multipart/form-data',
                        success: function(response) {
                            showSuccessToast(text = response.message);
                            $('#add-model').modal('hide');
                            $('#add-person-form')[0].reset();
                            $('#order-listing').DataTable().ajax.reload(null, false);
                        },
                        error: function(error) {
                            showDangerToast(text = error.responseJSON.message);
                        }
                    });
                })
                .catch((error) => {
                    console.error(error);
                });
        } else {
            showDangerToast(text = 'No file chosen.');
        }

    }
    var fileName;

    function getPersonDataView(id) {
        $.ajax({
            type: 'GET',
            url: "{{ route('viewPerson', ':id') }}".replace(':id', id),

            success: function(response) {
                // document.getElementById("view-id").value = response.id;
                document.getElementById("name-view").innerHTML = response.first_name + " " + response
                    .last_name;
                document.getElementById("gender-view").innerHTML = response.gender;
                document.getElementById("email-view").innerHTML = response.email;
                document.getElementById("phone-view").innerHTML = response.phone;
                document.getElementById("country-view").innerHTML = response.country;
                document.getElementById("region-view").innerHTML = response.region;
                document.getElementById("dob-view").innerHTML = response.date_of_birth;
                document.getElementById("education-view").innerHTML = response.education_level;
                document.getElementById("role-view").innerHTML = response.role;
                fileName = response.file;
                // document.getElementById("file-view").href = "../../../../storage/app/:file.pdf".replace(':file', response.file);
                document.getElementById("update-view").innerHTML = formatDateTime(response.updated_at);
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message)
            }
        });
    }
    // Fetch PDF function
    function fetchPDF() {
        // Make an AJAX request to the Laravel endpoint
        $.ajax({
            url: "{{ route('getPDF', ':fileName') }}".replace(':fileName', fileName),
            method: 'GET',
            xhrFields: {
                responseType: 'blob'
            },
            success: function(data, status, xhr) {
                let blob = new Blob([data], {
                    type: 'application/pdf'
                });
                let pdfUrl = URL.createObjectURL(blob);
                window.open(pdfUrl, '_blank');
            },
            error: function(xhr, status, error) {
                console.error('There was a problem fetching the PDF:', error);
            }
        });
    }

    // Call the function wit


    function getPersonDataEdit(id) {
        $.ajax({
            type: 'GET',
            url: "{{ route('viewPerson', ':id') }}".replace(':id', id),

            success: function(response) {
                document.getElementById("edit-id").value = response.id;
                document.getElementById("edit-first_name").value = response.first_name;
                document.getElementById("edit-last_name").value = response.last_name;
                document.getElementById("edit-gender").value = response.gender;
                document.getElementById("edit-email").value = response.email;
                document.getElementById("edit-phone").value = response.phone;
                document.getElementById("edit-country").value = response.country;
                document.getElementById("edit-region").value = response.region;
                document.getElementById("edit-date_of_birth").value = response.date_of_birth;
                document.getElementById("edit-education_level").value = response.education_level;
                document.getElementById("edit-role").value = response.role;
                // document.getElementById("edit-file").value = "data";
            },
            error: function(error) {
                showDangerToast(text = error.responseJSON.message)
            }
        });
    }

    function editPerson() {
        // var formData = new FormData($('#add-person-form')[0]);
        var formDataEdit = new FormData($('#edit-person-form')[0]);
        var fileInput = document.getElementById('edit-file');
        var file = fileInput.files[0]; // Get the file from the input

        function readFileAsBase64(file) {
            return new Promise((resolve, reject) => {
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var base64String = event.target.result.split(',')[1];
                        resolve(base64String); // Resolve the promise with the base64 string
                    };
                    reader.onerror = function(error) {
                        reject(error); // Reject the promise if there's an error
                    };
                    reader.readAsDataURL(file);
                } else {
                    reject('No file chosen.');
                }
            });
        }

        if (file) {
            readFileAsBase64(file)
                .then((base64String) => {
                    formDataEdit.set('file', base64String);
                    console.log("hello");
                    for (var pair of formDataEdit.entries()) {
                        console.log(pair[0] + ', ' + pair[1]);
                    }
                    var id = document.getElementById("edit-id").value;
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('editPersonData', ':id') }}".replace(':id', id),
                        data: formDataEdit,
                        processData: false,
                        contentType: false,
                        enctype: 'multipart/form-data',
                        success: function(response) {
                            showSuccessToast(text = response.message);
                            $('#edit-model').modal('hide');
                            $('#edit-person-form')[0].reset();
                            $('#order-listing').DataTable().ajax.reload(null, false);
                        },
                        error: function(error) {
                            showDangerToast(text = error.responseJSON.message);
                        }
                    });
                })
                .catch((error) => {
                    console.error(error);
                });
        } else {
            showDangerToast(text = 'No file chosen.');
        }
    }


    function PersonDelete(id) {
        event.preventDefault();
        var deleteButton = this;
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
                    url: "{{ route('deletePerson', ':id') }}".replace(':id', id),
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        showSuccessToast(text = response.message)
                        // $(this).closest('tr').remove();
                        $(deleteButton).closest('tr').remove();
                        $('#order-listing').DataTable().ajax.reload(null, false);
                    },
                    error: function(error) {
                        showDangerToast(text = error.responseJSON.message)
                    }
                });
            } else if (result.isDismissed) {
                swal('Cancelled', 'Person deletion was cancelled', 'info');
            }
        });
    }
</script>
@stop
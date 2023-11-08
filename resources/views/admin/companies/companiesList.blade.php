@extends('admin.master')

@section('pagecontent')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-white">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h4 class="mt-1 mb-1">Company List</h4>
                        <a href="{{ route('addCompany') }}" class="btn btn-info d-none d-md-block" style="color: white">Add Company</a>
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
                                        {{-- <th>Website</th> --}}
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Contact Person Name</th>
                                        {{-- <th>Contact Person Email</th>
                                        <th>Country/Registration</th>
                                        <th>Registration Year</th> --}}
                                        <th>Last Update</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serialNo = 1;
                                    @endphp
                                    @foreach ($companyData as $company)
                                        <tr>
                                            <td>{{ $serialNo++ }}</td>
                                            <td>{{ $company->name }}</td>
                                            {{-- <td>{{ $company->website }}</td> --}}
                                            <td>{{ $company->phone }}</td>
                                            <td>{{ $company->email }}</td>
                                            <td>{{ $company->contact_person_name }}</td>
                                            {{-- <td>{{ $company->contact_person_email }}</td>
                                            <td>{{ $company->country_or_registration }}</td>
                                            <td>{{ $company->registration_year }}</td> --}}
                                            <td>{{ $company->updated_at }}</td>
                                            <td>
                                                <a class="btn btn-outline-primary"
                                                href="{{ route('viewCompany', $company) }}" title="View"><i class="mdi mdi-eye text-primary"></i></a>
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('editCompany', $company) }}" title="Edit"><i class="mdi mdi-pencil text-primary"></i></a>
                                                <a class="btn btn-outline-primary delete-company-btn"
                                                    data-company-id="{{ route('deleteCompany', $company) }}" title="delete"><i class="mdi mdi-close text-danger"></i></a>
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

    <script src="{{ asset('adminfiles/assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.delete-company-btn').click(function(event) {
                event.preventDefault();
                var companyId = $(this).data('company-id');
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
                            url: companyId,
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                showSuccessToast(text = response.message)
                                // $(this).closest('tr').remove();
                                $(deleteButton).closest('tr').remove();
                            },
                            error: function(error) {
                                showDangerToast(text = error.responseJSON.message)
                            }
                        });
                    } else if (result.isDismissed) {
                        swal('Cancelled', 'Company deletion was cancelled', 'info');
                    }
                });
            });
        });
    </script>
@endsection

@extends('admin.master')

@section('pagecontent')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-white">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h4 class="mt-1 mb-1">User List</h4>
                        <a href="{{ route('adduser') }}" class="btn btn-info d-none d-md-block" style="color: white">Add
                            User</a>
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
                                        {{-- <th>Status</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serialNo = 1;
                                    @endphp
                                    @foreach ($userData as $user)
                                        <tr>
                                            <td>{{ $serialNo++ }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            {{-- <td>
                                                <label class="badge badge-info">On hold</label>
                                            </td> --}}
                                            <td>
                                                <a class="btn btn-outline-primary" href="{{ route('viewuser', $user) }}"><i
                                                        class="mdi mdi-eye text-primary"></i></a>
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('edituser', $user) }}"><i class="mdi mdi-pencil text-primary"></i></a>
                                                <a class="btn btn-outline-primary delete-user-btn"
                                                    data-user-id="{{ route('deleteUser', $user) }}"><i class="mdi mdi-close text-danger"></i></a>
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
            $('.delete-user-btn').click(function(event) {
                event.preventDefault();
                var userId = $(this).data('user-id');
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
                            url: userId,
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
                        swal('Cancelled', 'User deletion was cancelled', 'info');
                    }
                });
            });
        });
    </script>
@stop

@extends('admin.master')

@section('pagecontent')
    <div class="content-wrapper">
        {{-- <button type="button" class="btn btn-success btn-fw" onclick="showSuccessToast(text = 'ahsan')">Success</button>
        <button type="button" class="btn btn-info btn-fw" onclick="showInfoToast(text = 'ahsan')">Info</button>
        <button type="button" class="btn btn-warning btn-fw" onclick="showWarningToast(text = 'ahsan1234')">Warning</button>
        <button type="button" class="btn btn-danger btn-fw" onclick="showDangerToast(text = 'ahsan')">Danger</button> --}}
        {{-- <div class="loader-demo-box">
            <div class="pixel-loader"></div>
          </div> --}}
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-white">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h4 class="mt-1 mb-1">Add User</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form id="add-user-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role" required>
                                    <option value="user">select</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ route('userList') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('adminfiles/assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#add-user-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('adduserdata') }}',
                    data: formData,
                    success: function(response) {
                        showSuccessToast(text = response.message)
                        $('#add-user-form')[0].reset();
                    },
                    error: function(error) {
                        showDangerToast(text = error.responseJSON.message)
                    }
                });
            });
        });
    </script>
@endsection

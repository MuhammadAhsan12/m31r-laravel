@extends('admin.master')

@section('pagecontent')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-white">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h4 class="mt-1 mb-1">Edit User</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form id="edit-person-form">
                            @csrf
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="{{ $person->first_name }}">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="{{ $person->last_name }}">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option value="male" @if ($person->gender === 'male') selected @endif>Male</option>
                                    <option value="female" @if ($person->gender === 'female') selected @endif>Female</option>
                                    <option value="other" @if ($person->gender === 'other') selected @endif>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $person->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ $person->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="{{ $person->country }}">
                            </div>
                            <div class="form-group">
                                <label for="region">Region</label>
                                <input type="text" class="form-control" id="region" name="region" placeholder="Region" value="{{ $person->region }}">
                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $person->date_of_birth }}">
                            </div>
                            <div class="form-group">
                                <label for="education_level">Education Level</label>
                                <input type="text" class="form-control" id="education_level" name="education_level" placeholder="Education Level" value="{{ $person->education_level }}">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role">
                                    <option value="">Select</option>
                                    <option value="Project Manager" @if ($person->role === 'Project Manager') selected @endif>Project Manager</option>
                                    <option value="Expert" @if ($person->role === 'Expert') selected @endif>Expert</option>
                                    <option value="Qualitative Interviewer" @if ($person->role === 'Qualitative Interviewer') selected @endif>Qualitative Interviewer</option>
                                    <option value="Enumerator" @if ($person->role === 'Enumerator') selected @endif>Enumerator</option>
                                </select>
                            </div>
                            <input type="hidden" name="person_id" value="{{ $person->id }}">
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <a href="{{ route('personList') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#edit-person-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('editPersonData', $person) }}',
                    data: formData,
                    success: function(response) {
                        showSuccessToast(text = response.message);
                        window.location.href = '{{ route("personList") }}';
                    },
                    error: function(error) {
                        showDangerToast(text = error.responseJSON.message);
                    }
                });
            });
        });
    </script>
@endsection

@extends('admin.master')

@section('pagecontent')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-white">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h4 class="mt-1 mb-1">Edit Company</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form id="edit-company-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                    value="{{ $company->name }}">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="website" name="website" placeholder="Website"
                                    value="{{ $company->website }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    value="{{ $company->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    value="{{ $company->email }}">
                            </div>
                            <div class="form-group">
                                <label for="contact_person_name">Contact Person Name</label>
                                <input type="text" class="form-control" id="contact_person_name" name="contact_person_name" placeholder="Contact Person Name"
                                    value="{{ $company->contact_person_name }}">
                            </div>
                            <div class="form-group">
                                <label for="contact_person_email">Contact Person Email</label>
                                <input type="email" class="form-control" id="contact_person_email" name="contact_person_email" placeholder="Contact Person Email"
                                    value="{{ $company->contact_person_email }}">
                            </div>
                            <div class="form-group">
                                <label for="country_or_registration">Country/Registration</label>
                                <input type="text" class="form-control" id="country_or_registration" name="country_or_registration" placeholder="Country/Registration"
                                    value="{{ $company->country_or_registration }}">
                            </div>
                            <div class="form-group">
                                <label for="registration_year">Registration Year</label>
                                <input type="text" class="form-control" id="registration_year" name="registration_year" placeholder="Registration Year"
                                    value="{{ $company->registration_year }}">
                            </div>
                            <input type="hidden" name="company_id" value="{{ $company->id }}">
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <a href="{{ route('companyList') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#edit-company-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('editCompanyData', $company) }}',
                    data: formData,
                    success: function(response) {
                        showSuccessToast(text = response.message);
                        // window.location.href = '{{ route("companyList") }}';
                    },
                    error: function(error) {
                        showDangerToast(text = error.responseJSON.message);
                    }
                });
            });
        });
    </script>
@endsection

@extends('admin.master')

@section('pagecontent')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-white">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h4 class="mt-1 mb-1">View Company</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card align-items-center justify-content-center">
                <div class="card align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="py-4">
                            <div class="d-flex justify-content-center pb-4">
                                <p class="clearfix pb-2">
                                <a class="btn btn-outline-primary float-center"
                                    href="{{ route('editCompany', $company) }}"><i class="mdi mdi-pencil text-primary"></i></a>
                                <a class="btn btn-outline-primary delete-company-btn float-center text-muted"
                                    data-company-id="{{ route('deleteCompany', $company) }}"><i class="mdi mdi-close text-danger"></i></a>
                                </p>
                            </div>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Name
                                </span>
                                <span class="float-right text-muted">
                                    {{ $company->name }}
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Email
                                </span>
                                <span class="float-right text-muted">
                                    {{ $company->email }}
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Phone
                                </span>
                                <span class="float-right text-muted">
                                    {{ $company->phone }}
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Website
                                </span>
                                <span class="float-right text-muted">
                                    <a href="#">{{ $company->website }}</a>
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Contact Peron Name
                                </span>
                                <span class="float-right text-muted">
                                    {{ $company->contact_person_name }}
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Contact Person Email
                                </span>
                                <span class="float-right text-muted">
                                    {{ $company->contact_person_email }}
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Country or Regestration
                                </span>
                                <span class="float-right text-muted">
                                    {{ $company->country_or_registration }}
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Regestration Year
                                </span>
                                <span class="float-right text-muted">
                                    {{ $company->registration_year }}
                                </span>
                            </p>
                            <p class="clearfix pb-3">
                                <span class="float-left">
                                    Updated at
                                </span>
                                <span class="float-right text-muted">
                                    {{ $company->updated_at }}
                                </span>
                            </p>
                        </div>
                        {{-- <button class="btn btn-primary btn-block mb-2">Preview</button> --}}
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

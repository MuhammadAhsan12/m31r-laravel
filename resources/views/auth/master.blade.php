<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>M31 Research Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet"
        href="{{ asset('adminfiles/assets/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminfiles/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('adminfiles/assets/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('adminfiles/assets/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/m31/images/logos/M31Logo_Icon_White.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/m31/images/M31LogoWhite.png') }}" alt="logo">
                            </div>
                            @yield('pagecontent')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- plugins:js -->
    <script src="{{ asset('adminfiles/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('adminfiles/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('adminfiles/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('adminfiles/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('adminfiles/assets/js/template.js') }}"></script>
    <script src="{{ asset('adminfiles/assets/js/settings.js') }}"></script>
    <script src="{{ asset('adminfiles/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('adminfiles/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('adminfiles/assets/js/todolist.js') }}"></script>
    @yield('javascript')
    <!-- End custom js for this page-->
</body>

</html>
